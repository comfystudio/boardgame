<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
        <meta name="twitter:widgets:theme" content="light">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@if(isset($meta['description'])){{strip_tags($meta['description'])}}@endif" />
        <meta name="author" content="ComfyStudio.com"/>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121558066-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-121558066-1');
        </script>

         <!--facebook-->
        @if(isset($facebook['og:title']))<meta property="og:title" content="{{$facebook['og:title']}}">@endif
        @if(isset($facebook['og:url']))<meta property="og:url" content="{{Request::url()}}">@endif
        @if(isset($facebook['og:description']))<meta property="og:description" content="{{strip_tags($facebook['og:description'])}}">@endif
        <meta property="og:type" content="Website">
        @if(isset($facebook['og:image']))<meta property="og:image" content="{{$facebook['og:image']}}">@endif

        <title>@if(isset($meta['title'])){{($meta['title'])}}@endif</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap CSS (http://getbootstrap.com) -->
        <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> <!-- bootstrap CSS (http://getbootstrap.com) -->

        <!-- Libs and Plugins CSS -->
        <link rel="stylesheet" href="/vendor/animsition/css/animsition.min.css"> <!-- Animsition CSS (http://git.blivesta.com/animsition/) -->
        <link rel="stylesheet" href="/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
        <link rel="stylesheet" href="/vendor/lightgallery/css/lightgallery.min.css"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->
        <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.carousel.min.css"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
        <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.theme.default.min.css"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
        <link rel="stylesheet" href="/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
        <link rel="stylesheet" href="/vendor/animate.min.css"> <!-- Animate libs CSS (http://daneden.me/animate) -->

        <!-- Template master CSS -->
        <link rel="stylesheet" href="/css/helper.css">
        <link rel="stylesheet" href="/css/theme.css">

        <!-- Template dark style CSS -->
        <link rel="stylesheet" href="/css/dark-style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> <!-- Global font -->

    </head>
    <body id="body" class="animsition tt-dark-style @if($meta['section'] == 'About' || $meta['section'] == 'Games') tt-boxed @endif">
        @include('partials/header')
            <div id="body-content">
                @include('partials.admin.error-form')

                @include('partials.admin.success-form')
                @yield('content')

                @if($meta['section'] == 'About' || $meta['section'] == 'Games')
                    @include('partials/footer')
                @else
                    @include('partials/small-footer')
                @endif
            </div>
            <!-- End body content -->

        <!-- Core JS -->
        <script src="/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

        <!-- Libs and Plugins JS -->
        <script src="/vendor/animsition/js/animsition.min.js"></script> <!-- Animsition JS (http://git.blivesta.com/animsition/) -->
        <script src="/vendor/jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
        <script src="/vendor/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
        <script src="/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
        <script src="/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->
        <script src="/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
        <script src="/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->

        <script src="/vendor/lightgallery/js/lightgallery.min.js"></script> <!-- lightGallery JS (http://sachinchoolur.github.io/lightGallery) -->
        <script src="/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <!-- Theme master JS -->
        <script src="/js/theme.js"></script>



        <!-- =============================
        ///// Begin Google Analytics /////
        ============================== -->

        <!-- Your Google Analytics code here. https://analytics.google.com -->

        <!-- =============================
        ///// End Google Analytics /////
        ============================== -->
        <script>

        </script>
    </body>
</html>