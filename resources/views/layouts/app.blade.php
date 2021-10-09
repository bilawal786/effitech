<!doctype html>
<html lang="en">

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
    <title>Synadmin – Bootstrap5 Admin Template</title>
</head>
@yield('content')


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
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="{{asset('front/assets/js/app.js')}}"></script>
</html>
