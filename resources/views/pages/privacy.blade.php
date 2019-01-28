@extends('layouts/layout')

@section('content')
    <!-- ========================
    ///// Begin page header /////
    =============================
    * Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
    * Use class "ph-center" or "ph-right" to align page header caption.
    -->
    <section id="page-header">

        {{--<!-- Begin page header image--}}
        {{--=============================--}}
        {{--* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.--}}
        {{--* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.--}}
        {{--* Use class "hide-ph-image" to hide page header image without removing the code.--}}
        {{---->--}}
        {{--<div class="page-header-image parallax-bg-3 bg-image" style="background-image: url(assets/img/misc/page-header-bg-4.jpg);">--}}

            {{--<!-- Element cover--}}
            {{--===================--}}
            {{--* You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".--}}
            {{---->--}}
            {{--<div class="cover bg-transparent-5-dark"></div>--}}

        {{--</div>--}}
        {{--<!-- End page header image -->--}}

        <!-- Begin page header inner -->
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header caption
            ===============================
            * Use classes "ph-caption-xs", "ph-caption-sm", "ph-caption-lg" or "ph-caption-xlg" to set page header size.
            * Use class "parallax-1" up to "parallax-6" to enable parallax effect.
            * Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
            -->
            <div class="page-header-caption ph-caption-lg parallax-4 fade-out-scroll-3">
                <h1 class="page-header-title">Privacy Policy</h1>
                <hr class="hr-short">

                <!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
                <div class="page-header-description" data-max-words="40">

                </div>

            </div>
            <!-- End page header caption -->

        </div>
        <!-- End page header inner -->

    </section>
    <!-- End page header -->


    <!-- =============================
    ///// Begin about me section /////
    ============================== -->
    <section id="about-me-section">
        <div class="about-me-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

            <!-- ======================
            ///// Begin split box /////
            based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
            ======================= -->
            <div class="about-me">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row-lg-height">


                            <!-- Column -->
                            <div class="col-lg-12 col-lg-height col-lg-middle no-padding">

                                <!-- Begin split box content
                                =============================
                                * Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
                                -->
                                <div class="split-box-content sb-content-right" style="padding-top: 2%">

                                    <!-- Begin tt-heading
                                    ======================
                                    * Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
                                    * Use class "text-center" or "text-right" to align tt-heading.
                                    * Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
                                    -->
                                    <div class="tt-heading no-padding">
                                        <div class="tt-heading-inner">
                                            <h1 class="tt-heading-title">Privacy Policy</h1>
                                            {{--<div class="tt-heading-subtitle">A little bit about me</div>--}}
                                            <hr class="hr-short">
                                        </div> <!-- /.tt-heading-inner -->
                                    </div>
                                    <!-- End tt-heading -->

                                    <div class="margin-top-30">
                                        <p>
                                            <p>
                                                Data Privacy and GDPR (General Data Protection Regulation)
                                            </p>

                                            <p>
                                                Board Game Bureau complies with the requirements of the General Data Protection Regulation (GDPR / 2018) and use the collected data only to process customer orders and administer and improve our website.

                                            </p>

                                            <p>
                                                This privacy policy tells you how we use personal information collected at this site. Please read this privacy policy before using the site or submitting any personal information. By using the site, you are accepting the practices described in this privacy policy. These practices may be changed, but any change will only apply to activities and information on a going forward, not retroactive basis. You are encouraged to review the privacy policy whenever you visit the site to make sure that you understand how any personal information you provide will be used.
                                            </p>

                                            <p>
                                                <strong>Why are we collecting data?</strong>
                                            </p>

                                            <p>
                                                As part of the registration process for our newsletter, we collect personal information. We use that information for a couple of reasons: to tell you about stuff you’ve asked us to tell you about; to contact you if we need to obtain or provide additional information; to check our records are right and to check every now and then that you’re happy and satisfied. We don't rent or trade email lists with other organisations and businesses And we use data we have collected to manage, analyse and improve our website and our services to you ("legitimate interest").
                                            </p>

                                            <p>
                                                <strong>What are we collecting?</strong>
                                            </p>

                                            <p>
                                                We are collecting basic data like name and email address. While you visit our website we are also collecting technical data like the device or the type of browser you are using to visit our website.
                                            </p>

                                            <p>
                                                <strong>Are we sharing your data?</strong>
                                            </p>

                                            <p>
                                                Data security is very important to us. Your information is not provided to any company for marketing purposes. We will not pass any information to third parties without your consent.
                                            </p>

                                            <p>
                                                Your personally identifiable information is kept secure. The Board Game Bureau newsletter allows you to opt out of further mailings.
                                            </p>

                                            <p>
                                                <strong>Does our website use cookies?</strong>
                                            </p>

                                            <p>
                                                The site uses cookie and tracking technology. Cookie and tracking technology are useful for gathering information such as browser type and operating system, tracking the number of visitors to the site, and understanding how visitors use the site. Cookies help customise the site for visitors (like language). Personal information cannot be collected via cookies and other tracking technology, however, if you previously provided personally identifiable information, cookies may be tied to such information.
                                            </p>

                                            <p>
                                                You can change your browser settings to accept/reject new cookies and to delete existing one. You can find more information about how you can manage cookies here: http://www.aboutcookies.org.uk/managing-cookies.
                                            </p>

                                            <p>
                                                <strong>Your rights</strong>
                                            </p>

                                            <p>
                                                You can access most of the data that we collect about you by logging in to your account. You also have the right to make a request to access other personal data we hold about you and to request corrections of any errors in that data. You can also close the account you have with us at any time or ask us to delete your personal data.
                                            </p>

                                            <p>
                                                To make a request, please get in touch with us at <a href="mailto:hello@boardgamebureau.com">hello@boardgamebureau.com</a>
                                            </p>

                                            <p>
                                                <strong>Privacy Contact Information</strong>
                                            </p>

                                            <p>
                                                If you have any questions, concerns, or comments about our privacy policy you may contact us at <a href="mailto:hello@boardgamebureau.com">hello@boardgamebureau.com</a>
                                            </p>

                                            <p>
                                                We reserve the right to make changes to this policy.
                                            </p>
                                        </p>
                                    </div>

                                    <!-- Begin signature -->
                                    <div class="signature">
                                        <img class="signature-dark" src="assets/img/signature-dark.png" alt="">
                                        <img class="signature-light" src="assets/img/signature-light.png" alt="">
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
@stop







