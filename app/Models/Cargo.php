<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cargo
 * @package App\Models
 * @version November 3, 2020, 2:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sklConsultors
 * @property \Illuminate\Database\Eloquent\Collection $sklPerfils
 * @property string $car_nombre
 * @property string $car_descripcion
 */
class Cargo extends Model
{
    use SoftDeletes;

    public $table = 'skl_cargo';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'car_id';

    public $fillable = [
        'car_nombre',
        'car_descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'car_id' => 'integer',
        'car_nombre' => 'string',
        'car_descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'car_nombre' => 'required|string|max:200',
        'car_descripcion' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklConsultors()
    {
        return $this->hasMany(\App\Models\SklConsultor::class, 'car_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklPerfils()
    {
        return $this->hasMany(\App\Models\SklPerfil::class, 'car_id');
    }
}
