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
}
