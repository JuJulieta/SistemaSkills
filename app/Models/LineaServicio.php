<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LineaServicio
 * @package App\Models
 * @version November 3, 2020, 3:55 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sklConsultors
 * @property \Illuminate\Database\Eloquent\Collection $sklPerfils
 * @property string $lsv_nombre
 */
class LineaServicio extends Model
{
    use SoftDeletes;

    public $table = 'skl_linea_servicio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'lsv_id';

    public $fillable = [
        'lsv_nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lsv_id' => 'integer',
        'lsv_nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lsv_nombre' => 'required|string|max:300',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklConsultors()
    {
        return $this->hasMany(\App\Models\SklConsultor::class, 'lsv_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklPerfils()
    {
        return $this->hasMany(\App\Models\SklPerfil::class, 'lsv_id');
    }
}
