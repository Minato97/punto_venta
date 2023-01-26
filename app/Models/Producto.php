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
    public function categoriasProductos_productos_Rel(){
        return $this->belongsTo(CategoriaProductos::class,'id_categorias');
    }

    public function ventas_productos_Rel(){
        return $this->belongsToMany(Venta::class,'ordenes');
    }

    public function almacenes_productos_Rel(){
        return $this->belongsToMany(Almacen::class,'almacenes');
    }

    public function proveedores_productos_Rel(){
        return $this->belongsToMany(Proveedor::class,'compras');
    }
}
