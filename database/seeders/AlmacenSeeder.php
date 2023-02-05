<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlmacenSeeder extends Seeder
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
                'almacen' => 'Disponibles',
                'descripcion' => 'En este almacén se guardan todos los productos listos para ser vendidos'
            ],
            [
                'almacen' => 'Sin stock',
                'descripcion' => 'En este almacén se guardan todos los productos con stock 0, es solo para tener referencia de un producto y no eliminarlo aunque el stock sea 0'
            ],
            [
                'almacen' => 'Preventas',
                'descripcion' => 'En este almacén se registraran productos que tendremos proximamente pero que se pueden vender por adelantado y su entrega sera despues,
                por lo general son productos que nosotros como empresa compramos por adelantado tambien a un proveedor'
            ],
            [
                'almacen' => 'Proximos a caducar',
                'descripcion' => 'En este almacén se guardan todos los productos que esten a menos de una semana por caducar'
            ],
            [
                'almacen' => 'Prestamos',
                'descripcion' => 'En este almacén se guardaran los productos que vendamos y que no tenemos en stock virtual pero si en fisico,
                una vez se realice el registro en inventario y en almacen de disponibles se descontaran todas las cantidades que se encuentren en este almacen'
            ],
            [
                'almacen' => 'Productos reacondicionados',
                'descripcion' => 'En este almacén se guardan todos los productos que esten en exibicion o sean devueltos por el cliente'
            ]

        ];

        DB::table('almacenes')->insert($data);
    }
}
