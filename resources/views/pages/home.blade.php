@extends('layouts/layout')

@section('content')

    <!-- =================================
    ///// Begin gallery list section /////
    ================================== -->
    <section id="gallery-list-section" class="gallery-list-carousel">
        <div class="gallery-list-slideshow-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
            <div class="gl-carousel-wrap no-padding"> <!-- Optional: add class "no-padding" to disable paddings -->

                <!-- Begin content carousel (https://owlcarousel2.github.io/OwlCarousel2/)
                ====================================================================
                * Use class "nav-outside" for outside nav (requires boxed layout).
                * Use class "nav-outside-top" for outside top nav (requires enough space at the top of the carousel).
                * Use class "nav-bottom-right" for bottom right nav.
                * Use class "nav-rounded" for rounded nav.
                * Use class "nav-light" to enable nav light style.
                * Use class "dots-outside" for outside dots (requires enough space at the bottom of the carousel).
                * Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
                * Use class "dots-rounded" for rounded dots.
                * Use class "owl-mousewheel" to enable mousewheel support.
                * Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
                * Use class "cc-hover-light", "cc-hover-dark" or "cc-hover-zoom" to enable carousel items hover effect.
                * Use class "cc-height-1", "cc-height-2", "cc-height-3", "cc-height-4", "cc-height-5", "cc-height-6" or "cc-height-full" to set carousel height (do not use with data-autoheight="true"!!!).
                * Use class "cc-height-m" to set full height for small screens (do not use with data-autoheight="true"!!!).
                ================================================================
                * Available carousel data attributes:
                        data-items="5".......................(items visible on desktop)
                        data-tablet-landscape="4"............(items visible on mobiles)
                        data-tablet-portrait="3".............(items visible on mobiles)
                        data-mobile-landscape="2"............(items visible on tablets)
                        data-mobile-portrait="1".............(items visible on tablets)
                        data-loop="true".....................(true/false)
                        data-margin="10".....................(space between items)
                        data-center="true"...................(true/false)
                        data-start-position="0"..............(item start position)
                        data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
                        data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
                        data-mouse-drag="false"..............(true/false)
                        data-touch-drag="false"..............(true/false)
                        data-autoheight="true"...............(true/false)
                        data-autoplay="true".................(true/false)
                        data-autoplay-timeout="5000".........(milliseconds)
                        data-autoplay-hover-pause="true".....(true/false)
                        data-autoplay-speed="800"............(milliseconds)
                        data-drag-end-speed="800"............(milliseconds)
                        data-nav="true"......................(true/false)
                        data-nav-speed="800".................(milliseconds)
                        data-dots="false"....................(true/false)
                        data-dots-speed="800"................(milliseconds)
                -->
                <div class="owl-carousel cc-height-full cursor-grab nav-bottom-right bg-dark cc-hover-zoom" data-items="1" data-loop="false" data-dots="false" data-nav="false" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="false" data-autoplay-timeout="10000">

                    <!-- Begin carousel item
                    ========================= -->
                    <div class="cc-item">

                        <!-- Element cover -->
                        <span class="cover bg-transparent-4-dark"></span>

                        <!-- cc image -->
                        <div class="cc-image bg-image" style="background-image: url(/img/home-1.png); background-position: 50% 65%;"></div>

                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption cc-caption-xxlg bottom-left caption-animate max-width-650">
                            <h2 class="cc-title">Board Game Bureau</h2>

                            <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                            <p class="cc-description">
                               Let's crack these games wide open.
                            </p>

                            <a href="{{url('games')}}" class="btn btn-primary margin-top-25">View Games</a>
                        </div>
                        <!-- End caption -->

                        <!-- Begin thumbnail list (album preview thumbnails) Not displayed on smaller screens!!!
                        ==========================================
                        * Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
                        * Use class "tl-rotate" to rotate items randomly.
                        -->
                        <ul class="thumb-list col-3 tl-rotate">
                            <li><a href="{{url('/games?category=reviews')}}" class="thumb-list-item bg-image" style="background-image: url(/img/reviews.png);"></a></li>
                            <li><a href="{{url('/games?category=kickstarters')}}" class="thumb-list-item bg-image" style="background-image: url(/img/kickstarters.png);"></a></li>
                            <li><a href="{{url('/games?category=top-ten')}}" class="thumb-list-item bg-image" style="background-image: url(/img/top-ten.png);"></a></li>
                            <li><a href="{{url('/games?category=sessions')}}" class="thumb-list-item bg-image" style="background-image: url(/img/sessions.png);"></a></li>
                            <li><a href="{{url('/games?category=digital')}}" class="thumb-list-item bg-image" style="background-image: url(/img/digital.png);"></a></li>
                            <li><a href="{{url('/games?category=rpg')}}" class="thumb-list-item bg-image" style="background-image: url(/img/rpg.png);"></a></li>
                            <li><a href="{{url('https://www.pinterest.co.uk/BoardGameBureau/board-game-humour/')}}" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/humour.png);"></a></li>
                            <li><a href="{{url('/games?category=youtube')}}" class="thumb-list-item bg-image" style="background-image: url(/img/youtube.png);"></a></li>
                            <li><a href="{{url('/games?category=area51')}}" class="thumb-list-item bg-image" style="background-image: url(/img/area51.png);"></a></li>
                        </ul>
                        <!-- End thumbnail list -->

                    </div>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <!-- <div class="cc-item">

                        <a class="owl-video" href="https://vimeo.com/99653121"></a>

                        <div class="cc-caption cc-caption-xxlg bottom-left caption-animate max-width-550">
                            <h2 class="cc-title">Beauty &amp; Fashion</h2>
                            <p class="cc-description">
                                Nunc felis lorem, faucibus nec aliquet malesuada a ligula ultrices vulputate.
                            </p>
                            <a href="gallery-single-carousel-center.html" class="btn btn-primary margin-top-25">View Gallery</a>
                        </div>

                    </div> -->
                    <!-- End carousel item -->

                </div>
                <!-- End content carousel -->

            </div> <!-- /.gl-carousel-wrap -->
        </div> <!-- /.gallery-list-carousel-inner -->
    </section>
    <!-- End gallery list section -->
@stop