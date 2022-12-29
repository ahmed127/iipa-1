<?php

namespace App\Repositories\AdminPanel;

use App\Models\Outreach;
use App\Repositories\BaseRepository;

/**
 * Class OutreachRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:31 pm UTC
*/

class OutreachRepository extends BaseRepository
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
        return Outreach::class;
    }
}
