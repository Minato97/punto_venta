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

    ];

    public function compras_egresos_Rel(){
        return $this->hasMany(Compra::class,'id');
    }


    public function utilidades_egresos_Rel(){
        return $this->hasOne(Utilidad::class,'id_utilidades');
    }
}
