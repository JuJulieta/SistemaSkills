<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consultor
 * @package App\Models
 * @version November 3, 2020, 2:27 pm UTC
 *
 * @property \App\Models\SklLineaServicio $lsv
 * @property \App\Models\SklNivel $nvl
 * @property \App\Models\SklCargo $car
 * @property \Illuminate\Database\Eloquent\Collection $sklConsultorSkills
 * @property \Illuminate\Database\Eloquent\Collection $sklCursos
 * @property string $con_nombres
 * @property string $con_apellidos
 * @property string $con_comentarios
 * @property string $email
 * @property integer $lsv_id
 * @property integer $nvl_id
 * @property integer $car_id
 */
class Consultor extends Model
{
    use SoftDeletes;

    public $table = 'skl_consultor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'con_id';

    public $fillable = [
        'con_nombres',
        'con_apellidos',
        'con_comentarios',
        'email',
        'lsv_id',
        'nvl_id',
        'car_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'con_id' => 'integer',
        'con_nombres' => 'string',
        'con_apellidos' => 'string',
        'con_comentarios' => 'string',
        'email' => 'string',
        'lsv_id' => 'integer',
        'nvl_id' => 'integer',
        'car_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'con_nombres' => 'required|string|max:400',
        'con_apellidos' => 'required|string|max:400',
        'con_comentarios' => 'nullable|string',
        'email' => 'required|string|max:255',
        'lsv_id' => 'required|integer|min:1',
        'nvl_id' => 'required|integer|min:1',
        'car_id' => 'required|integer|min:1',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function lsv()
    {
        return $this->belongsTo(\App\Models\SklLineaServicio::class, 'lsv_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nvl()
    {
        return $this->belongsTo(\App\Models\SklNivel::class, 'nvl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function car()
    {
        return $this->belongsTo(\App\Models\SklCargo::class, 'car_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklConsultorSkills()
    {
        return $this->hasMany(\App\Models\SklConsultorSkill::class, 'con_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function sklCursos()
    {
        return $this->belongsToMany(\App\Models\SklCurso::class, 'skl_curso_consultor');
    }

}
