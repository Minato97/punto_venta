<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDeVenta extends Model
{
    protected $table = 'ordenesDeVenta';
    protected $fillable = [
        'id',
        'id_productos',
        'id_ventas',
        'cantidad'
    ];
}
