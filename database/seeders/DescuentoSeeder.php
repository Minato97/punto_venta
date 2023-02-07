<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescuentoSeeder extends Seeder
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
          'descuento'=>'cliente frecuente',
          'porcentaje'=>10.00
            ]
        ];
        DB::table('descuentos')->insert($data);
            }
}
