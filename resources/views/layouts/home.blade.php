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

    @include('layouts/partials/homeSlider')

    @yield('content')

    @include('layouts/partials/footer')
</div>
@include('layouts/partials/javascript')
<script type="text/javascript">
    var tpj = jQuery;
    tpj.noConflict();
    tpj(document).ready(function () {
        // Revolution Slider
        if (tpj.fn.cssOriginal != undefined)
            tpj.fn.css = tpj.fn.cssOriginal;
        tpj('.fullwidthbanner').revolution({
            delay: 9000,
            startwidth: 1200,
            startheight: 400,

            onHoverStop: "on",

            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 3,

            hideThumbs: 0,

            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "round",
            navigationHAlign: "left",
            navigationVAlign: "bottom",
            navigationHOffset: 30,
            navigationVOffset: 30,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            stopAtSlide: -1,
            stopAfterLoops: -1,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            hideSliderAtLimit: 0,

            fullWidth: "on",
            fullScreen: "off",
            fullScreenOffsetContainer: "#topheader-to-offset",

            shadow: 0
        });
        // PrettyPhoto
        tpj("a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'light_square',
            social_tools: false
        });
        // FitVids
        tpj(".responsive-video-wrapper").fitVids();
        // jflickrfeed
        tpj('.flickr-photos-list').jflickrfeed({
            limit: 9,
            qstrings: {
                id: '71865026@N00'
            },
            itemTemplate: '<li><a href="{image_b}"><img src="{image_s}" alt="{title}" /></a></li>'
        });
        // jQuery UItoTop
        tpj().UItoTop({easingType: 'easeOutQuart'});
        // Skin Chooser
        tpj(".color-skin").click(function () {
            var cls = this.id;
            tpj(".color-skin").removeClass("active");
            tpj(this).addClass("active");
            tpj("#main-wrapper").removeClass();
            tpj("#main-wrapper").addClass(cls);
        });
    });
    // jQuery CarouFredSel
    var caroufredsel = function () {
        tpj('#caroufredsel-portfolio-container').carouFredSel({
            responsive: true,
            scroll: 1,
            circular: false,
            infinite: false,
            items: {
                visible: {
                    min: 1,
                    max: 3
                }
            },
            prev: '#portfolio-prev',
            next: '#portfolio-next',
            auto: {
                play: false
            }
        });
        tpj('#caroufredsel-blog-posts-container').carouFredSel({
            responsive: true,
            scroll: 1,
            circular: false,
            infinite: false,
            items: {
                visible: {
                    min: 1,
                    max: 3
                }
            },
            prev: '#blog-posts-prev',
            next: '#blog-posts-next',
            auto: {
                play: false
            }
        });
        tpj('#caroufredsel-testimonials-container').carouFredSel({
            responsive: true,
            scroll: 1,
            circular: false,
            infinite: false,
            items: {
                visible: {
                    min: 1,
                    max: 3
                }
            },
            prev: '#testimonials-prev',
            next: '#testimonials-next',
            auto: {
                play: false
            }
        });
    };
    tpj(window).load(function () {
        caroufredsel();
    });
    tpj(window).resize(function () {
        caroufredsel();
    });
</script>
</body>
</html>