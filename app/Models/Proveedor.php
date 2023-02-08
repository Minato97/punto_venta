<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [
        'id',
        'nombre',
        'telefono',
        'email',
        'calle',
        'numero',
        'codigo_posttal'
    ];

    public function productos_proveedores_Rel(){
        return $this->belongsToMany(Producto::class,'compras');
    }
}
