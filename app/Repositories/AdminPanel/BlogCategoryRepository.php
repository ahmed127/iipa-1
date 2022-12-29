<?php

namespace App\Repositories\AdminPanel;

use App\Models\BlogCategory;
use App\Repositories\BaseRepository;

/**
 * Class BlogCategoryRepository
 * @package App\Repositories\AdminPanel
 * @version December 21, 2022, 2:14 pm UTC
*/

class BlogCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'photo'
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
        return BlogCategory::class;
    }
}
