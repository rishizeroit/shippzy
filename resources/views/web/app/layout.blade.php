<!DOCTYPE html>
<html>
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="T" />
	<meta name="description" content="">
	<title>@yield('title','Shipzzy')</title>
	<link rel="stylesheet" href="{{base_url('web/css/styler.css')}}" />
	<link rel="stylesheet" href="{{base_url('web/css/theme-pink.css')}}" id="template-color" />
	<link rel="stylesheet" href="{{base_url('web/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{base_url('web/css/jquery-ui.theme.css')}}" />
	<link rel="stylesheet" href="{{base_url('web/css/style.css')}}" />

	<link rel="stylesheet" href="{{base_url('web/css/animate.css')}}" />
	<link rel="stylesheet" href="{{base_url('web/css/icons.css')}}" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- <link rel="shortcut icon" href="{{base_url('web/images/favicon.ico')}}" /> -->
	<script src="{{base_url('web/js/e808bf9397.js')}}"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	@stack('styles')
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
  </head>
  
  <body class="{{ (request()->is('login') || request()->is('register') || request()->is('contact-us')) ? '' : 'home' }}">
        @include('web.inc.header')

        @yield('content')
	
        @include('web.inc.footer')
	
	 <!-- jQuery -->
    <script src="{{base_url('web/js/jquery.min.js')}}"></script>
	<script src="{{base_url('web/js/jquery-ui.min.js')}}"></script>
	<script src="{{base_url('web/js/jquery-ui-timepicker-addon.min.js')}}"></script>
	<!-- <script src="{{base_url('web/js/jquery.uniform.min.js')}}"></script> -->
	<script src="{{base_url('web/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{base_url('web/js/wow.min.js')}}"></script>
	<script src="{{base_url('web/js/jquery-ui-sliderAccess.js')}}"></script>
	<script src="{{base_url('web/js/search.js')}}"></script>
	<script src="{{base_url('web/js/scripts.js')}}"></script>
	
	<!-- TEMPLATE STYLES -->

	@stack('scripts')

  </body>
</html>
