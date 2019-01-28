<!-- ====================================================
///// Begin blog list carousel section (categories) /////
===================================================== -->
<section id="blog-list-carousel-section" class="blc-categories">
    <div class="bl-carousel-wrap padding-25 tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

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
        <div class="owl-carousel cursor-grab nav-outside dots-rounded dots-right" data-items="4" data-margin="25" data-loop="true" data-nav="true" data-nav-speed="400" data-autoplay="true" data-autoplay-timeout="8000" data-autoplay-speed="400" data-autoplay-hover-pause="true" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="1" data-mobile-portrait="1">

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/reviews.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=reviews')}}" title="View all entries in this category">Reviews</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/kickstarters.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=kickstarters')}}" title="View all entries in this category">Kickstarters</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/top-ten.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=top-ten')}}" title="View all entries in this category">Top Ten Lists</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/sessions.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=sessions')}}" title="View all entries in this category">Sessions</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/digital.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=digital')}}" title="View all entries in this category">Digital Games</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/rpg.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=rpg')}}" title="View all entries in this category">RPG</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/humour.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('https://www.pinterest.co.uk/BoardGameBureau/board-game-humour/')}}" target="_blank" title="View all entries in this category">Humour</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/youtube.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=youtube')}}" title="View all entries in this category">Youtube</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

            <!-- Begin carousel item
            ========================= -->
            <div class="cc-item">

                <!-- Element cover -->
                <span class="cover bg-transparent-3-dark"></span>

                <!-- cc image -->
                <div class="cc-image full-cover bg-image" style="background-image: url(/img/area51.png); background-position: 50% 50%;"></div>

                <!-- Begin caption
                ===================
                * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                -->
                <div class="cc-caption cc-caption-sm center">
                    <h2 class="cc-title">
                        <a href="{{url('/games?category=area51')}}" title="View all entries in this category">Area 51</a>
                    </h2>
                </div>
                <!-- End caption -->

            </div>
            <!-- End carousel item -->

        </div>
        <!-- End content carousel -->

    </div> <!-- /.gl-carousel-wrap -->
</section>
<!-- End blog list carousel section -->