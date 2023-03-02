<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = [
        'id',
        'producto',
        'precio',
        'id_categorias',
        'costo'
    ];
    public function categoriasProductos_productos_Rel(){
        return $this->belongsTo(CategoriaProductos::class,'id_categorias');
    }

    public function ventas_productos_Rel(){
        return $this->belongsToMany(Venta::class,'ordenes_de_venta');
    }

    public function almacenes_productos_Rel(){
        return $this->belongsToMany(Almacen::class,'inventarios');
    }

    public function compras_productos_Rel(){
        return $this->belongsToMany(Compra::class,'ordenes_de_Compra');
    }
}
