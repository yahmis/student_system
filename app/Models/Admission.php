<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admission
 * @package App\Models
 * @version June 19, 2020, 10:59 am UTC
 *
 * @property string $roll_no
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $mother_name
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $current_adress
 * @property string $nationality
 * @property string $passport
 * @property boolean $status
 * @property string $dateregistered
 * @property integer $user_id
 * @property integer $class_id
 * @property string $image
 */
class Admission extends Model
{
    use SoftDeletes;

    public $table = 'admissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_adress',
        'nationality',
        'passport',
        'status',
        'dateregistered',
        'user_id',
        'class_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'roll_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'mother_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'current_adress' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'dateregistered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roll_no' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'father_name' => 'required',
        'mother_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'dob' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'current_adress' => 'required',
        'nationality' => 'required',
        'passport' => 'required',
        'status' => 'required',
        'dateregistered' => 'required',
        'user_id' => 'required',
        'class_id' => 'required'
    ];

    
}
