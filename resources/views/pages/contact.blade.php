@extends('layouts/layout')

@section('content')
    <!-- ============================
    ///// Begin contact section /////
    ============================= -->
    <section id="contact-section" class="contact-simple">
        <div class="contact-section-inner full-height-vh"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <div class="full-cover bg-image" style="background-image: url(/img/contact.png); background-position: 50% 50%;"></div>

            <!-- Element cover -->
            <div class="cover bg-transparent-1-dark"></div>

            <!-- Begin contact info -->
            <div class="contact-info-wrap">

                <!-- Begin tt-heading
                ======================
                * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
                * Use class "text-center" or "text-right" to align tt-heading.
                * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
                -->
                <div class="tt-heading">
                    <div class="tt-heading-inner">
                        <h1 class="tt-heading-title">Get In Touch</h1>
                        <!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
                        <hr class="hr-short">
                    </div> <!-- /.tt-heading-inner -->
                </div>
                <!-- End tt-heading -->

                <div class="contact-info margin-top-40">
                    <p>Want to keep in touch? Advertise on the site? Have a game you'd like me to review?</p>
                    <p>Drop me a line at...</p>
                    <p><i class="fas fa-envelope"></i> email: <a href="mailto:{{EMAIL}}" target="_blank">{{EMAIL}}</a></p>
                </div>

                <!-- Begin social buttons -->
                <div class="social-buttons margin-top-20">
                    <ul>
                        <li><a href="{{FACEBOOK}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{TWITTER}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{PINTEREST}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="{{INSTAGRAM}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- End social buttons -->

            </div>
            <!-- End contact info -->
        </div> <!-- /.contact-section-inner -->
    </section>
    <!-- End contact section -->
@stop