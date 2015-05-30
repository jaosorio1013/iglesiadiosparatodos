<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/ico/favicon.png">
    <title>{{ $data['title'] }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="/assets/UItoTop/css/ui.totop.css" rel="stylesheet">
    <link href="/assets/prettyPhoto/css/prettyPhoto.css" rel="stylesheet">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="/assets/rs-plugin/css/settings.css" media="screen"/>
    <!-- Custom Stylesheet For This Template -->
    <link href="/assets/css/stylesheet.css" rel="stylesheet">
    <link href="/assets/css/skins.css" rel="stylesheet">
    <!-- Font Awesome  -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Montserrat:400,700'
          rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="main-wrapper" class="color-skin-3">
    @include('layouts/partials/nav')

    @include('layouts/partials/pageTitle')

    @yield('content')

    @include('layouts/partials/footer')
</div>
@include('layouts/partials/javascript')
<!-- Custom Script For This Template -->
<script src="/assets/js/script.js"></script>
</body>
</html>