<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
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
                'nombre_cliente'=> 'Público en general',
                'telefono' => 'No aplica',
                'calle' => 'No aplica',
                'numero' => 00,
                'codigo_postal' => 00,
                'email'=> 'No aplica',
                'password' => 'No aplica'
            ]
        ];
      DB::table('clientes')->insert($data);
    }
}
