<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
protected $table ='estatus';
protected $fillable = [
    'id',
    'estatus'
];
    public function ventasRel(){
        return $this->hasMany(Venta::class,'id');
    }
}
