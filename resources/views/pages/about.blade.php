@extends('layouts/layout')

@section('content')
    <!-- =============================
    ///// Begin about me section /////
    ============================== -->
    <section id="about-me-section" class="about-me-simple">
        <div class="about-me-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <!-- ======================
            ///// Begin split box /////
            based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
            ======================= -->
            <div class="split-box about-me">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row-lg-height">

                            <!-- Column -->
                            {{--<div class="col-lg-6 col-lg-height split-box-image no-padding bg-image" style="background-image: url(/img/misc/me-3.jpg); background-position: 50% 50%;">--}}

                                {{--<!-- Split box image height--}}
                                {{--============================--}}
                                {{--* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info. Note: class "sbi-height" is required.--}}
                                {{---->--}}
                                {{--<div class="sbi-height padding-height-100"></div>--}}

                            {{--</div> <!-- /.col -->--}}

                            <!-- Column -->
                            <div class="col-lg-12 col-lg-height col-lg-middle no-padding">

                                <!-- Begin split box content
                                =============================
                                * Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
                                -->
                                <div class="split-box-content sb-content-right">

                                    <!-- Begin tt-heading
                                    ======================
                                    * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
                                    * Use class "text-center" or "text-right" to align tt-heading.
                                    * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
                                    -->
                                    <div class="tt-heading">
                                        <div class="tt-heading-inner">
                                            <h1 class="tt-heading-title">Agent O</h1>
                                            <div class="tt-heading-subtitle">Board Game Investigator</div>
                                            <hr class="hr-short">
                                        </div> <!-- /.tt-heading-inner -->
                                    </div>
                                    <!-- End tt-heading -->

                                    <div class="margin-top-30">
                                        <p>
                                            <p>“Let’s crack these games wide open!”</p>

                                            <p>I have been playing board games since around 2013 when I played my first game of Catan, demanding wood for sheep - I was hooked! From curating my collection, introducing friends to ‘modern’ games and arranging cardboard battle royales, my passion for the hobby has only grown. I love the friendliness and support the board game community offers so I wanted to add my voice to the throng and hopefully encourage more people to join the board game revolution. I started this blog as a creative channel to engage with fellow board gamers as I love to keep up to date with the community through social media and I love to discuss board games, whether its opinions, strategies or general feedback!</p>

                                            <p>Combining with my other love (all things Noir!) I have created the Board Game Bureau to provide a detailed insight on a range of board games and related topics such as Kickstarter, Top Ten’s to different game strategies. Let me be your friendly Board Game Investigator - are you overwhelmed with the choice of board games on offer? Do you know what type of games you love but aren’t sure how they compare to the games you might already have? This hobby can become quite an investment, so to help you decide where you want to invest your hard earned money I want to shine the spotlight on some of the most recommended games to help you decide if they are right for you - whether you are a board game rookie or a tabletop veteran. Like all good Noir’s there will be some tough talking - I might not always agree with general opinions but I will always be honest and respectful.</p>

                                            <p>If you have an idea for a post or have a game you’d like me to review, or maybe you’d like to collaborate, then please contact me <a href="mailto:hello@boardgamebureau.com">hello@boardgamebureau.com</a> – I’d love to discuss it with you! To keep up to date with the Board Game Bureau’s case files, sign up to my monthly newsletter, where I will share my latest reviews, news and some surprises. Don’t forget to follow us our <a href="{{FACEBOOK}}" target="_blank">Facebook</a>, <a href="{{INSTAGRAM}}" target="_blank">Instagram</a>, <a href="{{TWITTER}}" target="_blank">Twitter</a> and <a href="{{PINTEREST}}" target="_blank">Pinterest!</a> Your support is always greatly appreciated!</p>

                                            <p>“The pieces of the puzzle were falling into place”</p>

                                            <p>Agent O</p>
                                        </p>
                                    </div>

                                    {{--<a href="contact.html" class="btn btn-primary margin-top-20">Hire Me!</a>--}}
                                    {{--<a href="categories-grid.html" class="btn btn-dark margin-top-20">View All My Work</a>--}}

                                    <!-- Begin signature -->
                                    <div class="signature">
                                        <img class="signature-light" src="/img/logo.png" alt="logo">
                                        {{--<img class="signature-dark" src="/img/signature-dark.png" alt="">--}}
                                        {{--<img class="signature-light" src="/img/signature-light.png" alt="">--}}
                                    </div>
                                    <!-- End signature -->

                                </div>
                                <!-- End split box content -->

                            </div> <!-- /.col -->

                        </div> <!-- /.row-height -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
            <!-- End split box -->

        </div> <!-- /.about-me-inner -->
    </section>
    <!-- End about me section -->


    <!-- ================================
    ///// Begin latest work cection /////
    ================================= -->
    <section id="latest-work-section" class="margin-top-40"> <!-- margin class is optional ) -->

        <!-- Begin tt-heading
        ======================
        * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
        * Use class "text-center" or "text-right" to align tt-heading.
        * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
        -->
        <div class="tt-heading padding-on text-center">
            <div class="tt-heading-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
                {{--<h1 class="tt-heading-title">Latest Projects</h1>--}}
                {{--<div class="tt-heading-subtitle">My latest photo projects</div>--}}
                <h1 class="tt-heading-title">Social Media</h1>
                <div class="tt-heading-subtitle">Latest Social Media Posts</div>
                <hr class="hr-short">
            </div> <!-- /.tt-heading-inner -->
        </div>
        <!-- End tt-heading -->

        <div class="latest-work-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <!-- Begin project carousel
            ============================ -->
            <div class="project-carousel">

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
                <div class="owl-carousel cc-height-1 cc-hover-dark nav-outside-top" data-items="4" data-margin="0" data-dots="false" data-nav="true" data-nav-speed="800" data-mobile-portrait="1" data-tablet-landscape="3" data-tablet-portrait="2" data-mobile-landscape="1" data-mobile-portrait="1">

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="https://www.instagram.com/p/Bj0fTKwhrp1/" target="_blank" class="cc-item">

                        <!-- cc image -->
                        <div class="cc-image full-cover bg-image" style="background-image: url(/img/instagram/6.jpg);"></div>

                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center max-width-400"> <!-- max width class is optional -->
                            <h2 class="cc-title">Weekend Choices</h2>
                            <div class="cc-category"><span>Instagram</span></div>
                        </div>
                        <!-- End caption -->

                    </a>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="https://www.instagram.com/p/BjCe8LpFcYS/" target="_blank" class="cc-item">

                        <!-- cc image -->
                        <div class="cc-image full-cover bg-image" style="background-image: url(/img/instagram/1.jpg);"></div>

                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center max-width-400"> <!-- max width class is optional -->
                            <h2 class="cc-title">Fortune &amp; Failure</h2>
                            <div class="cc-category"><span>Instagram</span></div>
                        </div>
                        <!-- End caption -->

                    </a>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="https://www.instagram.com/p/BjR4roYlN7h/" target="_blank" class="cc-item">

                        <!-- cc image -->
                        <div class="cc-image full-cover bg-image" style="background-image: url(/img/instagram/2.jpg);"></div>

                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center max-width-400">
                            <h2 class="cc-title">Boardgames &amp; Sun</h2>
                            <div class="cc-category"><span>Instagram</span></div>
                        </div>
                        <!-- End caption -->

                    </a>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="https://www.instagram.com/p/BjXzXP9FCqt/" target="_blank" class="cc-item">

                        <!-- cc image -->
                        <div class="cc-image full-cover bg-image" style="background-image: url(/img/instagram/3.jpg);"></div>

                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center max-width-400"> <!-- max width class is optional -->
                            <h2 class="cc-title">The Mind</h2>
                            <div class="cc-category"><span>Instagram</span></div>
                        </div>
                        <!-- End caption -->

                    </a>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="https://www.instagram.com/p/BjZoYl9F1dk/" target="_blank" class="cc-item">

                        <!-- cc image -->
                        <div class="cc-image full-cover bg-image" style="background-image: url(/img/instagram/4.jpg);"></div>

                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center max-width-400"> <!-- max width class is optional -->
                            <h2 class="cc-title">Become The Boss Monster</h2>
                            <div class="cc-category"><span>Instagram</span></div>
                        </div>
                        <!-- End caption -->

                    </a>
                    <!-- End carousel item -->

                    <!-- Begin carousel item
                    ========================= -->
                    <a href="https://www.instagram.com/p/BjcJ3ZilrNd/" target="_blank" class="cc-item">

                        <!-- cc image -->
                        <div class="cc-image full-cover bg-image" style="background-image: url(/img/instagram/5.jpg);"></div>

                        <!-- Begin caption
                        ===================
                        * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
                        * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xlg", "cc-caption-xxlg".
                        -->
                        <div class="cc-caption center max-width-400"> <!-- max width class is optional -->
                            <h2 class="cc-title">The Real Dice Tower</h2>
                            <div class="cc-category"><span>Instagram</span></div>
                        </div>
                        <!-- End caption -->

                    </a>
                    <!-- End carousel item -->

                </div>
                <!-- End content carousel -->

            </div>
            <!-- End project carousel -->

        </div> <!-- /.latest-work-inner -->
    </section>
    <!-- End latest work cection -->
@stop
