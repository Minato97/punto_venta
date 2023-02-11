<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilidad extends Model
{
    protected $table = 'utilidades';

    protected $fillable =[
        'id',
        'utilidad',
        'id_ingresos',
        'id_egresos'
    ];

    public function ingresos_utilidades_Rel(){
        return $this->belongsTo(Ingreso::class,'id_ingresos');
    }
    public function egresos_utilidades_Rel(){
        return $this->belongsTo(Egreso::class,'id_egresos');
    }
}
