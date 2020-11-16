<?php

namespace App\Repositories;

use App\Models\Nivel;
use App\Repositories\BaseRepository;

/**
 * Class NivelRepository
 * @package App\Repositories
 * @version November 3, 2020, 2:36 pm UTC
*/

class NivelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nvl_nombre',
        'nvl_descripcion',
        'nvl_valor'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Nivel::class;
    }
}
