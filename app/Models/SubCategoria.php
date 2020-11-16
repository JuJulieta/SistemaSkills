<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubCategoria
 * @package App\Models
 * @version August 26, 2020, 6:15 pm UTC
 *
 * @property \App\Models\SklCategorium $cat
 * @property \Illuminate\Database\Eloquent\Collection $sklSkills
 * @property string $scat_nombre
 * @property string $scat_descripcion
 * @property integer $cat_id
 */
class SubCategoria extends Model
{
    use SoftDeletes;

    public $table = 'skl_sub_categoria';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'scat_id';

    public $fillable = [
        'scat_nombre',
        'scat_descripcion',
        'cat_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'scat_id' => 'integer',
        'scat_nombre' => 'string',
        'scat_descripcion' => 'string',
        'cat_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'scat_nombre' => 'required|string|max:300|unique:skl_sub_categoria',
        'scat_descripcion' => 'nullable|string',
        'cat_id' => 'required|integer|min:1',
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
        'scat_nombre' => 'required|string|max:300',
        'scat_descripcion' => 'nullable|string',
        'cat_id' => 'required|integer|min:1',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cat()
    {
        return $this->belongsTo(\App\Models\SklCategorium::class, 'cat_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function sklSkills()
    {
        return $this->hasMany(\App\Models\SklSkill::class, 'scat_id');
    }
    public function messages()
    {
        return[
            'scat_nombre.unique'   => 'El :attribute se encuentra registrado.',
            'cat_id.required'   => 'La Categoría es obligatoria.',
        ];
    }

    public function attributes()
    {
        return[
            'scat_nombre'=> 'nombre de la SubCategoría',
        ];
    }
}
