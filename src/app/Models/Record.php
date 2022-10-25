<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function language_record()
    {
        return $this->hasMany(LanguageRecord::class);
    }

    public function content_record()
    {
        return $this->hasMany(ContentRecord::class);
    }
}
