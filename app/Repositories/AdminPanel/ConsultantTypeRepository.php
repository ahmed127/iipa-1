<?php

namespace App\Repositories\AdminPanel;

use App\Models\ConsultantType;
use App\Repositories\BaseRepository;

/**
 * Class ConsultantTypeRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:18 pm UTC
*/

class ConsultantTypeRepository extends BaseRepository
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
        return ConsultantType::class;
    }
}
