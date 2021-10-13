<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Effitech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BrixalBuilding is the most complete constructon and building website template">
    <meta name="keywords" content="construction,multipurpose,onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content="BrixalBuilding">

<?php
$gs = App\Content::find(1);
?>
<!--[if lt IE 9]>
    <script src="{{asset('web/js/html5shiv.js')}}"></script>
    <![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web/css/jpreloader.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{asset('web/css/bg.css')}}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{asset('web/css/color.css')}}" type="text/css" id="colors">
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/revolution/css/settings.css')}}">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/revolution/css/navigation.css')}}">
    <style>
        #explore-1.side-bg .background-image {background:url({{asset($gs->timage)}}) top;}

    </style>
</head>
<body id="homepage" class="side-content side-layout">
<div id="wrapper">
    <!-- header begin -->
    <header>
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>Collins Street West, Victoria 8007 Australia </div>
                        <div class="col"><span class="id-color"><i class="fa fa-clock-o"></i></span>Monday - Friday 08:00-16:00</div>
                        <div class="col"><span class="id-color"><i class="fa fa-phone"></i></span>1800.899.900</div>
                        <div class="col">
                            <div id="lang-selector" class="dropdown">
                                <a href="#" class="btn-selector">English</a>
                                <ul>
                                    <li class="active"><a href="#">English</a></li>
                                    <li><a href="#">France</a></li>
                                    <li><a href="#">Germany</a></li>
                                    <li><a href="#">Spain</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-right">
                        <!-- social icons -->
                        <div class="col social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        <!-- social icons close -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="{{route('front.index')}}">
                            <img class="logo" src="{{asset('local/logo.png')}}" alt="">
                            <img class="logo-2" src="{{asset('local/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->

                    <!-- mainmenu begin -->
                    <nav>
                        <ul id="mainmenu">
                            <li><a href="{{route('front.index')}}">Accueil</a></li>
                            <li><a href="{{route('front.index')}}#section-features-2">Services</a></li>
                            <li><a href="{{route('front.index')}}#explore-1">Témoignage</a></li>
                            @guest
                            <li><a href="{{route('login')}}">Connexion client</a></li>
                            @endguest
                            @auth
                                <li><a href="{{route('client.dashboard')}}">Espace Client</a></li>
                            @endauth
                            <li><a href="{{route('front.contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mainmenu close -->

                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
@yield('content')


<!-- footer begin -->
    <footer>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        Copyright © 2021. IKAE DIGITAL.
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer close -->

    <a href="#" id="back-to-top"></a>
</div>



<!-- Javascript Files
================================================== -->
<script src="{{asset('web/js/jquery.min.js')}}"></script>
<script src="{{asset('web/js/jpreLoader.js')}}"></script>
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('web/js/easing.js')}}"></script>
<script src="{{asset('web/js/owl.carousel.js')}}"></script>
<script src="{{asset('web/js/jquery.countTo.js')}}"></script>
<script src="{{asset('web/js/validation.js')}}"></script>
<script src="{{asset('web/js/wow.min.js')}}"></script>
<script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('web/js/enquire.min.js')}}"></script>
<script src="{{asset('web/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('web/js/designesia.js')}}"></script>

<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="{{asset('web/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>

<!-- RS5.0 Extensions Files -->
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>

<script>
    jQuery(document).ready(function () {
        jQuery("#revolution-slider").revolution({
            sliderType: "standard",
            delay: 3500,
            navigation: {
                arrows: { enable: true }
            },
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            },
            spinner: "off",
            gridwidth: 1140,
            gridheight: 640,
            disableProgressBar: "on"
        });
    });
</script>


</body>
</html>
