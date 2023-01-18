<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $fillable = [
        'id',
        'monto_total',
        'id_clientes',
        'id_estatus'
    ];

public function clientesRel(){
    return $this->belongsTo(Cliente::class,'id_clientes');
}

public function estatusRel(){
    return $this->belongsTo(Estatus::class,'id_estatus');
}

    public function productosRel(){
        return $this->belongsToMany(Producto::class,'ordenes');
    }
}
