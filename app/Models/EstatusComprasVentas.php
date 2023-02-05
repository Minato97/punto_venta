<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusComprasVentas extends Model
{
protected $table ='estatus_compras_ventas';
protected $fillable = [
    'id',
    'estatus'
];
    public function ventas_estatus_compras_ventas_Rel(){
        return $this->hasMany(Venta::class,'id');
    }
    public function compras_estatus_compras_ventas_Rel(){
        return $this->hasMany(compra::class,'id');
    }
}
