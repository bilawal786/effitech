<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tableau de bord</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('user/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('user/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('user/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

    <link href="{{asset('user/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{route('client.dashboard')}}" class="brand-logo">
            <img class="logo-abbr" src="{{asset('local/logo.png')}}" alt="">
            <img class="logo-compact" src="{{asset('local/logo.png')}}" alt="">
            <img class="brand-title" src="{{asset('local/logo.png')}}" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Tableau de bord
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item">
                            <div class="input-group search-area d-xl-inline-flex d-none">
                                <div class="input-group-append">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cherche ici...">
                            </div>
                        </li>
<!--                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#0B2A97"/>
                                </svg>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="dropdown-menu rounded dropdown-menu-right">
                                <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2">
                                                    <img alt="image" width="50" src="{{asset('user/images/avatar/1.jpg')}}">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                            </div>
                        </li>-->
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                <img src="{{asset(Auth::user()->image)}}" width="20" alt=""/>
                                <div class="header-info">
                                    <span class="text-black"><strong>{{Auth::user()->fname}} {{Auth::user()->lname}}</strong></span>
                                    <p class="fs-12 mb-0">
                                        Client
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('client.profile')}}" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ml-2">Profil </span>
                                </a>
                                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                   class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">
                                    Sortir
                                    </span>
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
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a class="ai-icon" href="{{route('client.dashboard')}}" aria-expanded="false">
                        <i class="flaticon-381-home"></i>
                        <span class="nav-text">Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Devis</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('client.quotes.index')}}">Toutes les Devis</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Chantier</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('client.site.index')}}">Toutes les Chantier</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Problèmes</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('problem.create')}}">Ajouter un nouveau problème</a></li>
                        <li><a href="{{route('problem.index')}}">Afficher tous les problèmes</a></li>
                    </ul>
                </li>
<!--                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Factures</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Toutes les factures</a></li>
                    </ul>
                </li>-->

            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
@yield('content')


<!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Conçu et propulsé par <a href="#" target="_blank">Ikae Digital</a> 2021</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('user/vendor/global/global.min.js')}}"></script>
<script src="{{asset('user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('user/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('user/js/custom.min.js')}}"></script>
<script src="{{asset('user/js/deznav-init.js')}}"></script>
<script src="{{asset('user/vendor/owl-carousel/owl.carousel.js')}}"></script>

<!-- Chart piety plugin files -->
<script src="{{asset('user/vendor/peity/jquery.peity.min.js')}}"></script>

<!-- Apex Chart -->
<script src="{{asset('user/vendor/apexchart/apexchart.js')}}"></script>

<!-- Dashboard 1 -->
<script src="{{asset('user/js/dashboard/dashboard-1.js')}}"></script>

<!-- Datatable -->
<script src="{{asset('user/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('user/js/plugins-init/datatables.init.js')}}"></script>
<script>
    function carouselReview(){
        /*  testimonial one function by = owl.carousel.js */
        jQuery('.testimonial-one').owlCarousel({
            loop:true,
            autoplay:true,
            margin:30,
            nav:false,
            dots: false,
            left:true,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            responsive:{
                0:{
                    items:1
                },
                484:{
                    items:2
                },
                882:{
                    items:3
                },
                1200:{
                    items:2
                },

                1540:{
                    items:3
                },
                1740:{
                    items:4
                }
            }
        })
    }
    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000);
    });
</script>
<script>
    function categorychange(elem){
        $('.subcategory').html('<option value="">Sélectionnez une sous-catégorie</option>');
        event.preventDefault();
        let id = elem.value;
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{route('fetchsubcategory')}}",
            type:"POST",
            data:{
                id:id,
                _token: _token
            },
            success:function(response){
                $.each(response, function(i, item) {
                    $('.subcategory').append('<option value="'+item.id+'">'+item.name+'</option>');
                });
            },
        });
    }
</script>
</body>
</html>
