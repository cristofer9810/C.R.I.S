<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_debt extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function debt()
    {
        return $this->hasMany(Debt::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
