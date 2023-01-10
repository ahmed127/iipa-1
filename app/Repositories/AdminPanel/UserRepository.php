<?php

namespace App\Repositories\AdminPanel;

use App\Models\User;
use App\Repositories\BaseRepository;

/**
 * Class CountryRepository
 * @package App\Repositories\AdminPanel
 * @version May 25, 2022, 1:14 pm UTC
 */

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name', 'phone', 'email'
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
        return User::class;
    }
}
