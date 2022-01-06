<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{asset('project_panel/assets/images/user/avatar-2.jpg')}}" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">{{auth()->user()->name}} </div>
                    </div>
                </div>

            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>

                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Services</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('add_services')}}">Add Services</a></li>
                        <li><a href="{{route('show_services')}}">My Services</a></li>
                        <li><a href="{{route('category')}}">Service Category</a></li>

                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Orders</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('pending_orders')}}">Pending Orders</a></li>


                    </ul>
                </li>
            </ul>



        </div>
    </div>
</nav>
