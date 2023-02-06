<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaFacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'categoria_factura'=>'Adquisición de mercancías'
            ],
            [
                'categoria_factura'=>'Devoluciones, descuentos o bonificaciones'
            ],
            [
                'categoria_factura'=>'Gastos en general'
            ],
            [
                'categoria_factura'=>'Construcciones'
            ],
            [
                'categoria_factura'=>'Mobiliario y equipo de oficina por inversiones'
            ],
            [
                'categoria_factura'=>'Equipo de transporte'
            ],
            [
                'categoria_factura'=>'Equipo de cómputo y accesorios'
            ],
            [
                'categoria_factura'=>'Dados, troqueles, moldes, matrices y herramental'
            ],
            [
                'categoria_factura'=>'Comunicaciones telefónicas'
            ],
            [
                'categoria_factura'=>'Comunicaciones satelitales'
            ],
            [
                'categoria_factura'=>'Otra maquinaria y equipo'
            ],
            [
                'categoria_factura'=>'Pagos'
            ],
            [
                'categoria_factura'=>'Nómina'
            ],
            [
                'categoria_factura'=>'Sin Efectos Fiscales'
            ],
        ];
        DB::table('categorias_facturas')->insert($data);
    }
}
