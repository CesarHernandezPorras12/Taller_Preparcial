<?php

namespace Database\Factories;

use App\Models\VentaMoto;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaMotosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VentaMoto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre_Vendedor' => $this->faker->unique()->name,
            'Nombre_Comprador' => $this->faker->unique()->name,            
            'Marca_Moto' => $this->faker->randomElement(['Honda', 'Yamaha', 'Suzuki', 'Kawasaki']),
            'Valor_Moto' => $this->faker->randomFloat(2, 1000, 10000),
            'Fecha_Venta' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
