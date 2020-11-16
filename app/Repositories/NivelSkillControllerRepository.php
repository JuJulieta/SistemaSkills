<?php

namespace App\Repositories;

use App\Models\NivelSkillController;
use App\Repositories\BaseRepository;

/**
 * Class NivelSkillControllerRepository
 * @package App\Repositories
 * @version September 16, 2020, 6:07 pm UTC
*/

class NivelSkillControllerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return NivelSkillController::class;
    }
}
