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
        DB::table('puestos')->insert([
            'nombre' => 'Gerente General',
            'descripcion' => 'Puesto maximo de la empresa',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '1',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Administracion de RRHH',
            'descripcion' => 'Encargado del personal',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '2',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Liquidacion de Sueldos',
            'descripcion' => 'Encargado de pagar al personal',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '3',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Dpto Ventas',
            'descripcion' => 'Realiza las ventas',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '2',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Marketing',
            'descripcion' => 'Encargado de las relaciones externas',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '2',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Dpto Produccion',
            'descripcion' => 'No depende de ningun otro puesto',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '2',
        ]);
        DB::table('puestos')->insert([
            'nombre' => 'Embalaje',
            'descripcion' => 'Encargado de embalar la mercaderia',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '7',
        ]);

        DB::table('puestos')->insert([
            'nombre' => 'Armado',
            'descripcion' => 'Arma el producto',
            'created_at' => null,
            'updated_at' => null,
            'deleted_at' => null,
            'depende_de' => '7',
        ]);
    }
}
