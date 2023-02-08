<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'id',
        'nombre',
        'telefono',
        'calle',
        'numero',
        'codigo_postal',
        'email',
        'password'
    ];
    public function ventas_clientes_Rel(){
        return $this->hasMany(Venta::class,'id');
    }
    /**
     * The attributes that should be cast.
     *
        * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
