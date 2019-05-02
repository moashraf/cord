<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class openinghours
 * @package App\Models
 * @version October 16, 2018, 1:14 pm UTC
 *
 * @property string day
 * @property string time
 * @property string Note
 */
class openinghours extends Model
{
    use SoftDeletes;

    public $table = 'openinghours';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'day',
        'time',
        'Note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'day' => 'string',
        'time' => 'string',
        'Note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'day' => 'required',
        'Note' => 'required',
        'time' => 'required'
    ];

    
}
