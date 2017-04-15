<?php

use Illuminate\Database\Seeder;

class PuestosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puestos')->insert([
            'nombre' => 'Ninguno',
            'descripcion' => 'No depende de ningun otro puesto',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => null,
        ]);
    }
}
