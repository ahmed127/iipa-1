<?php

namespace App\Repositories\AdminPanel;

use App\Models\Volunteer;
use App\Repositories\BaseRepository;

/**
 * Class VolunteerRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:05 pm UTC
*/

class VolunteerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'volunteer_type_id',
        'full_name',
        'id_no',
        'email',
        'country_code',
        'phone',
        'attachment_cv'
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
        return Volunteer::class;
    }
}
