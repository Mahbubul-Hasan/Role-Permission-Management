<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- profile info & task notification -->
        <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
                <li class="dropdown">
                    <img class="rounded-circle" width="30" src="https://ui-avatars.com/api/?name={{ Auth::guard('admin')->user()->name }}&background=random" alt="{{ Auth::guard('admin')->user()->name }}" data-toggle="dropdown">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
