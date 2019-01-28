<!-- ===========================
///// Begin footer section /////
================================
* Use class "footer-dark" to enable dark footer.
* Use class "no-margin-top" if needed.
-->
<section id="footer" class="footer-dark no-margin-top">
    <div class="footer-inner">
        <div class="footer-container tt-wrap">
            <div class="row">
                <div class="col-md-3">

                    <!-- Begin footer logo -->
                    <div id="footer-logo">
                        <a href="{{url('/')}}" class="logo-dark"><img src="/img/logo.png" alt="logo"></a>
                        <a href="{{url('/')}}" class="logo-light"><img src="/img/logo.png" alt="logo"></a>

                        <!-- for small screens -->
                        <a href="{{url('/')}}" class="logo-dark-m"><img src="/img/logo.png" alt="logo"></a>
                        <a href="{{url('/')}}" class="logo-light-m"><img src="/img/logo.png" alt="logo"></a>
                    </div>
                    <!-- End footer logo -->

                </div> <!-- /.col -->

                <div class="col-md-5">

                    <!-- Begin footer text -->
                    <div class="footer-text">
                        <h4>- Subscribe to my newsletter</h4>
                        If you would like to receive notifications of new posts by email, enter your email to subscribe to Board Game Bureau!
                    </div>
                    <!-- End footer text -->

                </div> <!-- /.col -->

                <div class="col-md-4">

                    <!-- Begin social buttons -->
                    <div class="social-buttons">
                        <ul>
                            <li><a href="{{TWITTER}}" target="_blank"><span class="icon-twitter-with-circle medium"></span></a></li>
                            <li><a href="{{FACEBOOK}}" target="_blank"><span class="icon-facebook-with-circle medium"></span></a></li>
                            <li><a href="{{INSTAGRAM}}" target="_blank"><span class="icon-instagram-with-circle medium"></span></a></li>
                            <li><a href="{{PINTEREST}}" target="_blank"><span class="icon-pinterest-with-circle medium"></span></a></li>

                            <li><a href="{{FACEBOOK}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{TWITTER}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            {{--<li><a href="https://plus.google.com/+SiiliOnu" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Google+" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>--}}
                            <li><a href="{{PINTEREST}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="{{INSTAGRAM}}" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>

                            {{--<li><a href="https://dribbble.com/Themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a></li>--}}
                            <li><a href="mailto:{{EMAIL}}" class="btn btn-social-min btn-default btn-rounded-full" title="Drop me a line"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <!-- End social buttons -->

                    <!-- Begin footer subscribe form -->
                    <form class="form-btn-inside" id="footer-subscribe-form" action="{{url('/queries/create')}}" method="post" novalidate>
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div
                                class="g-recaptcha column width-4 offset-1 center"
                                data-sitekey="6LckK1wUAAAAAEpgF7zMC-ZCHRtU7x_rOJy5A5Y3"
                                data-callback="onSubmit">
                            </div>
                            <input type="email" class="form-control no-bg" id="footer-subscribe" name="email" placeholder="Subscribe. Enter your email address..." required="required">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <!-- End footer subscribe form -->

                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.footer-container -->

        <div class="footer-bottom">
            <div class="footer-container tt-wrap">
                <div class="row">
                    <div class="col-md-6 col-md-push-6">

                        <!-- Begin footer menu -->
                        <ul class="footer-menu">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/games')}}">Games</a></li>
                            <li><a href="{{url('/kickstarters')}}">Kickstarters</a></li>
                            <li><a href="{{url('/aob')}}l">A.O.B</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                        <!-- End footer menu -->

                    </div> <!-- /.col -->

                    <div class="col-md-6 col-md-pull-6">

                        <!-- Begin footer copyright -->
                        <div class="footer-copyright">
                            <p>&copy; BoardGameBureau {{date("Y")}} / All rights reserved | <a href="{{url('/privacy')}}">Privacy policy</a></p>
                            <p>Design by: <a href="https://www.comfystudio.com/" target="_blank">Comfystudio</a></p>
                        </div>
                        <!-- End footer copyright -->

                    </div> <!-- /.col -->

                </div> <!-- /.row -->
            </div> <!-- /.footer-container -->
        </div> <!-- /.footer-bottom -->

    </div> <!-- /.footer-inner -->

    <!-- Scroll to top button -->
    <a href="#body" class="scrolltotop sm-scroll" title="Scroll to top"><i class="fas fa-chevron-up"></i></a>

</section>
<!-- End footer section -->