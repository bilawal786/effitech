<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dashboard</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{asset('provider/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('provider/assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('provider/assets/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('provider/assets/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">

    <link href="{{asset('provider/assets/plugins/DataTables/datatables.min.css')}}" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="{{asset('provider/assets/css/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('provider/assets/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .page-header .navbar .navbar-brand {
            margin-right: 0;
            background: url({{asset('local/logo.png')}}) center center no-repeat;
            background-size: auto;
            background-size: cover;
            width: 100px;
            height: 40px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="page-container">
    <div class="page-header">
        <nav class="navbar navbar-expand-lg d-flex justify-content-between">
            <div class="" id="navbarNav">
                <ul class="navbar-nav" id="leftNav">
                    <li class="nav-item">
                        <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Auth::user()->fname}} {{Auth::user()->lname}}</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="" id="headerNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                            <form>
                                <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                            </form>
                        </div>
                    </li>
<!--                    <li class="nav-item dropdown">
                        <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3</a>
                        <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                            <h6 class="dropdown-header">Notifications</h6>
                            <a href="#">
                                <div class="header-notif">
                                    <div class="notif-image">
                                  <span class="notification-badge bg-info text-white">
                                    <i class="fas fa-bullhorn"></i>
                                  </span>
                                    </div>
                                    <div class="notif-text">
                                        <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                        <small>19:00</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset(Auth::user()->image)}}" alt=""></a>
                        <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                            <a class="dropdown-item" href="{{route('provider.profile')}}"><i data-feather="user"></i>Profi</a>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                               class="dropdown-item">
                                <i data-feather="log-out"></i>
                                Sortir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="page-sidebar">
        <ul class="list-unstyled accordion-menu">
            <li class="sidebar-title">
                Principal
            </li>
            <li class="active-page">
                <a href="{{route('provider.dashboard')}}"><i data-feather="home"></i>Tableau de bord</a>
            </li>
            <li class="sidebar-title">
                Apps
            </li>
            @if(Auth::user()->role == 2 || Auth::user()->role == 3)
                <li>
                    <a href="{{route('provider.site.index')}}"><i data-feather="message-circle"></i>Chantier</a>
                </li>
                <li>
                    <a href="{{route('provider.site.complete')}}"><i data-feather="layers"></i>Étapes complètes</a>
                </li>
                <li>
                    <a href="{{route('provider.problems.assign')}}"><i data-feather="inbox"></i>Nouveau Problèmes</a>
                </li>
                <li>
                    <a href="{{route('provider.problems.complete')}}"><i data-feather="user"></i>Problèmes complets</a>
                </li>
            @elseif(Auth::user()->role == 4)

            @endif
<!--            <li>
                <a href="calendar.html"><i data-feather="calendar"></i>Calendar</a>
            </li>
            <li>
                <a href="social.html"><i data-feather="user"></i>Social</a>
            </li><li>
                <a href="file-manager.html"><i data-feather="message-circle"></i>File Manager</a>
            </li>-->

        </ul>
    </div>
    @yield('content')
</div>

<!-- Javascripts -->
<script src="{{asset('provider/assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="{{asset('provider/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="{{asset('provider/assets/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('provider/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('provider/assets/js/pages/dashboard.js')}}"></script>
<script src="{{asset('provider/assets/plugins/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('provider/assets/js/main.min.js')}}"></script>
<script src="{{asset('provider/assets/js/pages/datatables.js')}}"></script>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>
</body>
</html>
