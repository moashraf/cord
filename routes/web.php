<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return redirect('/ar');
    });

 
   
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

 Route::group([ 'prefix' => 'en'], function ()
{
 	   // App::setLocale('en');

Route::get('/', 'HomeController@index');
Route::get('/Doctors/{id}', 'HomeController@Doctors');
Route::get('/Departments/{id}', 'ProductController@show');
Route::get('/singel_cat/{id}', 'HomeController@singel_cat');
Route::get('/singel_post/{slg}/{id}', 'HomeController@singel_news'); 
Route::get('/all_news/{slg}/{id}', 'HomeController@all_news');
Route::get('/all_services/{slg}/{id}', 'HomeController@all_services');
Route::get('/all_Projects/{slg}/{id}', 'HomeController@all_Projects');
Route::get('/image', 'HomeController@image');
Route::get('/video', 'HomeController@video');
Route::post('/orders', 'HomeController@orders')->name('orders');
Route::get('/About', 'HomeController@About');
Route::get('/Contact', 'HomeController@Contact');
Route::get('/all_projects/{id}', 'HomeController@all_projects');
Route::get('/singe_projects/{id}', 'HomeController@singe_projects');
	});


	//////////////////////////////////////////////// //////////////////////////////////////

	 Route::group([ 'prefix' => 'ar'], function ()
{
	
	  // App::setLocale('ar');
 
Route::get('/', 'HomeController@index');
Route::get('/Doctors/{id}', 'HomeController@Doctors');
Route::get('/Departments/{id}', 'ProductController@show');
Route::get('/singel_cat/{id}', 'HomeController@singel_cat');
Route::get('/singel_post/{slg}/{id}', 'HomeController@singel_news'); 
Route::get('/all_news/{slg}/{id}', 'HomeController@all_news');
Route::get('/all_services/{slg}/{id}', 'HomeController@all_services');
Route::get('/all_Projects/{slg}/{id}', 'HomeController@all_Projects');
Route::get('/image', 'HomeController@image');
Route::get('/video', 'HomeController@video');
Route::post('/orders', 'HomeController@orders')->name('orders');
Route::get('/About', 'HomeController@About');
Route::get('/Contact', 'HomeController@Contact');
Route::get('/all_projects/{id}', 'HomeController@all_projects');
Route::get('/singe_projects/{id}', 'HomeController@singe_projects');

 	});
	
	
 /////////////////////////////////////////////////////////////////////////////////////////////////

Auth::routes();
 
/////////////////////////////////////////////////////////////////////////////////////////////////

/*
|--------------------------------------------------------------------------
|                   admin              admin 
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function ()
{

Route::get('ajax_del_products/{id}/{Product_id}', 'ProductsController@ajax_del_products');
Route::get('ajax_del_news_photo/{id}/{news_id}', 'NEWSController@ajax_del_news_photo');
Route::get('ajax_del_services_photo/{id}/{services_id}', 'servicesController@ajax_del_services_photo');
Route::resource('/', 'NEWSController');
Route::resource('services', 'servicesController');
Route::resource('categoriesServices', 'categories_servicesController');
Route::resource('products', 'ProductsController');
Route::resource('categoriesProducts', 'Categories_ProductsController');
Route::resource('siteStings', 'siteStingsController');
Route::resource('sliders', 'sliderController');
Route::resource('types', 'typesController');
Route::resource('nEWS', 'NEWSController');
Route::resource('categoriesNews', 'categories_newsController');
Route::resource('clients', 'clientsController');
Route::resource('orders', 'orderController');
Route::resource('projects', 'projectsController');
Route::resource('projectsCats', 'projects_catController');
Route::resource('requests', 'requestController');
Route::resource('videos', 'videoController');
Route::resource('images', 'imageController');
Route::resource('openinghours', 'openinghoursController');
});

/////////////////////////////////////////////////////////////////////////////////////////////////







