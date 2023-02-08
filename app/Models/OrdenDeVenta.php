<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDeVenta extends Model
{
    protected $table = 'ordenesDeVenta';
    protected $fillable = [
        'id',
        'id_productos',
        'id_ventas',
        'cantidad'
    ];

    public function productos_ordenDeVenta_Rel(){
        return $this->belongsTo(Producto::class,'id_productos');
    }

    public function ventas_ordenDeVenta_Rel(){
        return $this->belongsTo(Venta::class,'id_ventas');
    }
}
