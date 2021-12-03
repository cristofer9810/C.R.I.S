<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //este protected es un metodo de validacion que se ve reflejado en la vista
    protected $fillable =['name', 'slug'];

 
    //este me muestra el nombre de la categoria en la URL en vez del ID  
    public function getRouteKeyName()
    {
        return "slug";
    }
    
    //relacion uno a muchos

    public function releases()
    {
        return $this->hasMany(Release::class);
    }
}
