<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenCompraSeeder extends Seeder
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
                'id_productos'=>1,
                'id_compras'=>1,
                'cantidad'=>1
            ]
        ];
        DB::table('ordenesdecompra')->insert($data);
    }
}
