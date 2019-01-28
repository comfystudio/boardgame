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

	<!-- ===========
	///// Body /////
	================
	* Use class "animsition" to enable page transition while page loads.
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	* Use class "tt-dark-style" to enable theme dark style.
	-->
	<body id="body" class="animsition tt-boxed tt-dark-style">


		@include('partials/header')


		<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->
		<div id="body-content">


			<!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
			<section id="page-header" class="ph-lg" style="background-color: rgba(101, 101, 101, 0.0) !important;">

				<!-- Begin page header image 
				============================= 
				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				{{--<div class="page-header-image parallax-bg-3 bg-image" style="background-image: url(assets/img/misc/page-header-bg-4.jpg);">--}}

					<!-- Element cover
					===================
					* You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".
					-->
					{{--<div class="cover bg-transparent-5-dark"></div>--}}

					<video autoplay loop id="error-video">
                      <source src="/img/404.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        {{--<div class="cover bg-transparent-5-dark"></div>--}}
                    </video>

				{{--</div>--}}


				<!-- End page header image -->

				<!-- Begin page header inner -->
				<div class="page-header-inner tt-wrap">

					<!-- Begin page header caption 
					===============================
					* Use classes "ph-caption-xs", "ph-caption-sm", "ph-caption-lg" or "ph-caption-xlg" to set page header size.
					* Use class "parallax-1" up to "parallax-6" to enable parallax effect.
					* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
					-->
					<div class="page-header-caption ph-caption-xlg parallax-4 fade-out-scroll-3">
						<h1 class="page-header-title">404</h1>
						<hr class="hr-short">
					</div>
					<!-- End page header caption -->

				</div> 
				<!-- End page header inner -->

			</section>
			<!-- End page header -->


			<!-- =========================
			///// Begin page section /////
			========================== -->
			<section id="page-section" class="page-classic">
				<div class="page-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 no-padding margin-bottom-40">

								<!-- Begin page content -->
								<div class="page-content">

									<!-- Begin tt-heading 
									====================== 
									* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
									* Use class "text-center" or "text-right" to align tt-heading.
									* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
									-->
									<div class="tt-heading tt-heading-lg">
										<div class="tt-heading-inner">
											<h1 class="tt-heading-title">Sorry, page not found!</h1>
											<!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
											<!-- <hr class="hr-short"> -->
										</div> <!-- /.tt-heading-inner -->
									</div>
									<!-- End tt-heading -->

									<div class="margin-top-20">
										{{--<p class="max-width-600">Maecenas tempor viverra rutrum. Integer quis eros in libero molestie vulputate ut et orci integer condimentum.</p>--}}
									</div>

									<div class="margin-top-30">
										<a href="{{url('/')}}" class="btn btn-primary margin-top-5 margin-right-10">Go Home</a>
                                        <a href="{{url('/contact')}}" class="btn btn-dark-bordered margin-top-5">Contact</a>
									</div>

								</div> 
								<!-- End page content -->

							</div> <!-- /.col -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->

				</div> <!-- /.page-section-inner -->
			</section>
			<!-- End page section -->

            @include('partials/footer')


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



	</body>

</html>