<?php

namespace App\Repositories;

use App\Models\Classroom;
use App\Repositories\BaseRepository;

/**
 * Class ClassroomRepository
 * @package App\Repositories
 * @version June 19, 2020, 10:28 am UTC
*/

class ClassroomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
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
        return Classroom::class;
    }
}
