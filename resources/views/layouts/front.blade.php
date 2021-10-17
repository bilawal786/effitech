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

        /* CSS Multiple Whatsapp Chat */
        .whatsapp-name {
            font-size: 16px;
            font-weight: 600;
            padding-bottom: 0;
            margin-bottom: 0;
            line-height: 0.5;
        }

        #whatsapp-chat {
            box-sizing: border-box !important;

            outline: none !important;
            position: fixed;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
            bottom: 90px;
            right: 30px;
            overflow: hidden;
            z-index: 99;
            animation-name: showchat;
            animation-duration: 1s;
            transform: scale(1);
        }
        a.blantershow-chat {
            /*   background: #009688; */
            background: #fff;
            color: #404040;
            position: fixed;
            display: flex;
            font-weight: 400;
            justify-content: space-between;
            z-index: 98;
            bottom: 20px;
            right: 30px;
            font-size: 15px;
            padding: 10px 20px;
            border-radius: 30px;
            box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
        }
        a.blantershow-chat svg {
            transform: scale(1.2);
            margin: 0 10px 0 0;
        }
        .header-chat {
            /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
            background: #009688;
            background: #095e54;
            color: #fff;
            padding: 20px;
        }
        .header-chat h3 {
            margin: 0 0 10px;
        }
        .header-chat p {
            font-size: 14px;
            line-height: 1.7;
            margin: 0;
        }
        .info-avatar {
            position: relative;
        }
        .info-avatar img {
            border-radius: 100%;
            width: 50px;
            float: left;
            margin: 0 10px 0 0;
        }

        a.informasi {
            padding: 20px;
            display: block;
            overflow: hidden;
            animation-name: showhide;
            animation-duration: 0.5s;
        }
        a.informasi:hover {
            background: #f1f1f1;
        }
        .info-chat span {
            display: block;
        }
        #get-label,
        span.chat-label {
            font-size: 12px;
            color: #888;
        }
        #get-nama,
        span.chat-nama {
            margin: 5px 0 0;
            font-size: 15px;
            font-weight: 700;
            color: #222;
        }
        #get-label,
        #get-nama {
            color: #fff;
        }
        span.my-number {
            display: none;
        }
        /* .blanter-msg {
          color: #444;
          padding: 20px;
          font-size: 12.5px;
          text-align: center;
          border-top: 1px solid #ddd;
        } */
        textarea#chat-input {
            border: none;
            font-family: "Arial", sans-serif;
            width: 100%;
            height: 50px;
            outline: none;
            resize: none;
            padding: 10px;
            font-size: 14px;
        }

        a#send-it {
            width: 30px;
            font-weight: 700;
            padding: 10px 10px 0;
            background:#eee;
            border-radius: 10px;

        svg {
            fill:#a6a6a6;
            height: 24px;
            width: 24px;
        }
        }

        .first-msg {
            background: transparent;
            padding: 30px;
            text-align: center;
        & span {
              background: #e2e2e2;
              color: #333;
              font-size: 14.2px;
              line-height: 1.7;
              border-radius: 10px;
              padding: 15px 20px;
              display: inline-block;
          }
        }

        .start-chat .blanter-msg {
            display: flex;
        }
        #get-number {
            display: none;
        }
        a.close-chat {
            position: absolute;
            top: 5px;
            right: 15px;
            color: #fff;
            font-size: 30px;

        }

        @keyframes ZpjSY{
            0% {
                background-color: rgb(182, 181, 186);
            }
            15% {
                background-color: rgb(17, 17, 17);
            }
            25% {
                background-color: rgb(182, 181, 186);
            }
        }

        @keyframes hPhMsj {
            15% {
                background-color: rgb(182, 181, 186);
            }
            25% {
                background-color: rgb(17, 17, 17);
            }
            35% {
                background-color: rgb(182, 181, 186);
            }
        }

        @keyframes iUMejp {
            25% {
                background-color: rgb(182, 181, 186);
            }
            35% {
                background-color: rgb(17, 17, 17);
            }
            45% {
                background-color: rgb(182, 181, 186);
            }
        }


        @keyframes showhide {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
        }
        @keyframes showchat {
            from {
                transform: scale(0);
                opacity: 0;
            }
        }
        @media screen and (max-width: 480px) {
            #whatsapp-chat {
                width: auto;
                left: 5%;
                right: 5%;
                font-size: 80%;
            }
        }
        .hide {
            display: none;
            animation-name: showhide;
            animation-duration: 0.5s;
            transform: scale(1);
            opacity: 1;
        }
        .show {
            display: block;
            animation-name: showhide;
            animation-duration: 0.5s;
            transform: scale(1);
            opacity: 1;
        }

        .whatsapp-message-container {
            display: flex;
            z-index: 1;
        }

        .whatsapp-message {
            padding: 7px 14px 6px;
            background-color: rgb(255, 255, 255);
            border-radius: 0px 8px 8px;
            position: relative;
            transition: all 0.3s ease 0s;
            opacity: 0;
            transform-origin: center top 0px;
            z-index: 2;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
            margin-top: 4px;
            margin-left: -54px;
            max-width: calc(100% - 66px);
        }

        .whatsapp-chat-body {
            padding: 20px 20px 20px 10px;
            background-color: rgb(230, 221, 212);
            position: relative;
        &::before {
             display: block;
             position: absolute;
             content: "";
             left: 0px;
             top: 0px;
             height: 100%;
             width: 100%;
             z-index: 0;
             opacity: 0.08;
             background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
         // background-image: url(https://res.cloudinary.com/eventbree/image/upload/v1575782560/Widgets/whatsappbg_opt.jpg);
         }
        }

        .dAbFpq {
            display: flex;
            z-index: 1;
        }

        .eJJEeC {
            background-color: rgb(255, 255, 255);
            width: 52.5px;
            height: 32px;
            border-radius: 16px;
            display: flex;
            -moz-box-pack: center;
            justify-content: center;
            -moz-box-align: center;
            align-items: center;
            margin-left: 10px;
            opacity: 0;
            transition: all 0.1s ease 0s;
            z-index: 1;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
        }

        .hFENyl {
            position: relative;
            display: flex;
        }

        .ixsrax {
            height: 5px;
            width: 5px;
            margin: 0px 2px;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 0px;
            background-color: rgb(158, 157, 162);
            animation-name: ZpjSY;
        }

        .dRvxoz {

            height: 5px;
            width: 5px;
            margin: 0px 2px;
            background-color: rgb(182, 181, 186);
            border-radius: 50%;
            display: inline-block;
            position: relative;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            top: 0px;
            animation-name: hPhMsj;
        }

        .kAZgZq {
            padding: 7px 14px 6px;
            background-color: rgb(255, 255, 255);
            border-radius: 0px 8px 8px;
            position: relative;
            transition: all 0.3s ease 0s;
            opacity: 0;
            transform-origin: center top 0px;
            z-index: 2;
            box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
            margin-top: 4px;
            margin-left: -54px;
            max-width: calc(100% - 66px);
        &::before {
             position: absolute;
             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
             background-position: 50% 50%;
             background-repeat: no-repeat;
             background-size: contain;
             content: "";
             top: 0px;
             left: -12px;
             width: 12px;
             height: 19px;
         }
        }

        .bMIBDo {
            font-size: 13px;
            font-weight: 700;
            line-height: 18px;
            color: rgba(0, 0, 0, 0.4);
        }

        .iSpIQi {
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            color: rgb(17, 17, 17);
        }

        .iSpIQi {
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            color: rgb(17, 17, 17);
        }

        .cqCDVm {
            text-align: right;
            margin-top: 4px;
            font-size: 12px;
            line-height: 16px;
            color:
                rgba(17, 17, 17, 0.5);
            margin-right: -8px;
            margin-bottom: -4px;
        }
        .de_count {
            text-align: center;
            padding: 10px 0 10px 0;
            background: none;
            background-size: auto;
        }
        .container .col-md-3 {
            margin-bottom: 0px;
        }
    </style>
</head>
<div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
        <div class='head-home'>
            <div class='info-avatar'><img src='{{asset($gs->logo)}}' /></div>
            <p><span class="whatsapp-name">Effitech</span><br><small>Répond généralement dans l'heure</small></p>

        </div>
        <div class='get-new hide'>
            <div id='get-label'></div>
            <div id='get-nama'></div>
        </div>
    </div>
    <div class='home-chat'>

    </div>
    <div class='start-chat'>
        <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
            <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
                <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
                    <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
                    </div>
                </div>
                <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
                    <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">Effitech</div>
                    <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Salut 👋<br><br>Comment puis-je t'aider?</div>
                    {{--                    <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>--}}
                </div>
            </div>
        </div>

        <div class='blanter-msg'>
            <textarea id='chat-input' placeholder='Écrire un message' maxlength='120' row='1'></textarea>
            <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

        </div>
    </div>
    <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg>Discuter</a>
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
                            <img class="logo" src="{{asset($gs->logo)}}" alt="">
                            <img class="logo-2" src="{{asset($gs->logo)}}" alt="">
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
                            <li><a href="{{route('front.renovation')}}">Rénovation</a></li>
                            <li><a href="{{route('front.construction')}}">Construction</a></li>
                            <li><a href="{{route('front.offers')}}">Les Offres</a></li>
                            <li><a href="{{route('front.gallery')}}">Gallerie</a></li>
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
                            <a href="{{$gs->facebook}}"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="{{$gs->instagram}}"><i class="fa fa-instagram fa-lg"></i></a>
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
<script>
    /* Whatsapp Chat Widget by www.bloggermix.com */
    $(document).on("click", "#send-it", function() {
        var a = document.getElementById("chat-input");
        if ("" != a.value) {
            var b = $("#get-number").text(),
                c = document.getElementById("chat-input").value,
                d = "https://web.whatsapp.com/send",
                e = b,
                f = "&text=" + c;
            if (
                /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                    navigator.userAgent
                )
            )
                var d = "whatsapp://send";
            var g = d + "?phone=+590690618825" + e + f;
            window.open(g, "_blank");
        }
    }),
        $(document).on("click", ".informasi", function() {
            (document.getElementById("get-number").innerHTML = $(this)
                .children(".my-number")
                .text()),
                $(".start-chat,.get-new")
                    .addClass("show")
                    .removeClass("hide"),
                $(".home-chat,.head-home")
                    .addClass("hide")
                    .removeClass("show"),
                (document.getElementById("get-nama").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-nama")
                    .text()),
                (document.getElementById("get-label").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-label")
                    .text());
        }),
        $(document).on("click", ".close-chat", function() {
            $("#whatsapp-chat")
                .addClass("hide")
                .removeClass("show");
        }),
        $(document).on("click", ".blantershow-chat", function() {
            $("#whatsapp-chat")
                .addClass("show")
                .removeClass("hide");
        });

</script>
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
