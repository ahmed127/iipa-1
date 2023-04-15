<?php

namespace App\Repositories\AdminPanel;

use App\Models\Recruitment;
use App\Repositories\BaseRepository;

/**
 * Class RecruitmentRepository
 * @package App\Repositories\AdminPanel
 * @version January 4, 2023, 9:51 am UTC
*/

class RecruitmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'email',
        'country_code',
        'phone',
        'status',
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
        return Recruitment::class;
    }
}
