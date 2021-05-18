<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Clock css -->
        <link href="/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
        <!-- Plugins css -->
        <link href="/assets/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
        <link href="/assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="/assets/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
        <link href="/assets/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <link href="/assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="/img/Droppoint-logo.png" alt="logo-small" class="logo-sm">
                        </span>

                    </a>
                </div>

                <ul class="list-unstyled topbar-nav float-right mb-0">



                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="/assets/img/{{ Auth::user()->img }}" alt="profile-user" class="rounded-circle" />
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>

                            <div class="dropdown-divider"></div> -->

                            <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted mr-2"></i> logout</a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                       </form>

                        </div>
                    </li>
                </ul>

                <ul class="list-unstyled topbar-nav mb-0">

                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="mdi mdi-menu nav-icon"></i>
                        </button>
                    </li>

                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>

                </ul>

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">
                    <img src="/assets/img/{{ Auth::user()->img }}" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light"> {{ Auth::user()->full_name }}</h5>

<!--
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                        </ul> -->
                    </div>
                </div>

                <!-- Page-Title -->
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-google-pages mr-2"></i>Starter</h4>
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Starter</li>
                                </ol>
                            </div> -->
                        <!-- </div><!--end page title box--> -->
                    <!-- </div><!--end col--> -->
                <!-- </div><!--end row--> -->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->

        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                <div class="left-sidenav">

                    <ul class="metismenu left-sidenav-menu" id="side-nav">

                        <li class="menu-title">Main</li>

                        <li>
                            <a href="/item"><i class="mdi mdi-monitor"></i><span>items</span></a>

                        </li>
                        <li>
                            <a href="/service"><i class="mdi mdi-monitor"></i><span>services</span></a>

                        </li>
                        <li>
                            <a href="/service_cat"><i class="mdi mdi-monitor"></i><span>service Categoties</span></a>

                        </li>
                        <li>
                            <a href="/place_type"><i class="mdi mdi-monitor"></i><span>place type</span></a>

                        </li>
                        <li>
                            <a href="/service_provider"><i class="mdi mdi-monitor"></i><span>service providers</span></a>

                        </li>
                        <li>
                            <a href="/users"><i class="mdi mdi-monitor"></i><span>users</span></a>

                        </li>



                    </ul>
                </div>
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid">
                      @if(Session::has('flash_message'))
            <div class="container">
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include ('errors.list') {{-- Including error file --}}
            </div>
        </div>
                          @yield('content')
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2021
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/metisMenu.min.js"></script>
        <script src="/assets/js/waves.min.js"></script>
        <script src="/assets/js/jquery.slimscroll.min.js"></script>

        <!-- Plugins js -->
        <script src="/assets/plugins/moment/moment.js"></script>
        <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="/assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        <script src="/assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="/assets/plugins/clockpicker/jquery-clockpicker.min.js"></script>
        <script src="/assets/plugins/colorpicker/jquery-asColor.js"></script>
        <script src="/assets/plugins/colorpicker/jquery-asGradient.js"></script>
        <script src="/assets/plugins/colorpicker/jquery-asColorPicker.min.js"></script>
        <script src="/assets/plugins/select2/select2.min.js"></script>

        <script src="/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="/assets/pages/jquery.clock-img.init.js"></script>
        <script src="/assets/pages/jquery.forms-advanced.js"></script>

        <script src="/assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="/assets/pages/jquery.form-upload.init.js"></script>


        <!-- App js -->
        <script src="/assets/js/app.js"></script>

    </body>
</html>
