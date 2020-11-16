<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CursoConsultor
 * @package App\Models
 * @version November 3, 2020, 4:34 pm UTC
 *
 * @property \App\Models\SklCurso $cur
 * @property \App\Models\SklConsultor $con
 * @property integer $cur_id
 * @property integer $con_id
 */
class CursoConsultor extends Model
{
    use SoftDeletes;

    public $table = 'skl_curso_consultor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'cuc_id';

    public $fillable = [
        'cur_id',
        'con_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cuc_id' => 'integer',
        'cur_id' => 'integer',
        'con_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cur_id' => 'required|integer',
        'con_id' => 'required|integer',
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
    public function con()
    {
        return $this->belongsTo(\App\Models\SklConsultor::class, 'con_id');
    }
}
