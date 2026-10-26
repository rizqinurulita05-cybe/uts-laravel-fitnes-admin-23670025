<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('admin.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-chart-pie"></i></span>
                    <span class="menu-text">Analytics</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-envelope"></i></span>
                    <span class="menu-text">Email</span>
                </a>
            </div>

            <div class="menu-header">Components</div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-qrcode"></i></span>
                    <span class="menu-text">Widgets</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-wallet"></i></span>
                    <span class="menu-text">POS System</span>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('admin.modal') ? 'active' : '' }}">
                <a href="{{ route('admin.modal') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-heart"></i></span>
                    <span class="menu-text">UI Kits (Modals)</span>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('admin.form_elements') ? 'active' : '' }}">
                <a href="{{ route('admin.form_elements') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-file-alt"></i></span>
                    <span class="menu-text">Forms</span>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('admin.tables') ? 'active' : '' }}">
                <a href="{{ route('admin.tables') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-table"></i></span>
                    <span class="menu-text">Tables</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-chart-bar"></i></span>
                    <span class="menu-text">Charts</span>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('admin.calendar') ? 'active' : '' }}">
                <a href="{{ route('admin.calendar') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-calendar"></i></span>
                    <span class="menu-text">Calendar</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-map"></i></span>
                    <span class="menu-text">Map</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-code-branch"></i></span>
                    <span class="menu-text">Layout</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-globe"></i></span>
                    <span class="menu-text">Pages</span>
                </a>
            </div>
            <div class="menu-item {{ request()->routeIs('landing.index') ? 'active' : '' }}">
                <a href="{{ route('landing.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-paper-plane"></i></span>
                    <span class="menu-text">Landing Page</span>
                </a>
            </div>

            <div class="menu-header">Users</div>
            <div class="menu-item {{ request()->routeIs('admin.login') ? 'active' : '' }}">
                <a href="{{ route('admin.login') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-lock"></i></span>
                    <span class="menu-text">Login Page</span>
                </a>
            </div>
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<!-- END #sidebar -->
