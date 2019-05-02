<?php

namespace App\Models;
use App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NEWS
 * @package App\Models
 * @version August 16, 2018, 2:22 pm UTC
 *
 * @property string title
 * @property string body
 * @property string single_photo
 * @property string slug
 */
class NEWS extends Model
{
    use SoftDeletes;

    public $table = 'n_e_w_s';
    	    protected $connection = 'mysql';


    protected $dates = ['deleted_at'];

 public $fillable = [
        'single_photo',
        'cat_id',
        'tag_id',
        'icon',
     ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_by' => 'integer',
        'last_updated_by' => 'integer',
         'single_photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
	       'single_photo' => 'mimes:jpeg,jpg,png,gif',

  //  'single_photo' => 'required',
 //   'cat_id' => 'required',
    //'tag_id' => 'required',
  //  'icon' => 'required',
        // 'status' => 'required'
    ];

	

	   public function get_NEWS_path()
{
	
	$locale = App::getLocale();
   $NEWS = NEWS::with('get_NEWS_description')->where('id', $this->id)->get();
  
 //dd( $NEWS[0]->get_NEWS_description[0]->slug );
        return \URL::to($locale.'/singel_post/').'/' .$NEWS[0]->get_NEWS_description[0]->slug.'/'.$this->id ;

		}
		
		
		
		
		public function get_cat() {
        return $this->belongsTo('App\Models\categories_news', 'cat_id', 'id');
    }

   
	
	
		
		  public function get_NEWS_description()
{
	
	$dates = 'ar';
  

if (App::isLocale('ar')) {
   $dates = 'ar';
}else{
	
	 $dates = 'en';
	
}

        return $this->hasMany("App\Models\News_$dates", 'id_new');

		}
		
		  public function get_News_Photos()
    {
        return $this->hasMany('App\Models\news_photo', 'news_id');

    }
		
		
		
		
		
    
}
