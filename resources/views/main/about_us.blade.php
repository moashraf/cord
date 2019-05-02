@extends('main.master')
@section('content')
		<title> {!! site_settings('Web_site_name')  !!}  {{ trans('langsite.About')}}   </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="UTF-8">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content=" {!! site_settings('about_us_seo_description')  !!}  "/>
 <meta name="Keywords" content="{!! site_settings('about_us_seo_description')  !!}  "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('about_us_seo_description')  !!}  " />
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
<meta name="twitter:title" content=" {!! site_settings('about_us_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta name="twitter:site" content="@mar-decor" />  
    				<section>
					<div class="sub-header sub-header-1 sub-header-about fake-position">
						<div class="sub-header-content">
							<h2 class="text-cap white-text">{{ trans('langsite.About')}}</h2>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a   title="{!! site_settings('Web_site_name')  !!} " href="#">{{ trans('langsite.Home')}}</a>
								</li>
								<li>
									<a  title="{!! site_settings('Web_site_name')  !!} "  href="#">{{ trans('langsite.About')}}</a>
								</li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->

				<section class="padding rtl">
					<div class="container">
						<div class="row">
							<div class="about-intro rtl">
								<div class="about-intro-img">
									<img src="{{ URL::to('/').'/images/about2.jpg'}}" class="img-responsive"    alt="{!! site_settings('Web_site_name')  !!}">
								</div>
								<div class="about-intro-text">
									<h2 class="text-cap">{{ trans('langsite.About')}}</h2>
									<p>    {!! site_settings('About_Us')  !!}  </p>
								 

								</div>
							</div>
						</div>
					</div>
				</section>
				 
   @endsection
