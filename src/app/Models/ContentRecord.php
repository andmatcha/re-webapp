<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentRecord extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
