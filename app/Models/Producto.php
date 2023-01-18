<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'id',
        'producto',
        'precio',
        'id_categorias'
    ];
    public function categoriasRel(){
        return $this->belongsTo(Categoria::class,'id_categorias');
    }

    public function ventasRel(){
        return $this->belongsToMany(Venta::class,'ordenes');
    }
}
