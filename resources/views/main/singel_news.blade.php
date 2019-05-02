@extends('main.master')
@section('content') 


@foreach(  $NEWS  as  $NEWS_val)

	@foreach(  $NEWS_val->get_NEWS_description  as  $NEWS_val_dec)
								
								
		<title> {{  $NEWS_val_dec->title}}  |    {!! site_settings('Web_site_name')  !!}  </title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content="{{  $NEWS_val_dec->meta_description}} "/>
 <meta name="Keywords" content=" {{  $NEWS_val_dec->meta_description}} "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {{  $NEWS_val_dec->seo_title}}  " />
<meta property="og:description" content="{{  $NEWS_val_dec->meta_description}} " />
<meta property="og:url" content="{!! $NEWS_val->get_NEWS_path()  !!}" />
<meta property="og:site_name" content="Mar Decor" />
<meta property="article:tag" content=" {{  $NEWS_val_dec->seo_title}} " />
<meta property="article:section" content="" />
<meta property="article:published_time" content="{{  $NEWS_val_dec->created_at}} " />
<meta property="article:modified_time" content="{{  $NEWS_val_dec->updated_at}} " />
<meta property="og:updated_time" content="{{  $NEWS_val_dec->updated_at}} " />
<meta property="og:image" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta property="og:image:secure_url" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="  {{  $NEWS_val_dec->seo_title}}" />
<meta name="twitter:title" content="  {{  $NEWS_val_dec->meta_description}} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta name="twitter:site" content="@mar-decor" />
 
				<section>
					<div class="sub-header sub-header-1 sub-header-blog-grid fake-position">
						<div class="sub-header-content">
							<h5 class="text-cap white-text"> {{  $NEWS_val_dec->title}}   </h5>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a   title="{{ trans('langsite.Home')}}" href="{{ URL::to('/')  }}">{{ trans('langsite.Home')}}</a>
								</li>
								 
								<li class="active"> {{  $NEWS_val_dec->title}}     </li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->

				<section id="content" class="padding news-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							 		 
									 
			<main id="main" class="site-main" >
				<div class="blog-detail">
						
						<div class="lastest-news-detail">
							<img  src="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}"
							class="img-responsive" alt="{{  $NEWS_val_dec->main_img_alt}} ">
							
							<h2>  {{  $NEWS_val_dec->title}}    </h2>
							<h1 style="    display: none;">  {{  $NEWS_val_dec->seo_title}}    </h1>

						<div class="latest-blog-post-date-2  text-cap">
							<span class="month">{{  $NEWS_val_dec->created_at}}   </span>
						 
						</div>
						<br>
						
 							<p>  {!!   $NEWS_val_dec->description  !!}  </p> 
<br>
<br>
<br>
						</div>

				</div>
		  </main>
		  
							  	 @endforeach
									 	 @endforeach
									 

							</div> <!-- End Col -->

						</div>
					</div>
				</section>
				
					<section class="news-gallery1">
					<div class="container">
						<div class="row">
 							 
							<!-- End Title -->
							<div class="ourteam-warp ourteam-3-col">
					              <div class="customNavigation">
					                <a  title="{{ trans('langsite.Home')}}" class="btn prev-team"><i class="fa fa-angle-left"></i></a>
					                <a   title="{{ trans('langsite.Home')}}" class="btn next-team"><i class="fa fa-angle-right"></i></a>
					              </div>
			              		  <div id="owl-team-3-columns" class="owl-carousel owl-theme clearfix">
						            
								@foreach(  $NEWS  as  $NEWS_val)

								@foreach(  $NEWS_val->get_News_Photos  as  $get_News_Photos_dec)

			
				<div class="item-team">
					<div class="portrait-member news-gallery">
						<img src="{{ URL::to('/').'/images/'.$get_News_Photos_dec->single_photo_gallery}}" class="img-responsive myImg"
						alt="<?php   
						 echo str_replace(".jpg"," ","$get_News_Photos_dec->single_photo_gallery");
?>  ">

					</div>
				 </div> 
			 
												     

													 
										 	 @endforeach
											 @endforeach
													 
				          		   </div>
        				    </div>
						</div>
					</div>
				</section>
				<!-- End Content -->
				
				<div class="popup-overlay none">
				    <div class="popup-img">
				        <img class="popupsrc" src=""    alt="{!! site_settings('Web_site_name')  !!}">
				    </div>
				</div>
				
				
 
 
   @endsection