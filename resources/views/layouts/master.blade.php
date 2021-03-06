<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title_section')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {!! HTML::style('plugins/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! HTML::style('plugins/font-awesome/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">--}}
    <!-- jvectormap -->
    {!! HTML::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
    <!-- Theme style -->
    {!! HTML::style('css/AdminLTE.min.css') !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!! HTML::style('skins/_all-skins.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('partials.main-header')
    @include('partials.main-sidebar')
    <!-- Content Wrapper. Contains page content -->
    @yield('content_section')
    <!-- /.content-wrapper -->
    @include('partials.main-footer')
    @include('partials.control-sidebar')
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
{!! HTML::script('plugins/jquery/jquery-2.2.3.min.js') !!}
<!-- Bootstrap 3.3.6 -->
{!! HTML::script('plugins/bootstrap/js/bootstrap.js') !!}
<!-- FastClick -->
{!! HTML::script('plugins/fastclick/fastclick.js') !!}
<!-- AdminLTE App -->
{!! HTML::script('js/app.js') !!}
<!-- Sparkline -->
{!! HTML::script('plugins/sparkline/jquery.sparkline.min.js') !!}
<!-- jvectormap -->
{!! HTML::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!! HTML::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
<!-- SlimScroll 1.3.0 -->
{!! HTML::script('plugins/slimScroll/jquery.slimscroll.min.js') !!}
<!-- ChartJS 1.0.1 -->
{!! HTML::script('plugins/chartjs/Chart.min.js') !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! HTML::script('js/dashboard2.js') !!}
<!-- AdminLTE for demo purposes -->
{!! HTML::script('js/demo.js') !!}
</body>
</html>
