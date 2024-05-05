<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{!empty($header_title)? $header_title : ''}} - HarvestOfHeart </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assetsh/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assetsh/dist/css/adminlte.min.css">
@yield('style')

</head>



<body class="hold-transition sidebar-mini">

  @include('sweetalert::alert')

  
<div class="wrapper">
@include('layouts.header')
    @yield('content')
    @include('layouts.footer')
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/assetsh/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/assetsh/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/assetsh/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/assetsh/plugins/chart.js/Chart.min.js"></script>



@yield('script')

</body>
</html>
