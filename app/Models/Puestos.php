<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Puestos
 * @package App\Models
 * @version April 15, 2017, 5:31 pm UTC
 */
class Puestos extends Model
{
    use SoftDeletes;

    public $table = 'puestos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion',
        'depende_de'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function empleados()
    {
        return $this->hasMany('App\Models\Empleados', 'puesto_id');
    }

    public function dependeDe()
    {
        return $this->belongsTo('App\Models\Puestos', 'depende_de');
    }

    public function aCargoDe()
    {
        return $this->hasMany('App\Models\Puestos', 'depende_de');
    }

    
}
