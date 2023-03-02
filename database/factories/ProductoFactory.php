<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'producto' => $this->faker->sentence(1),
            'precio'=> $this->faker->randomFloat(2,6.00,10.00),
            'id_categorias'=> $this->faker->randomFloat(0,2,6),
            'costo'=> $this->faker->randomFloat(2,1.00,5.00)
        ];
    }
}
