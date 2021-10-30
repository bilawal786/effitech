<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Connexion</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('user/images/favicon.png')}}">
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .authincation-content {
            background: #ffd223 !important;
            box-shadow: 0 0 35px 0 rgb(154 161 171 / 15%);
            border-radius: 5px;
        }
        .text-white {
            color: #000 !important;
        }
    </style>
</head>
@yield('content')


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('user/vendor/global/global.min.js')}}"></script>
<script src="{{asset('user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('user/js/custom.min.js')}}"></script>
<script src="{{asset('user/js/deznav-init.js')}}"></script>

</body>

</html>
