<?php

namespace App\Repositories;

use App\Models\SkillsConsultores;
use App\Repositories\BaseRepository;

/**
 * Class SkillsConsultoresRepository
 * @package App\Repositories
 * @version August 28, 2020, 2:42 pm UTC
*/

class SkillsConsultoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'con_id',
        'skl_id',
        'nvl_id',
        'csk_comentario'
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

    public function queryFiltro($search = [], $skip = null, $limit = null)
    {
        $query = $this->model->newQuery();

        $query->join("skl_skill", "skl_consultor_skill.skl_id", "=","skl_skill.skl_id");
        $query->join("skl_consultor", "skl_consultor.con_id", "=","skl_consultor_skill.con_id");
        $query->join("skl_nivel", "skl_nivel.nvl_id", "=","skl_consultor_skill.nvl_id");

        if (count($search)) {
            foreach($search as $key => $value) {
                $query->whereIn($key, $value, "and");
            }
        }

        if (!is_null($skip)) {
            $query->skip($skip);
        }

        if (!is_null($limit)) {
            $query->limit($limit);
        }
        //echo "Query <br />";
        //echo $query->toSql();

        return $query;
    }

    public function buscar($search)
    {
        $query = $this->queryFiltro($search, null, null);

        return $query->get(['skl_consultor_skill.con_id', 'skl_consultor.con_nombres', "skl_consultor.con_apellidos" , 'skl_consultor_skill.skl_id','skl_consultor_skill.nvl_id', 'skl_skill.skl_nombre', 'skl_nivel.nvl_nombre']);
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return SkillsConsultores::class;
    }
}
