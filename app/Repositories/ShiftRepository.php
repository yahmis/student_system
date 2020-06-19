<?php

namespace App\Repositories;

use App\Models\Shift;
use App\Repositories\BaseRepository;

/**
 * Class ShiftRepository
 * @package App\Repositories
 * @version June 19, 2020, 10:46 am UTC
*/

class ShiftRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shift'
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
        return Shift::class;
    }
}
