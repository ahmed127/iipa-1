<?php

namespace App\Repositories\AdminPanel;

use App\Models\CooperativeTraining;
use App\Repositories\BaseRepository;

/**
 * Class CooperativeTrainingRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:12 pm UTC
*/

class CooperativeTrainingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'entity_name',
        'country_code',
        'phone',
        'email',
        'attachment_letter',
        'status',
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
        return CooperativeTraining::class;
    }
}
