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

        <a href="{{ route('admin.index') }}" class="brand-logo">
            <img src="{{ asset('assets/admin/img/logo.png') }}" class="invert-dark" alt="" height="20">
        </a>
    </div>
    <!-- END brand -->

    <!-- BEGIN menu -->
    <div class="menu">
        <div class="menu-item dropdown">
            <a href="#" data-bs-toggle="dropdown" class="menu-link">
                <div class="menu-img online">
                    <img src="{{ asset('assets/admin/img/user/user.jpg') }}" alt="" class="ms-100 mh-100 rounded-circle">
                </div>
                <div class="menu-text">Admin Studio</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-lg-3">
                <a class="dropdown-item d-flex align-items-center" href="#">Log Out <i class="fa fa-toggle-off fa-fw ms-auto text-body text-opacity-50"></i></a>
            </div>
        </div>
    </div>
    <!-- END menu -->
</div>
<!-- END #header -->
