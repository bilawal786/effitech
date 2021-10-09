<!doctype html>
<html lang="en" class="dark-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('front/assets/images/favicon-32x32.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{asset('front/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/plugins/highcharts/css/highcharts.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('front/assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('front/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('front/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('front/assets/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/dark-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/assets/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/assets/css/header-colors.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <title>EFFITECH</title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{asset('local/logo.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <a href="{{route('home')}}"> <h4 class="logo-text">EFFITECH</h4></a>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            @if(Auth::user()->role == 0)
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home'></i>
                    </div>
                    <div class="menu-title">Clients</div>
                </a>
                <ul>
                    <li> <a href="{{route('client.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Clients</a>
                    </li>
                    <li> <a href="{{route('client.professional')}}"><i class="bx bx-right-arrow-alt"></i>Professionel</a>
                    </li>
                    <li> <a href="{{route('client.particular')}}"><i class="bx bx-right-arrow-alt"></i>Particuler</a>
                    </li>
                </ul>
            </li>
<!--            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-spa'></i>
                    </div>
                    <div class="menu-title">Chantier</div>
                </a>
                <ul>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Ajouter Clients</a>
                    </li>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Professionel</a>
                    </li>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Particuler</a>
                    </li>
                </ul>
            </li>-->
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-command' ></i>
                    </div>
                    <div class="menu-title">Sous Traitant</div>
                </a>
                <ul>
                    <li> <a href="{{route('traitant.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Sous Traitant</a>
                    </li>
                    <li> <a href="{{route('traitant.index')}}"><i class="bx bx-right-arrow-alt"></i>Tous les Sous Traitant</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-atom' ></i>
                    </div>
                    <div class="menu-title">Commerciaux</div>
                </a>
                <ul>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Ajouter un commercial</a>
                    </li>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Factures</a>
                    </li>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Plaquette des prix pdf</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-video-recording' ></i>
                    </div>
                    <div class="menu-title">Conducteur de Travaux</div>
                </a>
                <ul>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Ajouter Conducteur de Travaux</a>
                    </li>
                    <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Factures</a>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="top-menu-left d-none d-lg-block">
                    @if(Auth::user()->role == 0)
                     <h5>Bienvenue dans le tableau de bord d'administration</h5>
                    @elseif(Auth::user()->role == 1)
                        <h5>Bienvenue dans le tableau de bord client</h5>
                    @elseif(Auth::user()->role == 2)
                        <h5>Bienvenue dans le tableau de bord traitant</h5>
                    @elseif(Auth::user()->role == 3)
                        <h5>Bienvenue dans le tableau de bord commercial</h5>
                    @elseif(Auth::user()->role == 4)
                        <h5>Bienvenue dans le tableau de bord conducteur</h5>
                    @endif
                </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="javascript:;">	<i class='bx bx-search'></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{Auth::user()->image}}" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{Auth::user()->fname}} {{Auth::user()->lname}}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profil</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Mot de passe</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                               class="dropdown-item">
                                <i class="bx bx-log-out-circle"></i>
                                <span>
                                    Sortir
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->

    @yield('content')


<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Alimenté par <a href="">Ikae Digital</a> © 2021. </p>
    </footer>
</div>
<!--end wrapper-->
<!--start switcher-->

<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('front/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('front/assets/plugins/highcharts/js/highcharts.js')}}"></script>
<script src="{{asset('front/assets/plugins/highcharts/js/exporting.js')}}"></script>
<script src="{{asset('front/assets/plugins/highcharts/js/variable-pie.js')}}"></script>
<script src="{{asset('front/assets/plugins/highcharts/js/export-data.js')}}"></script>
<script src="{{asset('front/assets/plugins/highcharts/js/accessibility.js')}}"></script>
<script src="{{asset('front/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('front/assets/js/index2.js')}}"></script>
<!--app JS-->
<script src="{{asset('front/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('front/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "sProcessing": "Traitement en cours ...",
                "sLengthMenu": "Spectacle _MENU_ entrées",
                // "sZeroRecords": "Aucun résultat trouvé",
                "sEmptyTable": "Aucune donnée disponible",
                // "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
                "sInfoEmpty": "Aucune ligne affichée",
                "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
                "sInfoPostFix": "",
                "sSearch": "Rechercher:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Chargement...",
                "oPaginate": {
                    "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
                },
                "oAria": {
                    "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
        });
    } );
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>
<script>
    new PerfectScrollbar('.customers-list');
    new PerfectScrollbar('.store-metrics');
    new PerfectScrollbar('.product-list');
</script>
</body>

</html>
