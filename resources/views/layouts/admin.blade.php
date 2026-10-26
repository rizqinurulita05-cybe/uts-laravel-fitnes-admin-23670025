<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Studio | Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('assets/admin/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet">
    <!-- ================== END core-css ================== -->

    @yield('page-css')
</head>
<body>
    <!-- BEGIN #app -->
    <div id="app" class="app @yield('app-class')">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <div class="desktop-toggler">
                    <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>

                <a href="{{ url('/admin') }}" class="brand-logo">
                    <img src="{{ asset('assets/admin/img/logo.png') }}" class="invert-dark" alt="" height="20">
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <form class="menu-search" method="POST" name="header_search_form">
                    <div class="menu-search-icon"><i class="fa fa-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control" placeholder="Search menu...">
                    </div>
                </form>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
                        <div class="menu-label">3</div>
                    </a>
                </div>
                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="{{ asset('assets/admin/img/user/user.jpg') }}" alt="" class="ms-100 mh-100 rounded-circle">
                        </div>
                        <div class="menu-text">johnsmith@studio.com</div>
                    </a>
                </div>
            </div>
            <!-- END menu -->
        </div>
        <!-- END #header -->

        @hasSection('show_sidebar')
            <!-- BEGIN #sidebar -->
            <div id="sidebar" class="app-sidebar">
                <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                    <div class="menu">
                        <div class="menu-header">Navigation</div>
                        <div class="menu-item">
                            <a href="{{ url('/admin') }}" class="menu-link">
                                <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/admin/calendar') }}" class="menu-link">
                                <span class="menu-icon"><i class="fa fa-calendar"></i></span>
                                <span class="menu-text">Calendar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/admin/form-elements') }}" class="menu-link">
                                <span class="menu-icon"><i class="fa fa-file-alt"></i></span>
                                <span class="menu-text">Form Elements</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/admin/table-plugins') }}" class="menu-link">
                                <span class="menu-icon"><i class="fa fa-table"></i></span>
                                <span class="menu-text">Table Plugins</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/admin/ui-modal-notification') }}" class="menu-link">
                                <span class="menu-icon"><i class="fa fa-heart"></i></span>
                                <span class="menu-text">UI Modals</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ url('/admin/login') }}" class="menu-link">
                                <span class="menu-icon"><i class="fa fa-lock"></i></span>
                                <span class="menu-text">Login Page</span>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
            </div>
            <!-- END #sidebar -->
        @endif

        <!-- BEGIN #content -->
        @yield('content')
        <!-- END #content -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    @yield('page-js')
</body>
</html>
