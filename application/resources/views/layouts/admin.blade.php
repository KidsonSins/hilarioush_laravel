<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hilarioush Enlish Boarding School - Admin</title>
    <link href="{{ asset('dist/backend/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('dist/backend/css/animate.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('dist/frontend/css/animate.css') }}" rel="stylesheet">--}}
    {{--<!-- This is a Custom CSS -->--}}
    {{--<link href="{{ asset('dist/backend/css/style.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('dist/backend/css/colors/default.css') }}"  rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('dist/backend/css/remodal.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/backend/css/remodal-default-theme.css') }}">

    <link href="{{ asset('dist/backend/css/hilarioush.css') }}"  rel="stylesheet">

    <style>
        .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td{
            border:1px solid #ccc;
        }
        .table > thead > tr > th{
            border:1px solid #ccc;
        }
        .table-bordered{
            border:1px solid #ccc;
        }
        thead{
            background: #4f5467;
        }
        thead tr th{
            color: #fff;
        }
        .white-box{
            min-height:70vh;
        }
        .modal-open .modal{
            display: table;
            min-height: 100vh;
            min-width: 100vw;
        }
        .modal.in.deletewala .modal-dialog{
            text-align: center;
            margin: 12% auto;
        }
        .remodal-close{
            left:auto;
            right:0;
        }

    </style>

    @yield('styles')

</head>
<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<div id="wrapper" class="remodal-bg">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <!-- Toggle icon for mobile view -->
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <!-- Logo -->
            <div class="top-left-part">
                <a class="logo" href="">
                    <!-- Logo icon image, you can use font-icon also -->
                    <b><img src="{{ asset('dist/backend/images/logo_white.png') }}" alt="home" /></b>
                    <!-- Logo text image you can use text also -->
                    <span class="hidden-xs"><img src="{{ asset('dist/backend/images/logo_text_white.png') }}" alt="home" /></span>
                </a>
            </div>
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

            </ul>
            <!-- This is the message dropdown -->
            <ul class="nav navbar-top-links navbar-right pull-right">


                <!-- .user dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ Auth::user()->photo? asset('uploads/').'/'.Auth::user()->photo->path:'http://placehold.it/128x128' }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->name }}</b> </a>
                    <ul class="dropdown-menu dropdown-user scale-up">
                        <li><a href="{{ route('admin.users.index') }}"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.user dropdown-user -->
                </li>
                <!-- /.user dropdown -->


                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- Left navbar-sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- Search input-group this is only view in mobile -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                    </div>
                    <!-- / Search input-group this is only view in mobile-->
                </li>
                <!-- User profile-->
                <li class="user-pro">
                    <a href="#" class="waves-effect"><img src="{{ Auth::user()->photo? asset('uploads/').'/'.Auth::user()->photo->path:'http://placehold.it/128x128' }}" alt="user-img"  class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ route('admin.users.index') }}"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
                <!-- User profile-->
                <li class="nav-small-cap m-t-10">--- Main Menu</li>
                <li><a href="{{ url('/admin') }}" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa fa-dashboard"></i> <span class="hide-menu">Dashboard</span></a> </li>
                <li><a href="{{ route('admin.users.index') }}" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa fa-user"></i> <span class="hide-menu">Users</span></a> </li>
                <li><a href="{{ route('admin.events.index') }}" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa fa-calendar"></i> <span class="hide-menu">News / Events</span></a> </li>
                <li><a href="{{ route('admin.downloads.index') }}" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa fa-archive"></i> <span class="hide-menu">Notice / Files</span></a> </li>
                <li><a href="{{ route('admin.galleryimage.index') }}" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa fa-photo"></i> <span class="hide-menu">Gallery</span></a> </li>
                {{--<li>--}}
                    {{--<a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa"></i> <span class="hide-menu">Dropdown Link<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">2</span></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                        {{--<li><a href="javascript:void(0)">Link one</a></li>--}}
                        {{--<li><a href="javascript:void(0)">Link Two</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Multi Dropdown<span class="fa arrow"></span></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                        {{--<li> <a href="javascript:void(0)">Second Level Item</a> </li>--}}
                        {{--<li> <a href="javascript:void(0)">Second Level Item</a> </li>--}}
                        {{--<li>--}}
                            {{--<a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>--}}
                            {{--<ul class="nav nav-third-level">--}}
                                {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                                {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                                {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                                {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
    <!-- Left navbar-sidebar end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <!-- .page title -->
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">@yield('page_title')</h4>
                </div>
                <!-- /.page title -->
                <!-- .breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">@yield('page_title')</a></li>
                        <!--                        <li class="active">Starter Page</li>-->
                    </ol>
                </div>
                <!-- /.breadcrumb -->
            </div>
            @yield('content')

        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; Hilarioush English Boarding School </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
{{--<!-- /#wrapper -->--}}
{{--<!-- jQuery -->--}}
{{--<script src="{{ asset('dist/backend/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>--}}
{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="{{ asset('dist/backend/bootstrap/dist/js/bootstrap.min.js') }}"></script>--}}
{{--<!-- Sidebar menu plugin JavaScript -->--}}
{{--<script src="{{ asset('dist/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}../"></script>--}}
{{--<!--Slimscroll JavaScript For custom scroll-->--}}
{{--<script src="{{ asset('dist/backend/js/jquery.slimscroll.js') }}"></script>--}}
{{--<!--Wave Effects -->--}}
{{--<script src="{{ asset('dist/backend/js/waves.js') }}"></script>--}}
{{--<!-- Custom Theme JavaScript -->--}}
{{--<script src="{{ asset('dist/backend/js/custom.min.js') }}"></script>--}}
<script src="{{ asset('dist/backend/js/hilarioush.js') }}"></script>
<script src="{{ asset('dist/backend/js/remodal.min.js') }}"></script>

<!-- Events -->
<script>
    $(document).on('opening', '.remodal', function () {
        console.log('opening');
    });

    $(document).on('opened', '.remodal', function () {
        console.log('opened');
    });

    $(document).on('closing', '.remodal', function (e) {
        console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
    });

    $(document).on('closed', '.remodal', function (e) {
        console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
    });

    $(document).on('confirmation', '.remodal', function () {
        console.log('confirmation');
    });

    $(document).on('cancellation', '.remodal', function () {
        console.log('cancellation');
    });

    //  Usage:
    //  $(function() {
    //
    //    // In this case the initialization function returns the already created instance
    //    var inst = $('[data-remodal-id=modal]').remodal();
    //
    //    inst.open();
    //    inst.close();
    //    inst.getState();
    //    inst.destroy();
    //  });

    //  The second way to initialize:
    $('[data-remodal-id=modal2]').remodal({
        modifier: 'with-red-theme'
    });


    $(document).ready(function () {
        $(".required_need").attr('required','required');
    })
</script>
@yield('scripts')

</body>

</html>