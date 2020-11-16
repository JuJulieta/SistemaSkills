<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CursoSkill
 * @package App\Models
 * @version November 3, 2020, 4:36 pm UTC
 *
 * @property \App\Models\SklCurso $cur
 * @property \App\Models\SklSkill $skl
 * @property \App\Models\SklNivel $nvl
 * @property integer $cur_id
 * @property integer $skl_id
 * @property integer $nvl_id
 */
class CursoSkill extends Model
{
    use SoftDeletes;

    public $table = 'skl_curso_skill';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'crs_id';

    public $fillable = [
        'cur_id',
        'skl_id',
        'nvl_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'crs_id' => 'integer',
        'cur_id' => 'integer',
        'skl_id' => 'integer',
        'nvl_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cur_id' => 'required|integer',
        'skl_id' => 'required|integer',
        'nvl_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cur()
    {
        return $this->belongsTo(\App\Models\SklCurso::class, 'cur_id');
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
