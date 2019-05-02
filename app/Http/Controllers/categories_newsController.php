<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createcategories_newsRequest;
use App\Http\Requests\Updatecategories_newsRequest;
use App\Repositories\categories_newsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

 use Validator;
 use App\Models\categories_news_en;
 use App\Models\categories_news_ar;
 

class categories_newsController extends AppBaseController
{
    /** @var  categories_newsRepository */
    private $categoriesNewsRepository;

    public function __construct(categories_newsRepository $categoriesNewsRepo)
    {
        $this->categoriesNewsRepository = $categoriesNewsRepo;
    }

    /**
     * Display a listing of the categories_news.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
		 
        $this->categoriesNewsRepository->pushCriteria(new RequestCriteria($request));
        $categoriesNews = $this->categoriesNewsRepository->with('get_all_post_on_cat')->with('get_categories_news_ar_description')->all();

 
        return view('categories_news.index')
            ->with('categoriesNews', $categoriesNews);
    }

    /**
     * Show the form for creating a new categories_news.
     *
     * @return Response
     */
    public function create()
    {
		
         $categories = $this->categoriesNewsRepository->with('get_categories_news_ar_description')->all();
// dd(  $categories->get_categories_news_ar_description);
        return view('categories_news.create')
            ->with('categories', $categories);
 			
     }

    /**
     * Store a newly created categories_news in storage.
     *
     * @param Createcategories_newsRequest $request
     *
     * @return Response
     */
    public function store(Createcategories_newsRequest $request)
    {
		
		
			$validator = Validator::make($request->all(), [
            'meta_description_en' => 'required',
            'main_img_alt_en' => 'required',
            'main_img_alt_ar' => 'required',
            'meta_description_ar' => 'required',
            'title_en' => 'required',
            'slug_en' => 'required',
            'description_en' => 'required',
			  'title_ar' => 'required',
            'slug_ar' => 'required',
            'description_ar' => 'required',
         ]);

        if ($validator->fails()) {
            return redirect('admin/categoriesNews/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		
		
        $input = $request->all();
	 //	dd($input);
		
		  if (!empty($input['single_photo'])) {
            $photoexplode = $request->single_photo->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
       $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
       $input['single_photo']=    $imageNameGallery; 
      
       
       }else{
       $input['single_photo']=    'logo.png'; 
           
       }

        $categoriesNews = $this->categoriesNewsRepository->create($input);
		
				
		$categories_news_en = new categories_news_en;
        $categories_news_en->title = $request->title_en;
        $categories_news_en->status = '1';
        $categories_news_en->id_categories =$categoriesNews->id;
        $categories_news_en->meta_description = $request->meta_description_en;
	    $categories_news_en->seo_title = $request->seo_title_en;
        $categories_news_en->main_img_alt = $request->main_img_alt_en;
        $categories_news_en->description = $request->description_en;
        $categories_news_en->slug = $request->slug_en;
        $categories_news_en->save();
		
		$categories_news_ar = new categories_news_ar;
        $categories_news_ar->title = $request->title_ar;
        $categories_news_ar->status = '1';
        $categories_news_ar->id_categories =$categoriesNews->id;
        $categories_news_ar->meta_description = $request->meta_description_ar;
	    $categories_news_ar->seo_title = $request->seo_title_ar;
        $categories_news_ar->main_img_alt = $request->main_img_alt_ar;
        $categories_news_ar->description = $request->description_ar;
        $categories_news_ar->slug = $request->slug_ar;
        $categories_news_ar->save();
		
		
		
		
        Flash::success('Categories News saved successfully.');

        return redirect(route('categoriesNews.index'));
    }

    /**
     * Display the specified categories_news.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriesNews = $this->categoriesNewsRepository->findWithoutFail($id);




        if (empty($categoriesNews)) {
            Flash::error('Categories News not found');

            return redirect(route('categoriesNews.index'));
        }

        return view('categories_news.show')->with('categoriesNews', $categoriesNews);
    }

    /**
     * Show the form for editing the specified categories_news.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
      


    $categories = $this->categoriesNewsRepository->with('get_categories_news_ar_description')->all();
	$categoriesNews = $this->categoriesNewsRepository->findWithoutFail($id);
	$categories_news_ar=categories_news_ar::where('id_categories', $id)->first();
		$categories_news_en=categories_news_en::where('id_categories', $id)->first();

        if (empty($categoriesNews)) {
            Flash::error('Categories News not found');

            return redirect(route('categoriesNews.index'));
        }

        return view('categories_news.edit')
		->with('categories', $categories)
		->with('categoriesNews', $categoriesNews)
		->with('categories_news_en', $categories_news_en)
		->with('categories_news_ar', $categories_news_ar)
		;
    }

    /**
     * Update the specified categories_news in storage.
     *
     * @param  int              $id
     * @param Updatecategories_newsRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecategories_newsRequest $request)
    {
		
		        $input = $request->all();

        $categoriesNews = $this->categoriesNewsRepository->findWithoutFail($id);



	if (!empty($input['single_photo'])) {
             $photoexplode = $request->single_photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
        $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
        $input['single_photo']=    $imageNameGallery; 
       
        
        } 


 	 	$categories_news_en=categories_news_en::where('id_categories', $id)->first();
        $categories_news_en->title = $request->title_en;
        $categories_news_en->status = '1';
        $categories_news_en->id_categories =$categoriesNews->id;
        $categories_news_en->meta_description = $request->meta_description_en;
	    $categories_news_en->seo_title = $request->seo_title_en;
        $categories_news_en->main_img_alt = $request->main_img_alt_en;
        $categories_news_en->description = $request->description_en;
        $categories_news_en->slug = $request->slug_en;
        $categories_news_en->save();
		
		$categories_news_ar=categories_news_ar::where('id_categories', $id)->first();
         $categories_news_ar->title = $request->title_ar;
        $categories_news_ar->status = '1';
        $categories_news_ar->id_categories =$categoriesNews->id;
        $categories_news_ar->meta_description = $request->meta_description_ar;
	    $categories_news_ar->seo_title = $request->seo_title_ar;
        $categories_news_ar->main_img_alt = $request->main_img_alt_ar;
        $categories_news_ar->description = $request->description_ar;
        $categories_news_ar->slug = $request->slug_ar;
        $categories_news_ar->save();
		
		
		
		
        if (empty($categoriesNews)) {
            Flash::error('Categories News not found');

            return redirect(route('categoriesNews.index'));
        }

        $categoriesNews = $this->categoriesNewsRepository->update(   $input , $id);

        Flash::success('Categories News updated successfully.');

        return redirect(route('categoriesNews.index'));
    }

    /**
     * Remove the specified categories_news from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
		
 				if( $id == "1" || $id == "2" || $id == "3"){dd( " لا يمكن الحذف ") ;}



        $categoriesNews = $this->categoriesNewsRepository->findWithoutFail($id);

        if (empty($categoriesNews)) {
            Flash::error('Categories News not found');

            return redirect(route('categoriesNews.index'));
        }

        $this->categoriesNewsRepository->delete($id);
		
		
			$categories_news_ar=categories_news_ar::where('id_categories','=',$id);
		 $categories_news_ar->delete();
		 
		 $categories_news_en=categories_news_en::where('id_categories','=',$id);
		 $categories_news_en->delete();
		 

        Flash::success('Categories News deleted successfully.');

        return redirect(route('categoriesNews.index'));
    }
}
