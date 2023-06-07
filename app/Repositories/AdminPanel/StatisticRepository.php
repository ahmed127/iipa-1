<?php

namespace App\Repositories\AdminPanel;

use App\Models\Statistic;
use App\Repositories\BaseRepository;

/**
 * Class StatisticRepository
 * @package App\Repositories\AdminPanel
 * @version May 25, 2022, 1:14 pm UTC
 */

class StatisticRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
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
        return Statistic::class;
    }
}
