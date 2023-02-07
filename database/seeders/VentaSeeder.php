<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentaSeeder extends Seeder
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
                'montoTotal'=>0.00,
                'id_clientes'=>1,
                'id_estatus'=>1,
                'id_categoria_factura'=>1,
                'id_descuentos'=>1
            ]
        ];
        DB::table('ventas')->insert($data);

    }
}
