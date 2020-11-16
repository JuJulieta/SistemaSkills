<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 * @package App\Models
 * @version August 26, 2020, 6:15 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $sklSubCategoria
 * @property string $cat_nombre
 * @property string $cat_descripcion
 */
class Categoria extends Model
{
    use SoftDeletes;

    public $table = 'skl_categoria';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'cat_id';

    public $fillable = [
        'cat_nombre',
        'cat_descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cat_id' => 'integer',
        'cat_nombre' => 'string',
        'cat_descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cat_nombre' => 'required|string|max:300|unique:skl_categoria',
        'cat_descripcion' => 'nullable|string',
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
        'cat_nombre' => 'required|string|max:300',
        'cat_descripcion' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklSubCategoria()
    {
        return $this->hasMany(\App\Models\SklSubCategorium::class, 'cat_id');
    }
}
