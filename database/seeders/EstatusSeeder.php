<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusSeeder extends Seeder
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
                'estatus'=>'Creada'
            ],
            [
                'estatus'=>'En Preparación'
            ],
            [
                'estatus'=>'En camino'
            ],
            [
                'estatus'=>'Finalizada'
            ],
            [
                'estatus'=>'Pendiente de pago'
            ],
        ];
        DB::table('estatus_compras_ventas')->insert($data);
    }
}
