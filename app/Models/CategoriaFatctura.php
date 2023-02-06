<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaFatctura extends Model
{
    protected $table = 'categorias_facturas';

    protected $fillable = [
        'id',
        'categoria'
    ];

    public function ventas_categoriaFactura_Rel(){
        return $this->hasMany(Venta::class,'id');
    }
}
