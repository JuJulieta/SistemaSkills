<?php

namespace App\Repositories;

use App\Models\CursoConsultor;
use App\Repositories\BaseRepository;

/**
 * Class CursoConsultorRepository
 * @package App\Repositories
 * @version November 3, 2020, 4:34 pm UTC
*/

class CursoConsultorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cur_id',
        'con_id'
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
        return CursoConsultor::class;
    }
}
