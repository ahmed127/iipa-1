<?php

namespace App\Repositories\AdminPanel;

use App\Models\Consulting;
use App\Repositories\BaseRepository;

/**
 * Class ConsultingRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:27 pm UTC
*/

class ConsultingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_confirmation',
        'country_code',
        'phone',
        'country_id',
        'job_id',
        'consultant_type_id',
        'type',
        'date_of_birth',
        'fav_lang',
        'description',
        'attachment_letter',
        'gender',
        'nationality'
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
        return Consulting::class;
    }
}
