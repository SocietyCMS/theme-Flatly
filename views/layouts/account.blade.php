<html><head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            Admin
        @show
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{!! Theme::url('vendor/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="{!! Theme::url('vendor/admin-lte/dist/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{!! Theme::url('vendor/admin-lte/dist/css/skins/_all-skins.min.css') !!}" rel="stylesheet" type="text/css">

    @section('styles')
    @show

</head>
<body class="skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <a href="{{ URL::route('dashboard.index') }}" class="logo">
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
    </header>
            <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
            @include('flash::message')
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
{!! Theme::script('vendor/jquery/jquery.js') !!}
        <!-- Bootstrap 3.3.2 JS -->
{!! Theme::script('vendor/bootstrap/dist/js/bootstrap.min.js') !!}
        <!-- AdminLTE App -->
{!! Theme::script('vendor/admin-lte/dist/js/app.js') !!}


</body></html>