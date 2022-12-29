<?php

namespace App\Repositories\AdminPanel;

use App\Models\Director;
use App\Repositories\BaseRepository;

/**
 * Class DirectorRepository
 * @package App\Repositories\AdminPanel
 * @version December 19, 2022, 4:27 pm UTC
*/

class DirectorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'photo',
        'name',
        'country_code',
        'job_title'
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
        return Director::class;
    }
}
