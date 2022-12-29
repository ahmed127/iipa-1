<?php

namespace App\Repositories\AdminPanel;

use App\Models\Initiative;
use App\Repositories\BaseRepository;

/**
 * Class InitiativeRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:28 pm UTC
*/

class InitiativeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return Initiative::class;
    }
}
