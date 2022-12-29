<?php

namespace App\Repositories\AdminPanel;

use App\Models\VolunteerType;
use App\Repositories\BaseRepository;

/**
 * Class VolunteerTypeRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 12:59 pm UTC
*/

class VolunteerTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return VolunteerType::class;
    }
}
