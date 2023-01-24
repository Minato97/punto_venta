<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilidad extends Model
{
    protected $table = 'utilidades';

    protected $fillable =[
        'id',
        'utilidad',
        'id_ingresos',
        'id_egresos'
    ];
}
