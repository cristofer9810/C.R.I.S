<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];


    //relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos
     public function category_debt()
    {
        return $this->belongsTo(Category_debt::class);
    }
}
