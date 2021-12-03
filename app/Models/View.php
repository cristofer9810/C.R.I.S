<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //relacion uno a uno polimorfica

    public function gallery()
    {
        return $this->morphOne(Gallery::class, 'imageable');
    }
}
