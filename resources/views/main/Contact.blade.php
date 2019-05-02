@extends('main.master')
@section('content') 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="UTF-8">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content=" {!! site_settings('Contact_seo_description')  !!}  "/>
 <meta name="Keywords" content="{!! site_settings('Contact_seo_description')  !!}  "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('Contact_seo_description')  !!}  " />
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
<meta name="twitter:title" content=" {!! site_settings('Contact_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta name="twitter:site" content="@mar-decor" />  		 
						  
					<title> {!! site_settings('Web_site_name')  !!}  {{ trans('langsite.Contact Us')}}ا  </title>
			   
				<section>
					<div class="sub-header sub-header-1 sub-header-contact fake-position">
						<div class="sub-header-content">
							<h1 class="text-cap white-text">{{ trans('langsite.Contact Us')}}</h1>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a title="{{ trans('langsite.Home')}}"  href="#">{{ trans('langsite.Home')}}</a>
								</li>
								<li class="active">{{ trans('langsite.Contact Us')}}</li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->
				<!-- Section form contact -->
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
			</div> <!-- End col -->
		</div>
			    				<div class="col-md-6 ">
			    					<div class="right-contact">
				    				<h3 class="text-cap">{{ trans('langsite.Contact Us')}}</h3>
				    				 
				    				<ul class="address">
							<li><p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;  {!!  site_settings('Location') !!}  </p></li>
				    					<li><p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
										<a title="{{ trans('langsite.Home')}}"  href="tel:{!!  site_settings('phone') !!} "> {!!  site_settings('phone') !!}  </a></p></li>
 				    					<li><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;  {!!  site_settings('Mail') !!} </p></li>
				    				</ul>
				    				</div>
			    				</div> <!-- End col -->
			    			</div>
			    		</div>
			    	</div>
			    </section>
			    <!-- End Section -->
					<section>
						{!!  site_settings('google_maps') !!}
					</section>

 
 
 
   @endsection
