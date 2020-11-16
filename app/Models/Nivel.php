<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Nivel
 * @package App\Models
 * @version November 3, 2020, 2:36 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sklConsultors
 * @property \Illuminate\Database\Eloquent\Collection $sklConsultorSkills
 * @property \Illuminate\Database\Eloquent\Collection $sklCursoSkills
 * @property \Illuminate\Database\Eloquent\Collection $sklPerfils
 * @property \Illuminate\Database\Eloquent\Collection $sklPerfilDetalles
 * @property string $nvl_nombre
 * @property string $nvl_descripcion
 * @property integer $nvl_valor
 */
class Nivel extends Model
{
    use SoftDeletes;

    public $table = 'skl_nivel';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'nvl_id';

    public $fillable = [
        'nvl_nombre',
        'nvl_descripcion',
        'nvl_valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nvl_id' => 'integer',
        'nvl_nombre' => 'string',
        'nvl_descripcion' => 'string',
        'nvl_valor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nvl_nombre' => 'required|string|max:200',
        'nvl_descripcion' => 'nullable|string',
        'nvl_valor' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklConsultors()
    {
        return $this->hasMany(\App\Models\SklConsultor::class, 'nvl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklConsultorSkills()
    {
        return $this->hasMany(\App\Models\SklConsultorSkill::class, 'nvl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklCursoSkills()
    {
        return $this->hasMany(\App\Models\SklCursoSkill::class, 'nvl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklPerfils()
    {
        return $this->hasMany(\App\Models\SklPerfil::class, 'nvl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklPerfilDetalles()
    {
        return $this->hasMany(\App\Models\SklPerfilDetalle::class, 'nvl_id');
    }
}
