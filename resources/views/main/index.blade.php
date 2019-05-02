@extends('main.master')
@section('content')
<title> {!! site_settings('Web_site_name')  !!}  </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content=" mar-decor  ">
<meta name="description" content=" {!! site_settings('home_seo_description')  !!}  "/>
<meta name="Keywords" content="{!! site_settings('home_seo_description')  !!}  "/>
<meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('home_seo_description')  !!}  " />
<meta property="og:url" content="{{ URL::to('/') }}" />
<meta property="og:site_name" content="Mar Decor" />
<meta property="article:tag" content="  {!! site_settings('Web_site_name')  !!} " />
<meta property="article:section" content="" />
<meta property="article:published_time" content="" />
<meta property="article:modified_time" content="" />
<meta property="og:updated_time" content="" />
<meta property="og:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta property="og:image:secure_url" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content=" {!! site_settings('Web_site_name')  !!}" />
<meta name="twitter:title" content=" {!! site_settings('home_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta name="twitter:site" content="@mar-decor" />

<section>
   <div class="rev_slider_wrapper">
      <!-- START REVOLUTION SLIDER 5.0 auto mode -->
      <div id="slider-h1" class="rev_slider slider-home-1" data-version="5.0">
         <ul>
            @foreach(  $slider as  $NEWs_val)
            <!-- SLIDE  -->
            <li data-transition="parallaxtoright" data-masterspeed="1000" >
               <!-- MAIN IMAGE -->
               <img src="{{ URL::to('/').'/images/'.$NEWs_val->single_photo}}"  
                  alt="{!! site_settings('Web_site_name')  !!}" data-bgposition="center center" 
                  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
               @foreach(  $NEWs_val->get_slider_description  as  $NEWs_val_dec)
               <!-- LAYER NR. 1 -->
               <div style="background:rgba(0,0,0,0.5); padding: 5px 30px; border-radius:3px; font-size:42px;" class="tp-caption heading-2 white-text"
                  data-x="center"
                  data-y="center"  data-voffset="-80"
                  data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;"
                  data-transform_out="y:-80px;opacity:0;s:300;"
                  data-start="1000"
                  >
                  {!!   $NEWs_val_dec->title  !!} 
               </div>
               <!-- LAYER NR. 2 -->
               <div style="background:rgba(0,0,0,0.5); padding: 5px 20px; border-radius:3px; font-size:22px;" class="tp-caption heading-1 white-text text-cap "
                  data-x="center"
                  data-y="center"
                  data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;"
                  data-transform_out="y:80px;opacity:0;s:300;"
                  data-start="1400"
                  > 	{!!   $NEWs_val_dec->description  !!}  </div>
               @endforeach
               <!-- LAYER NR. 3 -->
               <div class="tp-caption btn-1"
                  data-x="center"  data-hoffset="-85"
                  data-y="center"  data-voffset="100"
                  data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
                  data-transform_out="y:200px;opacity:0;s:300;"
                  data-start="1600"
                  >
                  <a title="{{ trans('langsite.Home')}}"  href="{{ URL::to('/').'/'.App::getLocale().'/About/'}}"
                     class="ot-btn btn-main-color text-cap ">{{ trans('langsite.More')}}</a>
               </div>
               <!-- LAYER NR. 4 -->
               <div class="tp-caption btn-2"
                  data-x="center"  data-hoffset="85"
                  data-y="center"  data-voffset="100"
                  data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;"
                  data-transform_out="y:200px;opacity:0;s:300;"
                  data-start="1600"
                  >
                  <a title="{{ trans('langsite.Home')}}"  href="{{ URL::to('/').'/'.App::getLocale().'/Contact/'}}" class="ot-btn btn-sub-color text-cap  ">{{ trans('langsite.Contact Us')}}</a>
               </div>
            </li>
            @endforeach
         </ul>
      </div>
      <!-- END REVOLUTION SLIDER -->
   </div>
   <!-- END REVOLUTION SLIDER WRAPPER -->
</section>
<!-- End Section Slider -->
<!-- Fantasy Area -->
<section class="fantasy_area fa_2 container">
   <div class="row fantasy_inner">
      <div class="title-block">
         <h2 class="title text-cap" >   {{ trans('langsite.About')}}  </h2>
         <div class="divider divider-1">
            <svg class="svg-triangle-icon-container">
               <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
            </svg>
         </div>
      </div>
      <div class="col-xl-12 col-lg-6 row fantasy_items">
         <div class="col-md-12 wow fadeIn">
            <div class="fantasy fantasy_4">
               <span class="icons"></span>
               <p>  <?php $string = substr( site_settings('About_Us')  ,0,600).''; echo $string ; ?> 	 	</p>
            </div>
         </div>
         <a  title="{{ trans('langsite.Home')}}" href="{{ URL::to('/').'/'.App::getLocale().'/About/'}}" class="ser-link">{{ trans('langsite.More')}}</a>
      </div>
      <div id="about" class="col-xl-12 col-lg-6 row fantasy_items area-img">
         <div class="col-md-12 wow fadeIn">
            <img id="about-an" class="" src="images/about.jpg"     alt="{!! site_settings('Web_site_name')  !!}" >
         </div>
      </div>
   </div>
</section>
<!-- Fantasy Area -->
<section class="padding serv">
   <div class="container">
      <div class="row">
         <div class="title-block">
            <h1 class="title text-cap" >{{ trans('langsite.services')}}</h1>
            <div class="divider divider-1">
               <svg class="svg-triangle-icon-container">
                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
               </svg>
            </div>
         </div>
         <!-- End Title -->
         <div class="row">
            @foreach(  $services as  $NEWs_val)
            <a title="{{  $NEWs_val->single_photo}}"  href="{!! $NEWs_val->get_NEWS_path()  !!}">
               <div class="col-md-6">
                  <div class="block-img-right text-right">
                     <div class="img-block">
                        <img src="{{ URL::to('/').'/images/'.$NEWs_val->single_photo}}" class="img-responsive" 
                           alt="{!! site_settings('Web_site_name')  !!}" >
                     </div>
                     <div class="text-box">
                        @foreach(  $NEWs_val->get_NEWS_description  as  $NEWs_val_dec)
                        <h4 class="text-cap"><mark>{!!   $NEWs_val_dec->title  !!}</mark>  </h4>
                        <p>	  {!!   $NEWs_val_dec->seo_title  !!} </p>
                        @endforeach
                     </div>
                  </div>
               </div>
            </a>
            @endforeach
         </div>
         <br>
         <br>
         <br>
         <a  title="{{ trans('langsite.Home')}}" href="{{ URL::to('/').'/'.App::getLocale().'/all_services/'}}" class="ser-link">{{ trans('langsite.More')}}</a>
      </div>
   </div>
</section>
<!-- End Section What we do -->
<section class="padding clearfix fixbug-inline-block fet ">
   <div class="container">
      <div class="row">
         <div class="title-block">
            <div class="title-block">
               <h2 class="title text-cap">{{ trans('langsite.we offer you')}}</h2>
               <div class="divider divider-1">
                  <svg class="svg-triangle-icon-container">
                     <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                  </svg>
               </div>
            </div>
         </div>
         <!-- End Title -->
         <div class="chooseus-container text-center">
            <div class="chooseus-item">
               <h4 class="text-cap">{{ trans('langsite.Perfection')}}</h4>
               <div class="chooseus-canvas-item">
                  <svg class="svg-hexagon">
                     <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                  </svg>
                  <!-- End Hexagon -->
                  <svg class="svg-triangle-dotted"  >
                     <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                  </svg>
                  <!-- End Triangle Dotted -->
                  <div class="triangle-img-warp tri">
                     <img src="images/Whychooseus/1.jpeg" class="img-responsive"     alt="{!! site_settings('Web_site_name')  !!}" >
                  </div>
               </div>
            </div>
            <!-- End -->
            <div class="chooseus-item">
               <a  title="{{ trans('langsite.Home')}}"  href="#">
                  <h4 class="text-cap">{{ trans('langsite.Distinction')}}</h4>
               </a>
               <div class="chooseus-canvas-item">
                  <svg class="svg-hexagon">
                     <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                  </svg>
                  <!-- End Hexagon -->
                  <svg class="svg-triangle-dotted svg-tri-2"  >
                     <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                  </svg>
                  <!-- End Triangle Dotted -->
                  <div class="triangle-img-warp tri2">
                     <img src="images/Whychooseus/2.jpeg" class="img-responsive"     alt="{!! site_settings('Web_site_name')  !!}" >
                  </div>
               </div>
            </div>
            <!-- End -->
            <div class="chooseus-item mgb0">
               <a   title="{{ trans('langsite.Home')}}" href="#">
                  <h4 class="text-cap">{{ trans('langsite.Modern & Creative ideas')}}</h4>
               </a>
               <div class="chooseus-canvas-item">
                  <svg class="svg-hexagon">
                     <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                  </svg>
                  <!-- End Hexagon -->
                  <svg class="svg-triangle-dotted svg-tri-3"  >
                     <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                  </svg>
                  <!-- End Triangle Dotted -->
                  <div class="triangle-img-warp tri3">
                     <img src="images/Whychooseus/3.jpeg" class="img-responsive"    alt="{!! site_settings('Web_site_name')  !!}" >
                  </div>
               </div>
            </div>
            <!-- End -->
            <div class="chooseus-item mgb0">
               <a   title="{{ trans('langsite.Home')}}" href="#">
                  <h4 class="text-cap">{{ trans('langsite.Commitment')}}</h4>
               </a>
               <div class="chooseus-canvas-item">
                  <svg class="svg-hexagon">
                     <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                  </svg>
                  <!-- End Hexagon -->
                  <svg class="svg-triangle-dotted svg-tri-4"  >
                     <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                  </svg>
                  <!-- End Triangle Dotted -->
                  <div class="triangle-img-warp tri4">
                     <img src="images/Whychooseus/4.jpeg" class="img-responsive"     alt="{!! site_settings('Web_site_name')  !!}" >
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Section Why Choose Us -->
<section class="padding bg-grey padding-bottom-0">
   <div class="title-block">
      <h2 class="title text-cap">{{ trans('langsite.Projects')}}</h2>
      <div class="divider divider-1">
         <svg class="svg-triangle-icon-container">
            <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
         </svg>
      </div>
   </div>
   <!-- End Title -->
   <div class="lastest-project-warp clearfix">
      <!-- 	<div class="projectFilter project-terms line-effect-2">
         <a href="#" data-filter="*" class="current text-cap"><h4>الكل</h4></a>
         <a href="#" data-filter=".Residential" class="text-cap"><h4>لوريم</h4></a>
         <a href="#" data-filter=".Ecommercial" class="text-cap"><h4>لوريم</h4></a>
         <a href="#" data-filter=".Office" class="text-cap"><h4>لوريم</h4></a>
         <a href="#" data-filter=".Hospital" class="text-cap"><h4>لوريم</h4></a>
         
         </div>
         -->
      <!-- End Project Fillter -->
      <div class="clearfix projectContainer">
         @foreach(  $Portfolio as  $NEWs_val)
         <div class="element-item   ">
            <img src="{{ URL::to('/').'/images/'.$NEWs_val->single_photo}}" class="img-responsive"    alt="{!! site_settings('Web_site_name')  !!}">
            <div class="project-info">
               @foreach(  $NEWs_val->get_NEWS_description  as  $NEWs_val_dec)
               <a  title="{!!   $NEWs_val_dec->title  !!}"  href="{!! $NEWs_val->get_NEWS_path()  !!}">
                  <h4 class="title-project text-cap text-cap">  
                     {!!   $NEWs_val_dec->title  !!}
                  </h4>
               </a>
               <a title="{!!   $NEWs_val_dec->title  !!}"   href="{!! $NEWs_val->get_NEWS_path()  !!}" class="cateProject"> {!!   $NEWs_val_dec->seo_title  !!}  </a>
               @endforeach
            </div>
         </div>
         @endforeach
      </div>
      <!-- End project Container -->
   </div>
   <!-- End  -->
   <div class="overlay-arc">
      <div class="layer-1">
         <a  title="{{ trans('langsite.Home')}}"  href="#" class="ot-btn btn-dark-color text-cap">{{ trans('langsite.More')}}</a>
      </div>
   </div>
</section>
<!-- End Section Isotop Lastest Project -->
<section class="padding ">
   <div class="container">
      <div class="row">
         <div class="title-block">
            <h2 class="title text-cap">{{ trans('langsite.News')}}</h2>
            <div class="divider divider-1">
               <svg class="svg-triangle-icon-container">
                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
               </svg>
            </div>
         </div>
         <!-- End Title -->
         <div class="lastest-blog-container">
            @foreach(  $NEWS as  $NEWs_val)
            <div class="col-md-4">
               <a   title="{{  $NEWs_val->single_photo }}" href="{!! $NEWs_val->get_NEWS_path()  !!} ">
                  <article class="lastest-blog-item">
                     <figure class="latest-blog-post-img effect-zoe">
                        <img src="{{ URL::to('/').'/images/'.$NEWs_val->single_photo}}" class="img-responsive"    alt="{!! site_settings('Web_site_name')  !!}">
                        <div class="latest-blog-post-date text-cap">
                           <span class="day">  {!!   $NEWs_val->created_at  !!}  </span>
                        </div>
                     </figure>
                     <div class="latest-blog-post-description">
                        @foreach(  $NEWs_val->get_NEWS_description  as  $NEWs_val_dec)
                        <h3>  {!!   $NEWs_val_dec->title  !!}</h3>
                        <p> {!!   $NEWs_val_dec->seo_title  !!} 
                        </p>
                        @endforeach
                        <span class="ot-btn btn-main-color text-cap mgb0">{{ trans('langsite.More')}}</span>
                     </div>
                  </article>
               </a>
            </div>
            @endforeach
         </div>
		 
		    <br>
        
         <br>
         <br>
         <br>
         <a  title="{{ trans('langsite.Home')}}" href="{{ URL::to('/').'/'.App::getLocale().'/all_news/'}}" class="ser-link">{{ trans('langsite.More')}}</a>
     
      </div>
</section>
<!-- End Section Lastest Blog -->
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
<!-- Countarup Area -->
<section class="countarup_area">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="countraup_item mt">
<h4>{{ trans('langsite.services')}}</h4>
<h3><b class="counter"> {!! site_settings('Services')  !!} </b></h3>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="countraup_item">
<h4>{{ trans('langsite.Projects')}} </h4>
<h3><b class="counter"> {!! site_settings('Portfolio')  !!} </b></h3>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="countraup_item mt_2">
<h4>{{ trans('langsite.Branches')}}</h4>
<h3><b></b><b class="counter"> {!! site_settings('Branches')  !!} </b></h3>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="countraup_item mt_3">
<h4>{{ trans('langsite.Happy clients')}}</h4>
<h3><b class="counter"> {!! site_settings('Client')  !!} </b></h3>
</div>
</div>
</div>
</div>
</section>
</div>
<section class="padding">
   <div class="container">
      <div class="row">
         <div class="contact-warp">
            <div class="col-md-6 ">
               <div class="left-contact">
                  <h3 class="text-cap">{{ trans('langsite.Send message to us')}}</h3>
                  {!! Form::open( [ 'route' =>  'orders','name' =>  'contact', 'method' => 'post', 'class' => 'form-inline form-contact-arc'] ) !!}
                  <div class="row">
                     <div class="form-group col-sm-12 ">
                        <input type="text" class="form-control" name="title" id="yourName" placeholder="{{ trans('langsite.Name')}}" required= required >
                     </div>
                     <div class="form-group col-sm-12">
                        <input type="email" class="form-control" name="email" id="yourEmail" placeholder="{{ trans('langsite.Email')}}"  required= required>
                     </div>
                     <div class="form-group col-sm-12">
                        <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="{{ trans('langsite.Phone')}}"  required= required >
                     </div>
                  </div>
                  <div class="input-content">
                     <div class="form-group form-textarea">
                        <textarea id="textarea" class="form-control" name="body" rows="4" placeholder="{{ trans('langsite.Message')}}"  required= required ></textarea>
                     </div>
                  </div>
                  <button  class="ot-btn btn-main-color btn-long text-cap btn-submit">{{ trans('langsite.send')}}</button>
                  </form> <!-- End Form -->
               </div>
               <!-- End col -->
            </div>
            <div class="col-md-6 ">
               <div class="right-contact">
                  <h3 class="text-cap">{{ trans('langsite.Contact Us')}}</h3>
                  <ul class="address">
                     <li>
                        <p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;  {!!  site_settings('Location') !!}  </p>
                     </li>
                     <li>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
                           <a  title="{{ trans('langsite.Home')}}"  href="tel:{!!  site_settings('phone') !!} "> {!!  site_settings('phone') !!}  </a>
                        </p>
                     </li>
                     <li>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;  {!!  site_settings('Mail') !!} </p>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- End col -->
         </div>
      </div>
   </div>
</section>
@endsection