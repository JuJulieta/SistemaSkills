<?php

namespace App\Repositories;

use App\Models\Perfil;
use App\Repositories\BaseRepository;

/**
 * Class PerfilRepository
 * @package App\Repositories
 * @version November 3, 2020, 4:31 pm UTC
*/

class PerfilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'per_nombre',
        'per_descripcion',
        'car_id',
        'lsv_id',
        'nvl_id'
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
        return Perfil::class;
    }
}
