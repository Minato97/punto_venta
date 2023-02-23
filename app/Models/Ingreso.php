<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingresos';

    protected $fillable = [
        'id',
        'ingreso'
    ];

    public function ventas_ingresos_Rel(){
        return $this->hasMany(Venta::class,'id_ventas');
    }



    public function utilidades_ingresos_Rel(){
        return $this->hasOne(Utilidad::class,'id_utilidades');
    }
}
