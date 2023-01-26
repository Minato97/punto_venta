<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected  $table = 'Almacenes';

    protected $fillable = [
      'id',
      'almacen'
    ];

    public function productosRel(){
        return $this->belongsToMany(Producto::class,'inventarios');
    }
}
