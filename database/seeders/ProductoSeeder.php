<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $data = [
//            [
//                'producto' => 'otro',
//                'precio' => 0.00,
//                'id_categorias' => 1,
//                'costo'=>0.00,
//            ]
//        ];
//        DB::table('productos')->insert($data);
        Producto::factory(50)->create();
    }
}
