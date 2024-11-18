
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <!-- Include any necessary head elements here -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/theme.css') }}">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.css">
    <link rel="stylesheet" href="{{asset('charts/css/flowbite.min.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/feather-icons"></script>

</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <a class="navbar-brand">
                    <img src="{{ asset('admin_assets/images/brand/logo/logo.svg') }}" alt="" />
                </a>
                <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="/admin">
            <i class="now-ui-icons design_app"></i>
            <p>Accueil</p>
        </a>
    </li>
    <li class="nav-item {{ request()->is('actualites') ? 'active' : '' }}">
        <a class="nav-link" href="/actualites">
            <i class="now-ui-icons media-1_album"></i>
            <p>Actualités</p>
        </a>
    </li>
    <li class="nav-item {{ request()->is('participations') ? 'active' : '' }}">
        <a class="nav-link" href="/participations">
            <i class="now-ui-icons education_paper"></i>
            <p>Participations JEA</p>
        </a>
    </li>
    <li class="nav-item {{ request()->is('benevolats') ? 'active' : '' }}">
        <a class="nav-link" href="/benevolats">
            <i class="now-ui-icons ui-2_favourite-28"></i>
            <p>Bénévolats</p>
        </a>
    </li>
    <li class="nav-item {{ request()->is('partenaires') ? 'active' : '' }}">
        <a class="nav-link" href="/partenaires">
            <i class="now-ui-icons users_single-02"></i>
            <p>Partenaires</p>
        </a>
    </li>
    <li class="nav-item {{ request()->is('messages') ? 'active' : '' }}">
        <a class="nav-link" href="/messages">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>Messages</p>
        </a>
    </li>
    <li class="nav-item {{ request()->is('commentaires') ? 'active' : '' }}">
        <a class="nav-link" href="/commentaires">
            <i class="now-ui-icons ui-2_chat-round"></i>
            <p>Commentaires</p>
        </a>
    </li>
                </ul>
            </div>
        </nav>
        
        <div id="page-content">
            <div class="header">
                <nav class="navbar-classic navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
                    <div class="ms-lg-3 d-none d-md-none d-lg-block">
                        <form class="d-flex align-items-center">
                            <input type="search" class="form-control" placeholder="Search" />
                        </form>
                    </div>
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-xs" data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="dropdownNotification">
                                <div>
                                    <div class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#" class="text-muted">
                                            <span><i class="me-1 icon-xxs" data-feather="settings"></i></span>
                                        </a>
                                    </div>
                                    <ul class="list-group list-group-flush notification-list-scroll">
                                        <!-- Example notification -->
                                        <li class="list-group-item bg-light">
                                            <a href="#" class="text-muted">
                                                <h5 class="mb-1">Sample Notification</h5>
                                                <p class="mb-0">This is a sample notification message.</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#" class="text-inherit fw-semi-bold">View all Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}" alt="avatar" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">
                                    <div class="lh-1">
                                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                        <a href="#" class="text-inherit fs-6">Role: {{ ucfirst(Auth::user()->role) }}</a>
                                    </div>
                                    <div class="dropdown-divider mt-3 mb-2"></div>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <!-- Main content -->
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
  <!--   Core JS Files   -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script src="{{asset('charts/css/apexcharts.js')}}"></script>

<script src="{{asset('charts/css/flowbite.min.js')}}"></script>

    <!-- Include any necessary scripts here -->
    <script src="{{ asset('admin_assets/js/script.js') }}"></script> <!-- Adjust this path as needed -->
    <script>
    feather.replace();
</script>
@yield('scripts')

</body>

</html>
