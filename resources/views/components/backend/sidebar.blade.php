<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('/') }}assets/images/icon/logo.png" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ (request()->routeIs('admin.dashboard')) ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="ti-dashboard"></i><span>dashboard</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Rols & Permissions</span></a>
                        <ul class="collapse">
                            <li class="{{ (request()->routeIs('admin.roles.create')) ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Add Role</a></li>
                            <li class="{{ (request()->routeIs(['admin.roles.index', 'admin.roles.edit'])) ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">Role List</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
