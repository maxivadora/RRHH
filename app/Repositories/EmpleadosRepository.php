<?php

namespace App\Repositories;

use App\Models\Empleados;
use InfyOm\Generator\Common\BaseRepository;

class EmpleadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'legajo',
        'telefono',
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Empleados::class;
    }
}
