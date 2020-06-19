<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Level
 * @package App\Models
 * @version June 19, 2020, 10:44 am UTC
 *
 * @property string $level
 * @property integer $course_id
 * @property string $level_description
 */
class Level extends Model
{
    use SoftDeletes;

    public $table = 'levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'level',
        'course_id',
        'level_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'level_id' => 'integer',
        'level' => 'string',
        'course_id' => 'integer',
        'level_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'level' => 'required',
        'course_id' => 'required',
        'level_description' => 'required'
    ];

    
}
