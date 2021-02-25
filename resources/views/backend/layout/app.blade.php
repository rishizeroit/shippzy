
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{base_url('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
  <!-- iCheck -->
  <link rel="stylesheet" href="{{base_url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
 
  <!-- Theme style -->
  <link rel="stylesheet" href="{{base_url('admin/dist/css/adminlte.min.css')}}">
  <!-- <link rel="stylesheet" href="{{base_url('admin/dist/css/all-skins.min.css')}}"> -->
  
  @stack('styles')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('backend.inc.header')
  
  @include('backend.inc.sidebar')
  @include('backend.modal.modal')
  @yield('content')
  @include('backend.inc.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{base_url('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{base_url('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- AdminLTE App -->
<script src="{{base_url('admin/dist/js/adminlte.js')}}"></script>

@stack('scripts')
</body>
</html>
