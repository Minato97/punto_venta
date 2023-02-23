<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
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
                'id_estatus'=>4,
                'id_proveedores'=>1,
                'id_descuentos'=>1,
                'id_egresos'=>1
            ]
        ];
        DB::table('compras')->insert($data);
    }
}
