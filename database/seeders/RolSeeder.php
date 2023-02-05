<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
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
                'rol'=> 'Administrador'
            ],
            [
                'rol'=> 'Usuario_ventas'
            ],
            [
                'rol'=> 'Usuario_inventarios'
            ],
            [
                'rol'=> 'Usuario_contabilidad'
            ],
        ];
        DB::table('roles')->insert($data);
    }
}
