<?php

namespace App\Repositories;

use App\Models\Categoria;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaRepository
 * @package App\Repositories
 * @version August 26, 2020, 6:15 pm UTC
*/

class CategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cat_id',
        'cat_nombre',
        'cat_descripcion'
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
        return Categoria::class;
    }


    public function queryFiltro($search = [], $skip = null, $limit = null)
    {
        $query = $this->model->newQuery();

        $query->join("skl_sub_categoria", "skl_sub_categoria.cat_id", "=","skl_categoria.cat_id");

        if (count($search)) {
            foreach($search as $key => $value) {
                $query->where($key, $value,"and");
            }
        }
        if (!is_null($skip)) {
            $query->skip($skip);
        }
        if (!is_null($limit)) {
            $query->limit($limit);
        }
        return $query;
    }

    public function buscar($search)
    {
        $query = $this->queryFiltro($search, null, null);

        return $query->get(['skl_sub_categoria.scat_id', 'skl_sub_categoria.scat_nombre','skl_sub_categoria.cat_id']);
    }

}
