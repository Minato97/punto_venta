<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
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
                'stock'=>1,
                'monto'=>0.00,
                'id_productos'=>1,
                'id_almacenes'=>1
            ]
        ];
        DB::table('inventarios')->insert($data);
    }
}
