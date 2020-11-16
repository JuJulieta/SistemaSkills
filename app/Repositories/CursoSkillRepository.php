<?php

namespace App\Repositories;

use App\Models\CursoSkill;
use App\Repositories\BaseRepository;

/**
 * Class CursoSkillRepository
 * @package App\Repositories
 * @version November 3, 2020, 4:36 pm UTC
*/

class CursoSkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cur_id',
        'skl_id',
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
        return CursoSkill::class;
    }
}
