<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class services_photo extends Model
{
    use SoftDeletes;

    public $table = 'services_photo';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'services_id',
        'single_photo_gallery',
        '	',
       ];

    

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
'single_photo_gallery' => 'required|mimes:jpeg,jpg,png,gif'
    ];

    
}
