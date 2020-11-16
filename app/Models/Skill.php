<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Skill
 * @package App\Models
 * @version November 3, 2020, 2:42 pm UTC
 *
 * @property \App\Models\SklSubCategorium $scat
 * @property \Illuminate\Database\Eloquent\Collection $sklConsultorSkills
 * @property \Illuminate\Database\Eloquent\Collection $sklCursoSkills
 * @property \Illuminate\Database\Eloquent\Collection $sklPerfilDetalles
 * @property string $skl_nombre
 * @property string $skl_descripcion
 * @property integer $scat_id
 */
class Skill extends Model
{
    use SoftDeletes;

    public $table = 'skl_skill';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'skl_id';

    public $fillable = [
        'skl_nombre',
        'skl_descripcion',
        'scat_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'skl_id' => 'integer',
        'skl_nombre' => 'string',
        'skl_descripcion' => 'string',
        'scat_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'skl_nombre' => 'required|string|max:300|unique:skl_skill',
        'skl_descripcion' => 'nullable|string',
        'scat_id' => 'required|integer|min:1',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
        /**
     * Validation rules
     *
     * @var array
     */
    public static $rules2 = [
        'skl_nombre' => 'required|string|max:300',
        'skl_descripcion' => 'nullable|string',
        'scat_id' => 'required|integer|min:1',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function scat()
    {
        return $this->belongsTo(\App\Models\SklSubCategorium::class, 'scat_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklConsultorSkills()
    {
        return $this->hasMany(\App\Models\SklConsultorSkill::class, 'skl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklCursoSkills()
    {
        return $this->hasMany(\App\Models\SklCursoSkill::class, 'skl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklPerfilDetalles()
    {
        return $this->hasMany(\App\Models\SklPerfilDetalle::class, 'skl_id');
    }
}
