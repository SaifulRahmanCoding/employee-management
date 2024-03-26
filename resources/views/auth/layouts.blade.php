<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @php
            $routeName = Route::currentRouteName();
            echo $routeName ? ucwords(str_replace('.', ' ', $routeName)) : 'Admin';
        @endphp
    </title>
    <link rel="stylesheet" href="{{ asset('modern/src/assets/css/styles.min.css') }}" />
</head>

<body>
    @guest
    @else
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
            data-sidebar-position="fixed" data-header-position="fixed">
            <!-- Sidebar Start -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div>
                    <div class="brand-logo d-flex align-items-center justify-content-between">
                        <h4 class="fw-bolder text-center mt-3">Employee Management</h4>
                        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                            <i class="ti ti-x fs-8"></i>
                        </div>
                    </div>
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                        <ul id="sidebarnav">
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Home</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-layout-dashboard"></i>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">DATA</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('employee.index') }}" aria-expanded="false">
                                    <span>
                                        {{-- <i class="ti ti-user-plus"></i> --}}
                                        <i class="ti ti-user"></i>
                                    </span>
                                    <span class="hide-menu">Employees</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!--  Sidebar End -->
            <!--  Main wrapper -->
            <div class="body-wrapper">
                <!--  Header Start -->
                <header class="app-header shadow-sm">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-xl-none">
                                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                    href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                <li class="nav-item dropdown">
                                    <span style="display: absolute; top:0;" class="me-2">{{ ucwords(Auth::user()->name) }}</span>
                                    <a class="nav-link nav-icon-hover mb-0 p-0 d-inline-block" href="javascript:void(0)"
                                        id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('modern/src/assets/images/profile/user-1.jpg') }}" alt=""
                                            width="35" height="35" class="rounded-circle">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                        aria-labelledby="drop2">
                                        <div class="message-body">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                <input type="submit" value="Logout"
                                                    class="btn btn-outline-primary mx-3 mt-2 d-block w-50">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            @endguest

            @yield('content')
        </div>
    </div>
    </div>
    <script src="{{ asset('modern/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('modern/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('modern/src/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('modern/src/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('modern/src/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('modern/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('modern/src/assets/js/dashboard.js') }}"></script>
</body>

</html>
