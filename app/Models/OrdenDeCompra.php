<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDeCompra extends Model
{
    protected $table = 'ordenesDeCompra';
    protected $fillable = [
        'id',
        'id_productos',
        'id_compras',
        'cantidad'
    ];

    public function productos_ordenDeCompra_Rel(){
        return $this->belongsTo(Producto::class,'id_productos');
    }

    public function compras_ordenDeCompra_Rel(){
        return $this->belongsTo(Compra::class,'id_compras');
    }

}
