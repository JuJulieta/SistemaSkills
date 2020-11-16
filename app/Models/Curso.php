<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Curso
 * @package App\Models
 * @version November 3, 2020, 3:59 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sklConsultors
 * @property \Illuminate\Database\Eloquent\Collection $sklCursoSkills
 * @property string $cur_nombre
 * @property string $cur_descripcion
 */
class Curso extends Model
{
    use SoftDeletes;

    public $table = 'skl_curso';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'cur_id';

    public $fillable = [
        'cur_nombre',
        'cur_descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cur_id' => 'integer',
        'cur_nombre' => 'string',
        'cur_descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cur_nombre' => 'required|string|max:200',
        'cur_descripcion' => 'required|string|max:300',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function sklConsultors()
    {
        return $this->belongsToMany(\App\Models\SklConsultor::class, 'skl_curso_consultor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklCursoSkills()
    {
        return $this->hasMany(\App\Models\SklCursoSkill::class, 'cur_id');
    }
}
