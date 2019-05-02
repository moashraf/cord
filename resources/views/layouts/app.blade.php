<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>   Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

		
		
 	    <script src=" {{ asset('/ckeditor_full/ckeditor.js')}}  "></script>

  
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		
		
		

		
<style>
  .admin_edit_ar textarea {   

 text-align: right!important; }
 .admin_edit_ar input {   

 text-align: right!important; }
.admin_edit_ar{   

 text-align: right!important;
 background: #d8d8d882;
    border: 5px solid white;
    border-radius: 10px;}

#admin_edit{    background: #d8d8d882;
    border: 5px solid white;
    border-radius: 10px;}
    
    #example_wrapper {
        padding:20px;
    }
	
	
	
        @import url('https://fonts.googleapis.com/css?family=Montserrat');
        
        body {
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 1px;
            line-height: 20px;
        }

        .form-control {
            border-top: 2px solid #222d32;
            border-radius: 5px;
        }
        .form-control:focus {
            border: 0;
            border-bottom: 3px solid #000;
            border-top: 1px solid transparent;
        }
        .skin-blue .main-header .navbar .sidebar-toggle {
            font-size: 30px;
        }
        .navbar-nav>.user-menu .user-image {
            width: 40px;
            height: 40px;
            margin-top: 1px;
        }
        .skin-blue .main-header .navbar .nav>li>a {
            font-weight: bold;
        }
        
        .col-sm-6 h1 {
            color: #fff;
            font-size: 18px;
            text-transform: uppercase;
            /*border: 1px dashed #fff;*/
            text-align: center;
            padding: 7px;
            margin-bottom: 15px;
        } 
        
        #admin_edit {
            background: #222d32;
        }
        
        .admin_edit_ar {
            background: #222d32;
        }
        
        .skin-blue .main-header .navbar {
            background-color: #222d32;
        }
        
        .content {
            text-transform: capitalize;
        }
        
        label {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 3px;
        }
        
        .skin-blue .main-header .logo {
            background-color: #fff;
            color: #333;
        }
        
        .logo {
            text-transform: uppercase;
        }
        
        .skin-blue .main-header .navbar .sidebar-toggle {
            color: #fff;
            background: #222d32;
            height: 51px; 
        }
		
		#example_wrapper label {
			color: #000 !important;
		}
    
</style>
  
		
     @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>ADmin</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="https://us.123rf.com/450wm/kraft2727/kraft27271412/kraft2727141200018/34583214-logo-admin-icon-administrator-illustration-of-a-man-in-a-jacket-and-shirt-ties-jacket-and-shirt-.jpg?ver=6"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span><br> 
								  @foreach(Auth::user()->unreadNotifications as $notification )
                                <span class="hidden-xs">{!! $notification->data['data'] !!}</span>
								<?php       $notification->markAsRead(); ?>
								 @endforeach
								 {{ count(Auth::user()->unreadNotifications  )}}
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="https://us.123rf.com/450wm/kraft2727/kraft27271412/kraft2727141200018/34583214-logo-admin-icon-administrator-illustration-of-a-man-in-a-jacket-and-shirt-ties-jacket-and-shirt-.jpg?ver=6"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
Admin                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    @yield('scripts')
	    <script src="{{ asset('StreamLab/StreamLab.js') }} "></script>

	 <script>
        var message, ShowDiv = $('#showNofication'), count = $('#count'), c;
        var slh = new StreamLabHtml();
        var sls = new StreamLabSocket({
            appId:"{{ config('stream_lab.app_id') }}",
            channelName:"test",
            event:"*"
        });
        sls.socket.onmessage = function(res){
            slh.setData(res);
            if(slh.getSource() === 'messages'){
                c = parseInt(count.html());
                count.html(c+1);
                message  = slh.getMessage();
                ShowDiv.prepend('<li><a href="" class="unread">'+message+'</a></li>');
            }
        }
      
    </script>
	   <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


 
</body>
</html>