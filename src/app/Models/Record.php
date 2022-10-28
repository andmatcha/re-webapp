<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Record extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    private int $user_id;
    private int $year;
    private int $month;

    public function language_records()
    {
        return $this->hasMany(LanguageRecord::class);
    }

    public function content_records()
    {
        return $this->hasMany(ContentRecord::class);
    }

    public static function new($user_id, $year, $month)
    {
        $instance = new Record();
        $instance->user_id = $user_id;
        $instance->year = $year;
        $instance->month = $month;
        return $instance;
    }

    /**
     * 日毎の学習時間
     *
     * @return \Illuminate\Support\Collection
     */
    public function dailyTodal(): \Illuminate\Support\Collection
    {
        return Record::where('user_id', $this->user_id)
            ->where('year', $this->year)
            ->where('month', $this->month)
            ->get()
            ->groupBy('day')
            ->map(function ($item, $day) {
                return ['day' => $day, 'amount' => $item->sum('amount')];
            })
            ->values();
    }

    /**
     * 言語ごとの学習時間
     *
     * @return \Illuminate\Support\Collection
     */
    public function totalByLanguage(): \Illuminate\Support\Collection
    {
        return DB::table('records')
            ->join('language_records', 'records.id', '=', 'language_id')
            ->join('languages', 'language_id', '=', 'languages.id')
            ->where('user_id', '=', $this->user_id)
            ->where('year', '=', $this->year)
            ->where('month', '=', $this->month)
            ->selectRaw('language_id as id, languages.name as name, sum(language_records.amount) as amount')
            ->groupBy('language_id')
            ->orderByDesc('amount')
            ->get();
    }

    /**
     * コンテンツごとの学習時間
     *
     * @return \Illuminate\Support\Collection
     */
    public function totalByContent(): \Illuminate\Support\Collection
    {
        return DB::table('records')
        ->join('content_records', 'records.id', '=', 'content_id')
        ->join('contents', 'content_id', '=', 'contents.id')
        ->where('user_id', '=', $this->user_id)
            ->where('year', '=', $this->year)
            ->where('month', '=', $this->month)
            ->selectRaw('content_id as id, contents.name as name, sum(content_records.amount) as amount')
            ->groupBy('content_id')
            ->orderByDesc('amount')
            ->get();
    }
}
