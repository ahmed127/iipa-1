<?php

namespace App\Repositories\AdminPanel;

use App\Models\Company;
use App\Repositories\BaseRepository;

/**
 * Class CompanyRepository
 * @package App\Repositories\AdminPanel
 * @version January 3, 2023, 2:57 pm UTC
*/

class CompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'website',
        'location',
        'type'
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
        return Company::class;
    }
}
