<?php

namespace App\Repositories\AdminPanel;

use App\Models\IndividualTraining;
use App\Repositories\BaseRepository;

/**
 * Class IndividualTrainingRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:15 pm UTC
*/

class IndividualTrainingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'country_code',
        'phone',
        'email',
        'attachment_letter'
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
        return IndividualTraining::class;
    }
}
