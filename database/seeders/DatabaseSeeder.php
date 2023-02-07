<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RolSeeder::class);
        $this->call(EstatusSeeder::class);
        $this->call(DescuentoSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(CategoriaFacturaSeeder::class);
        $this->call(VentaSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(CompraSeeder::class);
        $this->call(AlmacenSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(OrdenCompraSeeder::class);
        $this->call(OrdenVentaSeeder::class);
        $this->call(EgresoSeeder::class);
        $this->call(IngresoSeeder::class);
        $this->call(InventarioSeeder::class);
        $this->call(UtilidadSeeder::class);

    }
}
