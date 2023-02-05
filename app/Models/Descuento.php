<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    protected $table ='descuentos';
    protected $fillable = [
        'id',
        'descuento',
        'porcentaje'
    ];
    public function ventas_descuentos_Rel(){
        return $this->hasMany(Venta::class,'id');
    }
    public function compras_descuentos_Rel(){
        return $this->hasMany(Compra::class,'id');
    }
}
