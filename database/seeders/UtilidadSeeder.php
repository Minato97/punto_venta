<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'id_ingresos'=>1,
                'id_egresos'=>1,
                'utilidad'=>0.00
            ]
        ];
        DB::table('utilidades')->insert($data);
    }
}
