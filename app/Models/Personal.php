<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //relacion uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
