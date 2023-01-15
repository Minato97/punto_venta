<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = [
        'id',
        'categoria'
        ];

     public function productosRel(){
         return $this->hasMany(Producto::class,'id');
     }
}
