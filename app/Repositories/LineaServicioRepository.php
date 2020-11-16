<?php

namespace App\Repositories;

use App\Models\LineaServicio;
use App\Repositories\BaseRepository;

/**
 * Class LineaServicioRepository
 * @package App\Repositories
 * @version November 3, 2020, 3:55 pm UTC
*/

class LineaServicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lsv_nombre'
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
        return LineaServicio::class;
    }
}
