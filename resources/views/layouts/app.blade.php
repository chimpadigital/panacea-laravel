<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrador - Panacea Hotel Boutique</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" />

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap_limitless.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/slinky.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/fab.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{ asset('assets/js/app.js')}}"></script>
    <script src="{{ asset('global_assets/js/demo_pages/dashboard.js')}}"></script>
    <!-- /theme JS files -->

    @yield('head')

</head>

<body>

    <!-- Page header -->
    <div class="page-header page-header-dark">

        <!-- Main navbar -->
        <div class="navbar navbar-expand-md navbar-dark border-transparent">
            <div class="navbar-brand wmin-0 mr-5">
                <a href="{{ route('home') }}" class="d-inline-block">
                    <img style=" min-height: 50px;" src="{{ asset('img/logo.png') }}" alt="">
                </a>
            </div>

            <div class="d-md-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                    <i class="icon-tree5"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-mobile">
    
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown dropdown-user">
                        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                            <span>{{ Auth::user()->name }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->

    </div>
    <!-- /page header -->
        

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
                
                @yield('content')

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Footer -->
    <div class="navbar navbar-expand-lg navbar-light">
        
    </div>
    <!-- /footer -->
    @yield('scripts')
</body>
</html>
