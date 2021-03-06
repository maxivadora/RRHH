<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleados
 * @package App\Models
 * @version April 15, 2017, 4:20 pm UTC
 */
class Empleados extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    

    protected $dates = ['deleted_at', 'fecha_nacimiento'];


    public $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'legajo',
        'telefono',
        'direccion',
        'puesto_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'fecha_nacimiento' => 'date',
        'legajo' => 'integer',
        'telefono' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function puesto()
    {
        return $this->belongsTo('App\Models\Puestos', 'puesto_id');
    }

    
}
