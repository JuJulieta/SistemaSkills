<?php

namespace App\Repositories;

use App\Models\Consultor;
use App\Repositories\BaseRepository;

/**
 * Class ConsultorRepository
 * @package App\Repositories
 * @version November 3, 2020, 2:27 pm UTC
*/

class ConsultorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'con_nombres',
        'con_apellidos',
        'con_comentarios',
        'email',
        'lsv_id',
        'nvl_id',
        'car_id'
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
        return Consultor::class;
    }
}
