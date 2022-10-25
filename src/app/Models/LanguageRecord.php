<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LanguageRecord extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
