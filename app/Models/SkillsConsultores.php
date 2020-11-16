<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//unico Mantenedor con nombre diferente a su tabla en la BD Consultor_Skill
/**
 * Class SkillsConsultores
 * @package App\Models
 * @version August 28, 2020, 2:42 pm UTC
 *
 * @property \App\Models\SklConsultor $con
 * @property \App\Models\SklSkill $skl
 * @property \App\Models\SklNivel $nvl
 * @property integer $con_id
 * @property integer $skl_id
 * @property integer $nvl_id
 * @property string $csk_comentario
 */
class SkillsConsultores extends Model
{
    use SoftDeletes;

    public $table = 'skl_consultor_skill';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'csk_id';

    public $fillable = [
        'con_id',
        'skl_id',
        'nvl_id',
        'csk_comentario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'csk_id' => 'integer',
        'con_id' => 'integer',
        'skl_id' => 'integer',
        'nvl_id' => 'integer',
        'csk_comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'con_id' => 'required|integer',
        'skl_id' => 'required|integer',
        'nvl_id' => 'required|integer',
        'csk_comentario' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function con()
    {
        return $this->belongsTo(\App\Models\SklConsultor::class, 'con_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function skl()
    {
        return $this->belongsTo(\App\Models\SklSkill::class, 'skl_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nvl()
    {
        return $this->belongsTo(\App\Models\SklNivel::class, 'nvl_id');
    }
}
