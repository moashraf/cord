<!DOCTYPE html>
<html lang="">
   <head>
      <meta name="robots" content="index, follow">
      <link rel="canonical" href="https://mar-decor.com/" />
      <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{  asset('/css/bootstrap.min.css') }}  ">
      <!-- Font -->
      <link rel="stylesheet" href="{{  asset('/css/font-awesome.min.css') }}  ">
      <link rel="stylesheet" href="{{  asset('/css/elegant-font.css ') }}  ">
      <!-- REVOLUTION STYLE SHEETS -->
      <link rel="stylesheet" type="text/css" href=" {{  asset('/revolution/css/settings.css ') }}  ">
      <!-- REVOLUTION LAYERS STYLES -->
      <link rel="stylesheet" type="text/css" href=" {{  asset('/revolution/css/layers.css ') }}  ">
      <!-- REVOLUTION NAVIGATION STYLES -->
      <link rel="stylesheet" type="text/css" href="  {{  asset('/revolution/css/navigation.css') }}  ">
      <!-- OWL CAROUSEL
         ================================================== -->
      <link rel="stylesheet" href=" {{  asset('/css/owl.carousel.css  ') }}  ">
      <!-- SCROLL BAR MOBILE MENU
         ================================================== -->
      <link type="image/png" href=" {{  asset('/images/favicon-32x32.png  ') }}  ">
      <link type="image/png" href=" {{  asset('/images/favicon-16x16.png  ') }}  ">
      <!-- Main Style -->
      <?php  if (  App::getLocale()== 'ar' ){       ?>
      <link rel="stylesheet" href=" {{  asset('/css/style-ar.css  ') }}  ">
      <?php  }  else{       ?>
      <link rel="stylesheet" href=" {{  asset('/css/style-en.css  ') }}  ">
      <?php      } ?>
      <link rel="icon" href="{{ URL::to('/').'/images/mar2.jpg '}}" type="image/gif" sizes="56x56">
   </head>
   <body>
      <div class="mobile-menu-first">
         <div id="mobile-menu" class="mobile-menu">
            <div class="header-mobile-menu">
               <div class="mm-toggle">
                  <i class="fas fa fa-close icon-close"></i>
               </div>
            </div>
            <!-- Mobile Menu -->
            <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
               <ul class="navi-level-1 hover-style-2 main-navi">
                  <li class="has-sub"><a   title="{{ trans('langsite.Home')}}" href="{{ URL::to('/').'/'.App::getLocale() }}"><span>{{ trans('langsite.Home')}}</span> </a>
                  </li>
                  <li class="has-sub"><a   title="{{ trans('langsite.Home')}}" href="{{ URL::to('/').'/'.App::getLocale().'/About/'}}"><span>{{ trans('langsite.About')}}</span></a>
                  </li>
                  <li class="has-sub"><a  title="{{ trans('langsite.Home')}}"  href="{{ URL::to('/').'/'.App::getLocale().'/all_services/'.trans('langsite.services').'/3/'}}"><span>{{ trans('langsite.services')}}</span></a>
                  </li>
                						
                  <li class="has-sub"><a   title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.Projects').'/3/'}}"><span>{{ trans('langsite.Projects')}}</span></a></li>
                  <li class="has-sub"><a href="{{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.News').'/3/'}}"><span>{{ trans('langsite.News')}}</span></a>
                  </li>
                  <li class="has-sub"><a  title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale().'/Contact/'}}"><span>{{ trans('langsite.Contact Us')}}</span></a>
                  </li>
               </ul>
               <div class="footer-mobile-menu">
                  <ul class="social">
                     <li class="facebook"><a   title="{!! site_settings('Web_site_name')  !!} " rel="nofollow" target="_blank"  href=" {!! site_settings('facebook')  !!} "><i class="fa fa-facebook"></i></a></li>
                     <li class="twitter"><a    title="{!! site_settings('Web_site_name')  !!} " rel="nofollow" target="_blank"  href=" {!! site_settings('twitter')  !!} "><i class="fa fa-twitter"></i></a></li>
                     <li class="google-plus"><a   title="{!! site_settings('Web_site_name')  !!} "  rel="nofollow" target="_blank" href=" {!! site_settings('google-plus')  !!} "><i class="fa fa-google-plus"></i></a></li>
                     <li class="youtube"><a    title="{!! site_settings('Web_site_name')  !!} "  rel="nofollow" target="_blank" href=" {!! site_settings('youtube')  !!} "><i class="fa fa-youtube-play"></i></a></li>
                     <li class="linkedin"><a  title="{!! site_settings('Web_site_name')  !!} "   rel="nofollow" target="_blank"  href=" {!! site_settings('linkedin')  !!} "><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                  <ul class="address-footer-mobile">
                     <li>
                        <p>  {!! site_settings('Location')  !!}  </p>
                     </li>
                     <li>
                        <p>  {!! site_settings('phone')  !!}   </p>
                     </li>
                     <li>
                        <p>  {!! site_settings('Mail')  !!}  </p>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- /#rmm   -->
         </div>
      </div>
      <!-- End Mobile Menu -->
      <div class="modal fade modal-search" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-dismiss="modal">×</button>
         <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body">
                  <form role="search" method="get" class="search-form">
                     <input class="search-field" placeholder="Search here..." value="" title="" type="search">
                     <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- End Modal Search-->
      <div id="page">
      <div id="skrollr-body">
         <header id="mainmenu" class="header-v1 header-border header-fix header-bg-white" data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
            <div class="right-header">
               <ul class="navi-level-1 sub-navi seperator-horizonal-line hover-style-4">
                  <!-- Testing Search Box -->
                  <li>
                     <a   title="{!! site_settings('Web_site_name')  !!} " href="#/"  class="mm-toggle three">
                     <span aria-hidden="true" class="icon_menu"></span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- End Right Header -->
            <nav>
               <ul class="navi-level-1 hover-style-2 main-navi nav-r">
                  <li class="has-sub sub"><a  title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale()}}"><span><i class="fas fa fa-home"></i> {{ trans('langsite.Home')}} </span> </a>
                  
				    <!-- End Right Header 
                  <div class="dropdown none">
                      <a href="#">link one</a>
                      
                      <a href="#">link two</a>
                  </div>
				  -->
                  </li>
                  <li class="has-sub"><a  title="{!! site_settings('Web_site_name')  !!} " href=" {{ URL::to('/').'/'.App::getLocale().'/About/'}}"><span><i class="fas fa fa-flag"></i> {{ trans('langsite.About')}}</span></a>
                  </li>
                  <li class="has-sub"><a  title="{!! site_settings('Web_site_name')  !!} "  href="{{ URL::to('/').'/'.App::getLocale().'/all_services/'.trans('langsite.services').'/1/'}}"><span><i class="fas fa fa-check"></i> {{ trans('langsite.services')}}</span></a>
                  </li>
                  <li class="has-sub"><a   title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale().'/all_Projects/'.trans('langsite.Projects').'/3/'}}"><span><i class="fas fa fa-briefcase"></i> {{ trans('langsite.Projects')}}</span></a></li>
                  <li class="has-sub"><a   title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.News').'/2/'}}"><span>
                     <i class="fas fa fa-file"></i> {{ trans('langsite.News')}}</span></a>
                  </li>
                  <li class="has-sub"><a   title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale().'/Contact/'}}"><span><i class="fas fa fa-mobile"></i> {{ trans('langsite.Contact Us')}}</span></a>
                  </li>
                  <?php if (App::getLocale()=="en"){   ?>
                  <li class="has-sub"><a  title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/ar/' }}"><span>
                     <i class=" "></i>   عربي  </span></a>
                  </li>
                  <?php  }else {    ?>
                  <li class="has-sub"><a  title="{!! site_settings('Web_site_name')  !!} "  href="{{ URL::to('/').'/en/' }}"><span>
                     <i class=" "></i>   English  </span></a>
                  </li>
                  
                  
                  <?php  }    ?>
                  <li class="has-sub header-mobile"><a   title="{!! site_settings('Web_site_name')  !!} " href="tel:01127582895/01092211824"><span><i class="fas fa fa-mobile"></i>  {{ trans('langsite.get prices')}}</span></a>
                  </li>
               </ul>
            </nav>
            <!-- End Nav -->
            <div class="left-header">
               <ul class="navi-level-1">
                  <li><a  title="{!! site_settings('Web_site_name')  !!} "  href="{{ URL::to('/').'/'.App::getLocale().'/'}}" class="logo">
                     <img     alt="{!! site_settings('Web_site_name')  !!}" class="img-logo" 
                        src="{{ URL::to('/').'/images/mar2.png '}}"></a>
                  </li>
               </ul>
            </div>
            <!-- End Left Header -->
         </header>
         <!-- End  Header -->
         @yield('content')	
      </div>
      <!-- End page -->
      <a   title="{!! site_settings('Web_site_name')  !!} " id="to-the-top"><i class="fa fa-angle-up"></i></a>
      <div id="fixed-social">
         <div>
            <a  title="{!! site_settings('Web_site_name')  !!} "  rel="nofollow" href=" {!! site_settings('facebook')  !!}" class="fixed-facebook" target="_blank">
            <i class="fa fa-facebook"></i> <span>Facebook</span></a>
         </div>
         <div>
            <a  title="{!! site_settings('Web_site_name')  !!} " rel="nofollow"  href=" {!! site_settings('instagram')  !!}" class="fixed-instagrem" target="_blank">
            <i class="fa fa-instagram"></i> <span>Instagram</span></a>
         </div>
         <div>
            <a  title="{!! site_settings('Web_site_name')  !!} " rel="nofollow"  href="tel:{!! site_settings('phone')  !!}" target="_self" class="fixed-phone" target="_blank">
            <i class="fa fa-phone"></i>
            <span> {!! site_settings('phone')  !!}</span></a>
         </div>
         <div>
            <a  title="{!! site_settings('Web_site_name')  !!} "  rel="nofollow"  href="mailto:{!! site_settings('Mail')  !!}" target="_self" class="fixed-mail" target="_blank">
            <i class="fa fa-at"></i> <span> {!! site_settings('Mail')  !!}</span></a>
         </div>
      </div>
      <!-- Back To Top -->
      <footer class="footer-v1">
         <div class="footer-right">
            <a   title="{!! site_settings('Web_site_name')  !!} " href="#">
               <!-- <h2>LOGO</h2> -->
            </a>
         </div>
         <div class="footer-left">
            <ul class="social social-footer">
               <li class="facebook"><a   title="{!! site_settings('Web_site_name')  !!} "rel="nofollow"  target="_blank"  href=" {!! site_settings('facebook')  !!} "><i class="fa fa-facebook"></i></a></li>
               <li class="twitter"><a   title="{!! site_settings('Web_site_name')  !!} "  rel="nofollow" target="_blank"  href=" {!! site_settings('twitter')  !!} "><i class="fa fa-twitter"></i></a></li>
               <li class="google-plus"><a     title="{!! site_settings('Web_site_name')  !!} " rel="nofollow" target="_blank" href=" {!! site_settings('google-plus')  !!} "><i class="fa fa-google-plus"></i></a></li>
               <li class="youtube"><a    title="{!! site_settings('Web_site_name')  !!} " rel="nofollow"  target="_blank" href=" {!! site_settings('youtube')  !!} "><i class="fa fa-youtube-play"></i></a></li>
               <li class="linkedin"><a   title="{!! site_settings('Web_site_name')  !!} "  rel="nofollow" target="_blank"  href=" {!! site_settings('linkedin')  !!} "><i class="fa fa-linkedin"></i></a></li>
            </ul>
         </div>
         <!-- End Left Footer -->
         <nav class="nav-r">
            <ul>
                    <li class="has-sub header-mobile"><a   title="{!! site_settings('Web_site_name')  !!} " href="tel:01127582895/01092211824"><span><i class="fas fa fa-mobile"></i> 01127582895/01092211824</span></a>
                  </li>
               <li class="has-sub"><a   title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale() }}"><span>{{ trans('langsite.Home')}}</span></a>
               </li>
               <li class="has-sub"><a  title="{!! site_settings('Web_site_name')  !!} "  href="{{ URL::to('/').'/'.App::getLocale().'/About/'}}"><span>{{ trans('langsite.About')}}</span></a>
               </li>
                <li class="has-sub"><a  title="{{ trans('langsite.Home')}}"  href="{{ URL::to('/').'/'.App::getLocale().'/all_services/'.trans('langsite.services').'/3/'}}"><span>{{ trans('langsite.services')}}</span></a>
                  </li>
                						
                  <li class="has-sub"><a   title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.Projects').'/3/'}}"><span>{{ trans('langsite.Projects')}}</span></a></li>
                  <li class="has-sub"><a href="{{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.News').'/3/'}}"><span>{{ trans('langsite.News')}}</span></a>
                  </li>
               <li class="has-sub"><a   title="{!! site_settings('Web_site_name')  !!} " href="{{ URL::to('/').'/'.App::getLocale().'/Contact/'}}"><span>{{ trans('langsite.Contact Us')}}</span></a>
               </li>
            </ul>
         </nav>
         <!-- End Nav Footer -->
         <!-- End Right Footer -->
      </footer>
      <!-- End Footer -->
      <section class="copyright">
         <p>Copyright © 2019 Designed by 
            <a target="_blank" href="https://corddigital.com/">Cord digital</a>. All rights reserved.
         </p>
      </section>
      <!-- SCRIPT -->
      <script src="{{  asset('/js/vendor/jquery.min.js') }}"></script>
      <script src=" {{  asset('/js/vendor/bootstrap.min.js') }} "></script>
      <script src="{{  asset('/js/plugins/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src=" {{  asset('/js/plugins/wow.min.js') }} "></script>
      <script type="text/javascript" src=" {{  asset('/js/plugins/skrollr.min.js') }} "></script>
      <!-- Switcher
         ================================================== -->
      <script src=" {{  asset('/js/vendor/jquery.waypoints.min.js') }} "></script>
      <script src="{{  asset('/js/vendor/jquery.counterup.min.js ') }} "></script>
      <!-- REVOLUTION JS FILES -->
      <script type="text/javascript" src="{{  asset('/revolution/js/jquery.themepunch.tools.min.js ') }}" ></script>
      <script type="text/javascript" src=" {{  asset('/revolution/js/jquery.themepunch.revolution.min.js ') }} "></script>
      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
         (Load Extensions only on Local File Systems !
         The following part can be removed on Server for On Demand Loading) -->
      <script src=" {{  asset('/js/vendor/wow.min.js') }} "></script>
      <script type="text/javascript" src="{{  asset('/revolution/js/extensions/revolution.extension.actions.min.js') }} "></script>
      <script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.carousel.min.js') }} "></script>
      <script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.kenburn.min.js') }}  "></script>
      <script type="text/javascript" src="{{  asset('/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}  "></script>
      <script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.migration.min.js') }}  "></script>
      <script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.navigation.min.js') }}  "></script>
      <script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.parallax.min.js') }}  "></script>
      <script type="text/javascript" src=" {{  asset('/revolution/js/extensions/revolution.extension.slideanims.min.js') }}  "></script>
      <script type="text/javascript" src="  {{  asset('/revolution/js/extensions/revolution.extension.video.min.js') }}  "></script>
      <!-- Intializing Slider-->
      <script type="text/javascript" src=" {{  asset('/js/plugins/slider.js ') }}  "></script>
      <script src="  {{  asset('/js/vendor/parallax.min.js') }}  "></script>
      <script src="  {{  asset('/js/vendor/jquery.jqlouds.min.js') }}  "></script>
      <!-- Mobile Menu
         ================================================== -->
      <script src="  {{  asset('/js/plugins/jquery.mobile-menu.js') }}  "></script>
      <!-- Initializing the isotope
         ================================================== -->
      <script src="  {{  asset('/js/plugins/isotope.pkgd.min.js') }}  "></script>
      <script src="  {{  asset('/js/plugins/custom-isotope.js') }}  "></script>
      <!-- Initializing Owl Carousel
         ================================================== -->
      <script src="  {{  asset('/js/plugins/owl.carousel.js') }} "></script>
      <script src="  {{  asset('/js/plugins/custom-owl.js ') }} "></script>
      <script src="  {{  asset('/js/plugins/noframework.waypoints.min.js ') }} "></script>
      <script src=" {{  asset('/js/plugins/custom.js') }}"></script>
   </body>
</html>