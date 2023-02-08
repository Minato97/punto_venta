<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventarios';

    protected $fillable = [
        'id',
        'stock',
        'valorMonetario',
        'id_productos',
        'id_almacenes'
    ];

    public function productos_inventarios_Rel(){
        return $this->belongsTo(Producto::class,'id_productos');
    }

    public function almacenes_inventarios_Rel(){
        return $this->belongsTo(Almacen::class,'id_almacenes');
    }
}
