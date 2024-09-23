<div class="left-side-menu bg-info">

<div class="h-100" data-simplebar>

    <!-- User box -->
    <div class="user-box text-center">
        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
        <div class="dropdown">
            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Nik Patel</a>
            <div class="dropdown-menu user-pro-dropdown">

                <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs me-1"></i><span>Settings</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="help-circle" class="icon-dual icon-xs me-1"></i><span>Support</span>
                </a>
                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                    <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                </a>

            </div>
        </div>
        <p class="text-muted">Admin Head</p>
    </div>

    <!--- Sidemenu -->
    <div class="text-dark" id="sidebar-menu">

        <ul id="side-menu">

            <!-- <li class="menu-title">Navigation</li> -->

            <li >
                <a href="#sidebarDashboard" data-bs-toggle="collapse">
                    <span class="badge bg-success float-end"></span>
                    <i data-feather="home"></i>
                    <span class="text-dark"> Student Information </span>
                    <!-- <span class="menu-arrow"></span> -->
                </a>
                <div class="collapse" id="sidebarDashboard">
  
                </div>
            </li>

      
            <li>
                <a href="#sidebarEmail" data-bs-toggle="collapse">
                    <i data-feather="mail"></i>
                    <span class="text-dark"> Students </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="nav-second-level">
                        <li><a class="text-dark" href="{{route('client')}}">Add Students</a></li>
                        <li><a class="text-dark" href="{{url('/show/client')}}">Manage Students</a></li>
                       
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarProjects" data-bs-toggle="collapse">
                    <i data-feather="briefcase"></i>
                    <span class="text-dark"> Projects </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="nav-second-level">
                        <li><a class="text-dark" href="project-list.html">List</a></li>
                        <li><a class="text-dark" href="project-detail.html">Detail</a></li>
                    </ul>
                </div>
            </li>

            <li>

 
            </li>

            <li>
                <a href="apps-file-manager.html">
                    <i data-feather="file-plus"></i>
                    <span class="text-dark"> File Manager </span>
                </a>
            </li>

            <li class="menu-title mt-2 text-dark">Custom</li>





            <li class="menu-title mt-2 text-dark">Components</li>





            <li>
                <a href="#sidebarMaps" data-bs-toggle="collapse">
                    <i data-feather="map"></i>
                    <span class="text-dark"> Maps </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="nav-second-level">
                        <li><a class="text-dark" href="maps-google.html">Google Maps</a></li>
                        <li><a class="text-dark" href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </div>
            </li>

 
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">