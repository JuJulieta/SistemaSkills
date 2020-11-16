<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Perfil
 * @package App\Models
 * @version November 3, 2020, 4:31 pm UTC
 *
 * @property \App\Models\SklCargo $car
 * @property \App\Models\SklLineaServicio $lsv
 * @property \App\Models\SklNivel $nvl
 * @property \Illuminate\Database\Eloquent\Collection $sklPerfilDetalles
 * @property string $per_nombre
 * @property string $per_descripcion
 * @property integer $car_id
 * @property integer $lsv_id
 * @property integer $nvl_id
 */
class Perfil extends Model
{
    use SoftDeletes;

    public $table = 'skl_perfil';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'per_id';

    public $fillable = [
        'per_nombre',
        'per_descripcion',
        'car_id',
        'lsv_id',
        'nvl_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'per_id' => 'integer',
        'per_nombre' => 'string',
        'per_descripcion' => 'string',
        'car_id' => 'integer',
        'lsv_id' => 'integer',
        'nvl_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'per_nombre' => 'required|string|max:300',
        'per_descripcion' => 'nullable|string',
        'car_id' => 'required|integer',
        'lsv_id' => 'required|integer',
        'nvl_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function car()
    {
        return $this->belongsTo(\App\Models\SklCargo::class, 'car_id');
    }

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklPerfilDetalles()
    {
        return $this->hasMany(\App\Models\SklPerfilDetalle::class, 'per_id');
    }
}
