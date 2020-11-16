<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PerfilDetalle
 * @package App\Models
 * @version November 2, 2020, 11:14 pm UTC
 *
 * @property \App\Models\SklPerfil $per
 * @property \App\Models\SklSkill $skl
 * @property \App\Models\SklNivel $nvl
 * @property integer $per_id
 * @property integer $skl_id
 * @property integer $nvl_id
 * @property string $psk_comentario
 */
class PerfilDetalle extends Model
{
    use SoftDeletes;

    public $table = 'skl_perfil_detalle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'pde_id';

    public $fillable = [
        'per_id',
        'skl_id',
        'nvl_id',
        'psk_comentario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pde_id' => 'integer',
        'per_id' => 'integer',
        'skl_id' => 'integer',
        'nvl_id' => 'integer',
        'psk_comentario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'per_id' => 'required|integer',
        'skl_id' => 'required|integer',
        'nvl_id' => 'required|integer',
        'psk_comentario' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function per()
    {
        return $this->belongsTo(\App\Models\SklPerfil::class, 'per_id');
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
