<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
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
                'categoria_productos' => 'otra'
            ],
            [
                'categoria_productos' => 'Abarrotes'
            ],
            [
                'categoria_productos' => 'Lacteos'
            ],
            [
                'categoria_productos' => 'Carnes'
            ],
            [
                'categoria_productos' => 'Frutas y Verduras'
            ],
            [
                'categoria_productos' => 'Limpieza'
            ]
            ];

        DB::table('categorias_productos')->insert($data);
    }
}
