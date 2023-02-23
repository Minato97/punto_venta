<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProductos extends Model
{
    protected $table = 'categorias_productos';
    protected $fillable = [
        'id',
        'categoria_productos'
        ];

     public function productos_categoria_Rel(){
         return $this->hasMany(Producto::class,'id');
     }
}
