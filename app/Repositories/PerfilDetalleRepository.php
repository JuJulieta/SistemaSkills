<?php

namespace App\Repositories;

use App\Models\PerfilDetalle;
use App\Repositories\BaseRepository;

/**
 * Class PerfilDetalleRepository
 * @package App\Repositories
 * @version November 2, 2020, 11:14 pm UTC
*/

class PerfilDetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'per_id',
        'skl_id',
        'nvl_id',
        'psk_comentario'
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
        return PerfilDetalle::class;
    }
}
