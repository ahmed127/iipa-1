<?php

namespace App\Repositories\AdminPanel;

use App\Models\Regulation;
use App\Repositories\BaseRepository;

/**
 * Class RegulationRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:33 pm UTC
*/

class RegulationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'brief',
        'description',
        'photo',
        'attachment_pdf',
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
        return Regulation::class;
    }
}
