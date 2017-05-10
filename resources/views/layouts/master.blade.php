<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="icon" href="{{URL::asset('/webedu-theme/images/uomx-favicon.png')}}" type="image/png">

    <!-- Bootstrap -->
    <link href="" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('gentelella-theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('gentelella-theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{URL::asset('gentelella-theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
          rel="stylesheet">
    <!-- JQVMap -->

    <link href="{{URL::asset('gentelella-theme/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('gentelella-theme/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('gentelella-theme/build/css/custom.min.css')}}" rel="stylesheet">



    @yield('custom-include')
</head>


<body class="nav-md">
<!-- jQuery -->

<script src="{{URL::asset('gentelella-theme/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Custom Styles to override body style -->
@yield('custom-styles')

        <!-- Page Content -->
<div class="container body">
    @yield('content')
</div>

<!-- Scripts -->
@stack('scripts')

        <!-- Bootstrap -->
<script src="{{URL::asset('gentelella-theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('gentelella-theme/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{URL::asset('gentelella-theme/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{URL::asset('gentelella-theme/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{URL::asset('gentelella-theme/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{URL::asset('gentelella-theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{URL::asset('gentelella-theme/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->

<script src="{{URL::asset('gentelella-theme/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{URL::asset('gentelella-theme/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{URL::asset('gentelella-theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{URL::asset('gentelella-theme/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{URL::asset('gentelella-theme/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{URL::asset('gentelella-theme/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{URL::asset('gentelella-theme/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{URL::asset('gentelella-theme/build/js/custom.min.js')}}"></script>


@yield('custom-footer-include')
</body>
</html>