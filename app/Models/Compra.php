<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';

    protected $fillable = [
        'id',
        'id_proveedores',
        'id_estatus_compras_ventas',
        'montoTotal'
    ];

    public function estatusComprasVentas_compras_Rel(){
        return $this->belongsTo(EstatusComprasventas::class,'id_estatus_compras_ventas');
    }


    public function egresos_compras_Rel(){
        return $this->hasMany(Egreso::class,'id');
    }
    public function productos_compras_Rel(){
        return $this->belongsToMany(Producto::class,'ordenes_de_compra');
    }
}
