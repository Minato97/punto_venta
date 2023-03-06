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
        'id_estatus',
        'id_categoria_factura',
        'id_descuentos',
        'id_ingresos'
    ];

public function clientes_ventas_Rel(){
    return $this->belongsTo(Cliente::class,'id_clientes');
}
    public function ingresos_ventas_Rel(){
        return $this->belongsTo(Cliente::class,'id_ingresos');
    }

public function estatusComprasVentas_ventas_Rel(){
    return $this->belongsTo(EstatusComprasventas::class,'id_estatus');
}
    public function descuentos_ventas_Rel(){
        return $this->belongsTo(Descuento::class,'id_descuentos');
    }


    public function productos_ventas_Rel(){
        return $this->belongsToMany(Producto::class,'ordenes_de_venta');
    }

    public function categoriaFactura_ventas_Rel(){
        return $this->belongsTo(CategoriaFatctura::class,'id_categoria_factura');
    }
    public function ordenVentas_ventas_Rel(){
        return $this->hasMany(OrdenDeVenta::class,'id_ventas');
    }
}
