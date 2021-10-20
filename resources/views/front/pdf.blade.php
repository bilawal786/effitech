<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Notre catalogue</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Flipbook StyleSheet -->
    <link href="{{asset('dflip/css/dflip.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="{{asset('dflip/css/themify-icons.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12 col-xs-12" style="padding: 0px !important;">
            <div id="flipbookContainer"></div>
        </div>

    </div>
</div>

<!-- jQuery  -->
<script src="{{asset('dflip/js/libs/jquery.min.js')}}" type="text/javascript"></script>
<!-- Flipbook main Js file -->
<script src="{{asset('dflip/js/dflip.min.js')}}" type="text/javascript"></script>
<script>

    //best to start when the document is loaded
    jQuery(document).ready(function () {

//uses source from online(make sure the file has CORS access enabled if used in cross domain)
        var pdf = '{{asset($gs->pdf)}}';

        var options = {
            duration: 800,
            backgroundColor: "#f7b317",
            height: '100vh',
            webgl: true,
            forceFit: true,
            // TRANSLATION text to be displayed
            text: {

                toggleSound: "Activer / désactiver le son",
                toggleThumbnails: "Basculer les vignettes",
                toggleOutline: "Toggle Contour/Signet",
                previousPage: "Page précédente",
                nextPage: "Page suivante",
                toggleFullscreen: "Basculer en plein écran",
                zoomIn: "Agrandir",
                zoomOut: "Dézoomer",
                toggleHelp: "Basculer l'aide",

                singlePageMode: "Mode page unique",
                doublePageMode: "Mode double page",
                downloadPDFFile: "Télécharger le fichier PDF",
                gotoFirstPage: "Aller à la première page",
                gotoLastPage: "Aller à la dernière page",
                play: "Démarrer la lecture automatique",
                pause: "Suspendre la lecture automatique",

                share: "Partager"
            },
        };

        var flipBook = $("#flipbookContainer").flipBook(pdf, options);

    });
</script>
</body>
</html>
