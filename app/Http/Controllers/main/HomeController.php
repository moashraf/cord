<?php

namespace App\Http\Controllers;

 use App\Models\NEWS;
 use App\Models\slider;
 use App\Models\order;
 use App\Models\services;
 use App\Models\categories_news;
 
use Illuminate\Http\Request;

class HomeController extends Controller
{

	
	
	
		 public function index ()
    {    
		  $locale =\Request::segment(1) ;
			App()->setLocale( $locale);
		 
		 
  $slider  = slider::limit(5)->latest()->with('get_slider_description')->get();
  $NEWS  = NEWS::limit(3)->latest()->with('get_NEWS_description')->where('cat_id','=','2')->get();
  $services  =  NEWS::limit(4)->latest()->with('get_NEWS_description')->where('cat_id','=','1')->get();
  $Portfolio  = NEWS::limit(4)->latest()->with('get_NEWS_description')->where('cat_id','=','3')->get();
 // $slider = slider::latest()->with('get_slider_description')->get();
  // $projects = projects::with('get_projects_description')->where('project_cat_id','=','1')->orWhere('project_cat_id','=','2')->limit(4)->get();
    
  		 return view('main.index',
            [
  				// 'slider' => $slider ,  
				// 'projects' => $projects ,
 				 'slider' => $slider ,
 				 'NEWS' => $NEWS ,
 				 'Portfolio' => $Portfolio ,
 				 'services' => $services ,
            ]);
    }
	
	
	
	
		/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/



  public function singel_cat($id)
    {
      $Categories_Products = Categories_Products::where('id' ,'=', $id)->get();
	  if(  !$Categories_Products->isEmpty()   ){  

  $Products = Products::where('cat_id','=',$Categories_Products[0]['id'])->paginate(20);
        return view('main.all_property', 
            [
             'Categories_Products' => $Categories_Products, 
               'Products' => $Products, 
             ]);
  // dd(    $Categories_Products[0]['id']); 
   
   }else{
	   
	   
	    return redirect('/');
 
   }
	 
     
    }

	

	
	 
	
	
    public function done()
    {
     
       return view('main.thankspage');
    }


	
	
	public function orders_get()
    {
                return view('main.orders');

    }
	
	
	
	public function orders( request $request)
    {
		
		
		
       $to = "ashraf@corddigital.com";
        $subject = " mar-decor ";
        $neme = $_POST['title'];
        $phone = $_POST['phone'];
        $body = $_POST['body'];
        $email = $_POST['email'];
         $message="<html><head>
<title>  mar-decor    </title>
        </head>
		<body><table>
        <tr><th>Firstname</th><th>phone</th><th>email</th> <th>body</th> </tr>
        <tr> <td>$neme  </td><td>$phone  </td><td>$email  </td> <td>$body  </td>   </tr>
        </table></body></html>  ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@mar-decor.com>' . "\r\n";

           if(isset($_POST['phone'])){
        if(mail($to,$subject,$message,$headers)){
           header("Location: https://mar-decor.com/oiuh98");
        }else{  echo "Mail Not Sent"; } } 
		
		
		
        $input = $request->all();

        $order = order::create($input);

 	    return redirect('/');

       // return redirect(route('done'));
    }
	
	
    public function  form(Request $request) 
    {

        $to = "mohamed.be4em@gmail.com  , a.badr.be4em@gmail.com";
        $subject = "بامبو نيو هاوس        ";
        $neme = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['mail'];
         $message="<html><head><title> بامبو نيو هاوس         </title>
        </head><body><table>
        <tr><th>Firstname</th><th>phone</th><th>email</th></tr>
        <tr> <td>$neme  </td><td>$phone  </td><td>$email  </td> </tr>
        </table></body></html> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@scpc-eg.com>' . "\r\n";

           if(isset($_POST['phone'])){
        if(mail($to,$subject,$message,$headers)){
           header("Location: http://scpc-eg.com/");
        }else{  echo "Mail Not Sent"; } }  
        


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
	
	
	
	
	 public function video()
    {
		
    $video = video::limit(50)->get();

 		 return view('main.video',
            [
                 'video' => $video 
            ]);
    }
	
	
	
	 public function image()
    {
  $image = image::limit(50)->get();

 		 return view('main.image',
            [
                 'image' => $image 
            ]);
    }
	
	  
	  
	
	
	
	   public function all_news($slg,$id)
    {
		
 
		  
			$locale =\Request::segment(1) ;
			App()->setLocale( $locale);
			 $NEWS = NEWS::latest()->with('get_NEWS_description')->where('cat_id',$id)->get();
			$categories_news = categories_news::where('id',$id)->get();	

 
		   return view('main.all_news',
            [
 				                  'categories_news' => $categories_news ,
 				                  'NEWS' => $NEWS ,
 
				 ]);
			 
    }
	
	
	
	   public function singel_news($slg,$id)
    {
		
 //dd($id);
 
   $locale =\Request::segment(1) ;
			App()->setLocale( $locale);
			
   //$NEWS  = NEWS::latest()->with('get_NEWS_description')->where('cat_id','=','1')->get();
   $NEWS = NEWS::with('get_NEWS_description')->with('get_News_Photos')  ->where('id', $id)->get();
  
// dd( $NEWS[0]->get_NEWS_description[0]->slug );
                if (!is_null($NEWS)) {
                 		 return view('main.singel_news',
                        [ 
						
						
 						'NEWS' => $NEWS,
 						
						
						]);
                } else {
                   // return redirect('/');

                }
		  }
	
	
	   public function Doctors($id)
    {
   $Products = Products::latest()->get();
		  $types = types::latest()->get();
		  $openinghours = openinghours::latest()->get();
  $types_id = types::where('id', $id)->first();
  
  
  
                if (!is_null($types_id)) {
                 		 return view('main.singel_property',
                        [
						
				
				'openinghours' => $openinghours ,  
				 'types_id' => $types_id ,  
				 'types' => $types ,  
				 'Products' => $Products ,
                         ]);
                } else {
                   // return redirect('/');

                }
		  }
	
	
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	 public function About()
    {
		
		
 
						  
						  
	   $locale =\Request::segment(1) ;
		  App()->setLocale( $locale);
		  
 		  
		   return view('main.about_us' );
 
     }
	
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
	 public function Contact()
    {
 
 
    $locale =\Request::segment(1) ;
		  App()->setLocale( $locale);
		  
		   return view('main.Contact');
				 
				 
 				 
				 
 
    }
	
	
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
	  public function all_projects($slg,$id)
    {

	         $locale =\Request::segment(1) ;
			App()->setLocale( $locale);
			 $NEWS = NEWS::latest()->with('get_NEWS_description')->where('cat_id',$id)->get();
			$categories_news = categories_news::where('id',$id)->get();	

			return view('main.all_projects',
            [
                  'categories_news' => $categories_news ,
                  'NEWS' => $NEWS 
            ]);
    }
	
	
	
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
		public function singe_projects($id)
    {
		
		 $locale =\Request::segment(1) ;
			App()->setLocale( $locale);
			 	$singl_projects = projects::with('get_projects_description')->where('id','=',$id)->get();


						  return view('main.singel_projects',
            [
                 'singl_projects' => $singl_projects, 
            ]);
    }
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	   public function all_services($slg,$id)
    {
		
 
		

			$locale =\Request::segment(1) ;
			App()->setLocale( $locale);
			 $NEWS = NEWS::latest()->with('get_NEWS_description')->where('cat_id',$id)->get();
			$categories_news = categories_news::where('id',$id)->get();	

 
  
		   return view('main.all_services',
            [
 			  'categories_news' => $categories_news ,  
 			  'NEWS' => $NEWS ,  
			  ]);
			 
    }
	
 
	
	  public function singel_services($slg,$id)
    {
		
 //dd($id);
 
   $locale =\Request::segment(1) ;
			App()->setLocale( $locale);
			
      $services_singl = services::with('get_services_description')->with('get_services_Photos')  ->where('id', $id)->get();
  
// dd( $NEWS[0]->get_NEWS_description[0]->slug );
                if (!is_null($services_singl)) {
                 		 return view('main.singel_services',
                        [ 
						
						
 						'services_singl' => $services_singl,
 						
						
						]);
                } else {
                   // return redirect('/');

                }
		  }
		  
		  
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		
		
 
}
