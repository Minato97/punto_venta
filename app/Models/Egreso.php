<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    protected $table ='egresos';

    protected $fillable = [
        'id',
        'egreso',
        'id_compras'
    ];

    public function compras_egresos_Rel(){
        return $this->belongsTo(Compra::class,'id_compras');
    }

    public function ingresos_egresos_Rel(){
        return $this->belongsToMany(Ingreso::class,'utilidades');
    }
}
