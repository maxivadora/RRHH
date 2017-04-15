<?php

namespace App\Repositories;

use App\Models\Puestos;
use InfyOm\Generator\Common\BaseRepository;

class PuestosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Puestos::class;
    }
}
