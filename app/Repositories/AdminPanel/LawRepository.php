<?php

namespace App\Repositories\AdminPanel;

use App\Models\Law;
use App\Repositories\BaseRepository;

/**
 * Class LawRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:29 pm UTC
*/

class LawRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'attachment_pdf'
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
        return Law::class;
    }
}
