<?php

namespace App\Repositories\AdminPanel;

use App\Models\EventAttendee;
use App\Repositories\BaseRepository;

/**
 * Class EventAttendeeRepository
 * @package App\Repositories\AdminPanel
 * @version December 20, 2022, 1:39 pm UTC
*/

class EventAttendeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'event_id',
        'user_id'
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
        return EventAttendee::class;
    }
}
