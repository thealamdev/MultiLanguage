<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function translate()
    {
        return $this->morphTo(Translate::class,'translate_id');
    }
}
