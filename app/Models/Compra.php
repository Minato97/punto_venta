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
        'id_estatus',
        'monto_total',
        'id_descuentos',
        'id_egresos'
    ];

    public function estatusComprasVentas_compras_Rel(){
        return $this->belongsTo(EstatusComprasventas::class,'id_estatus');
    }
    public function descuentos_compras_Rel(){
        return $this->belongsTo(Descuento::class,'id_descuentos');
    }
    public function egresos_compras_Rel(){
        return $this->belongsTo(Descuento::class,'id_egresos');
    }
    public function proveedores_compras_Rel(){
        return $this->belongsTo(Proveedor::class,'id_proveedores');
    }


    public function productos_compras_Rel(){
        return $this->belongsToMany(Producto::class,'ordenes_de_compra');
    }
}
