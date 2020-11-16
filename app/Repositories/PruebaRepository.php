<?php

namespace App\Repositories;

use App\Models\Prueba;
use App\Repositories\BaseRepository;

/**
 * Class PruebaRepository
 * @package App\Repositories
 * @version August 26, 2020, 8:38 pm UTC
*/

class PruebaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'cat_id'
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
        return Prueba::class;
    }
}
