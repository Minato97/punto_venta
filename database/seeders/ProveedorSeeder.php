<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
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
                'nombre' => 'Otro',
                'telefono' => 'No aplica',
                'calle' => 'No aplica',
                'numero' => 00,
                'codigo_postal' => 00,
                'email'=>'No aplica',
            ]
        ];
        DB::table('proveedores')->insert($data);
    }
}
