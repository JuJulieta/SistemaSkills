<?php

namespace App\Repositories;

use App\Models\SubCategoria;
use App\Repositories\BaseRepository;

/**
 * Class SubCategoriaRepository
 * @package App\Repositories
 * @version August 26, 2020, 6:15 pm UTC
*/

class SubCategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'scat_nombre',
        'scat_descripcion',
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
        return SubCategoria::class;
    }
}
