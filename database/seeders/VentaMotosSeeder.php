<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\VentaMotos;

class VentaMotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

                // Generar 50 registros falsos utilizando el Factory
                VentaMotos::factory()->count(50)->create();

                // for ($i = 1; $i <= 10; $i++) {
              //   DB::table('venta_motos')->insert([
              //     'Nombre_Vendedor' => 'Vendedor '.$i,
             //   'Nombre_Comprador' => 'Comprador '.$i,
               // 'Marca_Moto' => 'Marca '.$i,
                //'Valor_Moto' => rand(1000, 10000),
                //'Fecha_Venta' => now(),
                //'created_at' => now(),
                //'updated_at' => now(),
            //]);
        }
    }