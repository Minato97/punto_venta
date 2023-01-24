<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingresos';

    protected $fillable = [
        'id',
        'ingreso',
        'id_ventas'
    ];

    public function ventas_ingresos_Rel(){
        return $this->belongsTo(Venta::class,'id_ventas');
    }

    public function egresos_ingresos_Rel(){
        return $this->belongsToMany(Egreso::class,'utilidades');
    }
}
