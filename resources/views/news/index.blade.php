@extends('layouts/layout')

@section('content')
    @include('partials.projects-carousel')

    @if(isset($news) && count($news) > 0)
        <!-- ==============================
        ///// Begin blog list section /////
        =============================== -->
        <section id="blog-list-section" class="blog-list-classic">
            <div class="blog-list-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

                <div class="row no-margin">

                    <!-- Content column -->
                    <div class="col-md-8 no-padding-left no-padding-right">

                        <div class="isotope-wrap">

                            <!-- Begin isotope
                            ===================
                            * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
                            * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
                            -->
                            <div class="isotope col-1">

                                <!-- Begin isotope items wrap
                                ============================== -->
                                <div class="isotope-items-wrap no-margin-top">

                                    <!-- Grid sizer (do not remove!!!) -->
                                    <div class="grid-sizer"></div>


                                    <!-- =====================
                                    /// Begin isotope item ///
                                    ====================== -->
                                    @foreach($news as $new)
                                        <div class="isotope-item">

                                            <!-- Begin blog list item -->
                                            <article class="blog-list-item">

                                                <!-- Blog list item image -->
                                                <a href="{{url('/view/')}}/{{$new->slug}}" class="bl-item-image">@if(isset($new->newsImages[0]))<img src="/{{$new->newsImages[0]['image']}}" alt="{{$new->newsImages[0]['title']}}" />@endif</a>

                                                <!-- Begin blog list item info -->
                                                <div class="bl-item-info">
                                                    <div class="bl-item-category">@foreach($new->category as $category)<a href="/{{$route}}/?category={{$category->name}}"> {{$category->name}} </a>@endforeach</div>
                                                    <a href="{{url('/view/')}}/{{$new->slug}}" class="bl-item-title"><h2>{{$new->title}}</h2></a>
                                                    <div class="bl-item-meta">
                                                        <span class="published">{{date("F d, Y", strtotime($new->publish_date))}}</span>
                                                        <span class="posted-by">- by <a title="View all posts by Martin Vegas">Agent O</a></span>
                                                    </div>
                                                    <div class="bl-item-desc">
                                                        {!! str_limit(strip_tags($new->text), 200) !!}
                                                    </div>
                                                    <a href="{{url('/view/')}}/{{$new->slug}}" class="btn btn-primary btn-sm margin-top-30">Read More</a>

                                                </div>
                                                <!-- End blog list item info -->

                                            </article>
                                            <!-- End blog list item -->

                                        </div>
                                    @endforeach
                                    <!-- End isotope item -->

                                    <!-- =====================
                                    /// Begin isotope item ///
                                    ====================== -->
                                    {{--<div class="isotope-item">--}}

                                        {{--<!-- Begin blog list item -->--}}
                                        {{--<article class="blog-list-item">--}}

                                            {{--<!-- Blog list item image -->--}}
                                            {{--<a href="blog-single.html" class="bl-item-image"><img src="/img/blog/list/blog-2.jpg" alt="image"></a>--}}

                                            {{--<!-- Begin blog list item info -->--}}
                                            {{--<div class="bl-item-info">--}}
                                                {{--<div class="bl-item-category"><a href="blog-archive.html">Equipment</a></div>--}}
                                                {{--<a href="blog-single.html" class="bl-item-title"><h2>10 Top Choices for Aerial Photography</h2></a>--}}
                                                {{--<div class="bl-item-meta">--}}
                                                    {{--<span class="published">May 26, 2017</span>--}}
                                                    {{--<span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">John Young</a></span>--}}
                                                {{--</div>--}}
                                                {{--<div class="bl-item-desc">--}}
                                                    {{--Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl. Proin in cursus nisi, id feugiat magna. Aliquam nec elit a lorem egestas vehicula vel eu erat. Pellentesque a lacus sed risus cursus venenatis...--}}
                                                {{--</div>--}}
                                                {{--<a href="blog-single.html" class="btn btn-primary btn-sm margin-top-30">Read More</a>--}}

                                                {{--<!-- Begin blog list item attributes -->--}}
                                                {{--<ul class="bl-item-attr">--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin comments count -->--}}
                                                        {{--<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 66</a>--}}
                                                        {{--<!-- End comments count -->--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin favorite button -->--}}
                                                        {{--<div class="favorite-btn">--}}
                                                            {{--<div class="fav-inner">--}}
                                                                {{--<div class="icon-heart">--}}
                                                                    {{--<span class="icon-heart-empty"></span>--}}
                                                                    {{--<span class="icon-heart-filled"></span>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="fav-count">98</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- End favorite button -->--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                                {{--<!-- End blog list item attributes -->--}}

                                            {{--</div>--}}
                                            {{--<!-- End blog list item info -->--}}

                                        {{--</article>--}}
                                        {{--<!-- End blog list item -->--}}

                                    {{--</div>--}}
                                    <!-- End isotope item -->

                                    <!-- =====================
                                    /// Begin isotope item ///
                                    ====================== -->
                                    {{--<div class="isotope-item">--}}

                                        {{--<!-- Begin blog list item -->--}}
                                        {{--<article class="blog-list-item">--}}

                                            {{--<!-- Blog list item image -->--}}
                                            {{--<a href="blog-single.html" class="bl-item-image"><img src="/img/blog/list/blog-3.jpg" alt="image"></a>--}}

                                            {{--<!-- Begin blog list item info -->--}}
                                            {{--<div class="bl-item-info">--}}
                                                {{--<div class="bl-item-category"><a href="blog-archive.html">Travel</a></div>--}}
                                                {{--<a href="blog-single.html" class="bl-item-title"><h2>How to Take Professional Travel Photos</h2></a>--}}
                                                {{--<div class="bl-item-meta">--}}
                                                    {{--<span class="published">May 26, 2017</span>--}}
                                                    {{--<span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Anna Vernik</a></span>--}}
                                                {{--</div>--}}
                                                {{--<div class="bl-item-desc">--}}
                                                    {{--Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl. Proin in cursus nisi, id feugiat magna. Aliquam nec elit a lorem egestas vehicula vel eu erat. Pellentesque a lacus sed risus cursus venenatis...--}}
                                                {{--</div>--}}
                                                {{--<a href="blog-single.html" class="btn btn-primary btn-sm margin-top-30">Read More</a>--}}

                                                {{--<!-- Begin blog list item attributes -->--}}
                                                {{--<ul class="bl-item-attr">--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin comments count -->--}}
                                                        {{--<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 3</a>--}}
                                                        {{--<!-- End comments count -->--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin favorite button -->--}}
                                                        {{--<div class="favorite-btn active">--}}
                                                            {{--<div class="fav-inner">--}}
                                                                {{--<div class="icon-heart">--}}
                                                                    {{--<span class="icon-heart-empty"></span>--}}
                                                                    {{--<span class="icon-heart-filled"></span>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="fav-count">54</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- End favorite button -->--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                                {{--<!-- End blog list item attributes -->--}}

                                            {{--</div>--}}
                                            {{--<!-- End blog list item info -->--}}

                                        {{--</article>--}}
                                        {{--<!-- End blog list item -->--}}

                                    {{--</div>--}}
                                    <!-- End isotope item -->

                                    <!-- =====================
                                    /// Begin isotope item ///
                                    ====================== -->
                                    {{--<div class="isotope-item">--}}

                                        {{--<!-- Begin blog list item -->--}}
                                        {{--<article class="blog-list-item">--}}

                                            {{--<!-- Blog list item image -->--}}
                                            {{--<a href="blog-single.html" class="bl-item-image"><img src="/img/blog/list/blog-4.jpg" alt="image"></a>--}}

                                            {{--<!-- Begin blog list item info -->--}}
                                            {{--<div class="bl-item-info">--}}
                                                {{--<div class="bl-item-category"><a href="blog-archive.html">Photography</a></div>--}}
                                                {{--<a href="blog-single.html" class="bl-item-title"><h2>5 Tips Your Camera Manual Never Told You About Portrait Photography</h2></a>--}}
                                                {{--<div class="bl-item-meta">--}}
                                                    {{--<span class="published">May 26, 2017</span>--}}
                                                    {{--<span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Julia Beck</a></span>--}}
                                                {{--</div>--}}
                                                {{--<div class="bl-item-desc">--}}
                                                    {{--Etiam sollicitudin dolor lorem, non aliquet quam dignissim vel. Nunc at eros non odio vestibulum porttitor egestas ut nisl. Proin in cursus nisi, id feugiat magna. Aliquam nec elit a lorem egestas vehicula vel eu erat. Pellentesque a lacus sed risus cursus venenatis...--}}
                                                {{--</div>--}}
                                                {{--<a href="blog-single.html" class="btn btn-primary btn-sm margin-top-30">Read More</a>--}}

                                                {{--<!-- Begin blog list item attributes -->--}}
                                                {{--<ul class="bl-item-attr">--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin comments count -->--}}
                                                        {{--<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 0</a>--}}
                                                        {{--<!-- End comments count -->--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin favorite button -->--}}
                                                        {{--<div class="favorite-btn active">--}}
                                                            {{--<div class="fav-inner">--}}
                                                                {{--<div class="icon-heart">--}}
                                                                    {{--<span class="icon-heart-empty"></span>--}}
                                                                    {{--<span class="icon-heart-filled"></span>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="fav-count">3</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- End favorite button -->--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                                {{--<!-- End blog list item attributes -->--}}

                                            {{--</div>--}}
                                            {{--<!-- End blog list item info -->--}}

                                        {{--</article>--}}
                                        {{--<!-- End blog list item -->--}}

                                    {{--</div>--}}
                                    <!-- End isotope item -->

                                    <!-- =====================
                                    /// Begin isotope item ///
                                    ====================== -->
                                    {{--<div class="isotope-item">--}}

                                        {{--<!-- Begin blog list item -->--}}
                                        {{--<article class="blog-list-item">--}}

                                            {{--<!-- Blog list item image -->--}}
                                            {{--<a href="blog-single.html" class="bl-item-image"><img src="/img/blog/list/blog-5.jpg" alt="image"></a>--}}

                                            {{--<!-- Begin blog list item info -->--}}
                                            {{--<div class="bl-item-info">--}}
                                                {{--<div class="bl-item-category"><a href="blog-archive.html">Photography</a></div>--}}
                                                {{--<a href="blog-single.html" class="bl-item-title"><h2>Most Common Wedding Photography Mistakes Every Beginner Will Make</h2></a>--}}
                                                {{--<div class="bl-item-meta">--}}
                                                    {{--<span class="published">May 26, 2017</span>--}}
                                                    {{--<span class="posted-by">- by <a href="#" title="View all posts by Martin Vegas">Martin Vegas</a></span>--}}
                                                {{--</div>--}}
                                                {{--<div class="bl-item-desc">--}}
                                                    {{--Suspendisse imperdiet ante at tortor consequat consectetur. Quisque rhoncus blandit justo praesent congue convallis...--}}
                                                {{--</div>--}}
                                                {{--<a href="blog-single.html" class="btn btn-primary btn-sm margin-top-30">Read More</a>--}}

                                                {{--<!-- Begin blog list item attributes -->--}}
                                                {{--<ul class="bl-item-attr">--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin comments count -->--}}
                                                        {{--<a href="blog-single.html#blog-post-comments" class="bl-item-comments-count" title="Read the comments"><i class="far fa-comment"></i> 8</a>--}}
                                                        {{--<!-- End comments count -->--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<!-- Begin favorite button -->--}}
                                                        {{--<div class="favorite-btn">--}}
                                                            {{--<div class="fav-inner">--}}
                                                                {{--<div class="icon-heart">--}}
                                                                    {{--<span class="icon-heart-empty"></span>--}}
                                                                    {{--<span class="icon-heart-filled"></span>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="fav-count">71</div>--}}
                                                        {{--</div>--}}
                                                        {{--<!-- End favorite button -->--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                                {{--<!-- End blog list item attributes -->--}}

                                            {{--</div>--}}
                                            {{--<!-- End blog list item info -->--}}

                                        {{--</article>--}}
                                        {{--<!-- End blog list item -->--}}

                                    {{--</div>--}}
                                    <!-- End isotope item -->

                                </div>
                                <!-- End isotope items wrap -->

                            </div>
                            <!-- End isotope -->

                        </div> <!-- /.isotope-wrap -->

                        <!-- Begin pagination -->
                        {{$news->links('partials/paginator')}}
                        <!-- End pagination -->

                    </div> <!-- /.col (Content column) -->

                    <!-- Sidebar column -->
                    <div class="col-md-4 no-padding-left no-padding-right">

                        <!-- Begin sidebar (sidebar right)
                        =================================== -->
                        <div class="sidebar sidebar-right">
                            <div class="row">

                                {{--<div class="col-sm-12">--}}

                                    {{--<!-- Begin sidebar widget -->--}}
                                    {{--<div class="sidebar-widget blog-author no-margin-top">--}}
                                        {{--<h3 class="sidebar-heading">About Me</h3>--}}
                                        {{--<a href="about-me.html" class="blog-author-img bg-image" style="background-image: url(/img/blog/small/avatar/avatar-1.jpg); background-position: 50% 50%;"></a>--}}
                                        {{--<div class="blog-author-info">--}}
                                        {{--<h4 class="blog-author-name"><a href="about-me.html">Martin Vegas</a></h4>--}}
                                            {{--<div class="blog-author-sub">Artist &amp; Photographer</div>--}}

                                                {{--<!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->--}}
                                                {{--<p class="blog-author-text" data-max-words="15">Debitis sociis phasellus feugiat luctus diam. Vitae aenean odio ligula interdum suscipit antimoa arte lacus ante.</p>--}}

                                            {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- End sidebar widget -->--}}

                                {{--</div> <!-- /.col -->--}}

                                <div class="col-sm-12">

                                    <!-- Begin sidebar widget -->
                                    <div class="sidebar-widget sidebar-social">
                                        <h3 class="sidebar-heading">Follow</h3>
                                        <!-- Begin social buttons -->
                                        <div class="social-buttons">
                                            <ul>
                                                <li><a href="{{FACEBOOK}}" class="btn btn-social-min btn-facebook" title="Follow me on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="{{TWITTER}}" class="btn btn-social-min btn-twitter" title="Follow me on Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="{{PINTEREST}}" class="btn btn-social-min btn-pinterest" title="Follow me on Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="{{INSTAGRAM}}" class="btn btn-social-min btn-instagram" title="Follow me on instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- End social buttons -->
                                    </div>
                                    <!-- End sidebar widget -->

                                </div> <!-- /.col -->

                                <div class="col-sm-12">

                                    <!-- Begin sidebar widget -->
                                    <div class="sidebar-widget sidebar-search">
                                        <h3 class="sidebar-heading">Search</h3>
                                        <form id="blog-search-form" class="form-btn-inside" method="get" action="/{{$route}}">
                                            <div class="form-group no-margin">
                                                <input type="text" class="form-control" id="blog-search" name="keywords" placeholder="Search..." value = "{{Request::query('keywords')}}">
                                                <button type="submit" style="top:55%;"><i class="fas fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End sidebar widget -->

                                </div> <!-- /.col -->

                                <div class="col-md-12 col-sm-6">

                                    <!-- Begin sidebar widget -->
                                    <div class="sidebar-widget sidebar-categories">
                                        <h3 class="sidebar-heading">Categories</h3>
                                        <ul class="list-unstyled">
                                             @foreach($categories as $category)
                                                <li><a href = "/{{$route}}?category={{$category}}">{{$category}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End sidebar widget -->

                                </div> <!-- /.col -->

                                <div class="col-md-12 col-sm-6">

                                    <!-- Begin sidebar widget -->
                                    <div class="sidebar-widget sidebar-post-list">
                                        <h3 class="sidebar-heading">Most Popular</h3>
                                        <ul class="list-unstyled">
                                            @foreach($otherNews as $oNews)
                                                <li>

                                                    <a href="/view/{{$oNews->slug}}" class="post-thumb bg-image" @if(isset($oNews->newsImages[0])) style="background-image: url(/{{$oNews->newsImages[0]['image']}}); background-position: 50% 50%;"@endif></a>
                                                    <div class="post-data">
                                                        <h5 class="post-title"><a href="/view/{{$oNews->slug}}">{{$oNews->title}}</a></h5>
                                                        <span class="date">{{date("F d, Y", strtotime($oNews->publish_date))}}</span>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End sidebar widget -->

                                </div> <!-- /.col -->

                                {{--<div class="col-md-12 col-sm-6">--}}

                                    {{--<!-- Begin sidebar widget -->--}}
                                    {{--<div class="sidebar-widget sidebar-comments-list">--}}
                                        {{--<h3 class="sidebar-heading">Recent Comments</h3>--}}
                                        {{--<ul class="list-unstyled">--}}
                                            {{--<li class="sidebar-comment-wrap">--}}
                                                {{--<a href="blog-single-no-sidebar.html" class="sidebar-comment-avatar bg-image" style="background-image: url(/img/blog/small/avatar/avatar-1.jpg); background-position: 50% 50%;"></a>--}}
                                                {{--<div class="sidebar-comment-meta">--}}
                                                    {{--<div class="sidebar-comment-data">--}}
                                                        {{--<span class="author">By: <a href="">Martin Vegas</a></span>--}}
                                                        {{--<span class="date">May 26, 2017</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="sidebar-comment">--}}
                                                        {{--<!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->--}}
                                                        {{--<a href="blog-single-no-sidebar.html" data-max-words="15">Aliquet praesent tempor ac dolor aliquet. Risus mi vitae hendrerit orci vitae amet lacus tertis maurum entire satec tatus naite esek. Lacemus ante sider.</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}

                                            {{--<li class="sidebar-comment-wrap">--}}
                                                {{--<a href="blog-single-no-sidebar.html" class="sidebar-comment-avatar bg-image" style="background-image: url(/img/blog/small/avatar/avatar-3.jpg); background-position: 50% 50%;"></a>--}}
                                                {{--<div class="sidebar-comment-meta">--}}
                                                    {{--<div class="sidebar-comment-data">--}}
                                                        {{--<span class="author">By: <a href="">David Bradley</a></span>--}}
                                                        {{--<span class="date">May 26, 2017</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="sidebar-comment">--}}
                                                        {{--<!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->--}}
                                                        {{--<a href="blog-single-no-sidebar.html" data-max-words="15">Laculis molestie rhoncus. Amet maecenas ut orci id dui. Et dui morbi. Non mauris nautis trettis sitamo egret laites mannis seti faktasi norem.</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}

                                            {{--<li class="sidebar-comment-wrap">--}}
                                                {{--<a href="blog-single-no-sidebar.html" class="sidebar-comment-avatar bg-image" style="background-image: url(/img/blog/small/avatar/avatar-2.jpg); background-position: 50% 50%;"></a>--}}
                                                {{--<div class="sidebar-comment-meta">--}}
                                                    {{--<div class="sidebar-comment-data">--}}
                                                        {{--<span class="author">By: <a href="">Kate Dixon</a></span>--}}
                                                        {{--<span class="date">May 26, 2017</span>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="sidebar-comment">--}}
                                                        {{--<!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->--}}
                                                        {{--<a href="blog-single-no-sidebar.html" data-max-words="15">Feugiat fringilla sequi. Anunc adipiscing nisl lorem morbi tincidunt gravida vistrim nocktac fitset muita opimus necta vimavus canipantri levit naidum unimus.</a>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<!-- End sidebar widget -->--}}

                                {{--</div> <!-- /.col -->--}}

                                <div class="col-md-12 col-sm-6">

                                    <!-- Begin sidebar widget -->
                                    <div class="sidebar-widget sidebar-tags">
                                        <h3 class="sidebar-heading">Popular Tags</h3>
                                        <ul>
                                            @foreach($tags as $tag)
                                                <li><a href = "/{{$route}}?tag={{$tag}}">{{$tag}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End sidebar widget -->
                                </div> <!-- /.col -->

                                <div class="col-md-12 col-sm-6">

                                    <!-- Begin sidebar widget -->
                                    <div class="sidebar-widget sidebar-photo-stream">
                                        <h3 class="sidebar-heading"><i class="fab fa-instagram"></i> Instagram</h3>

                                        <!-- Begin thumbnail list
                                        ==========================
                                        * Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
                                        * Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
                                        -->
                                        <ul class="thumb-list col-4 gutter-5">
                                            <li><a href="https://www.instagram.com/p/BjCe8LpFcYS/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/1.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/BjR4roYlN7h/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/2.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/BjXzXP9FCqt/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/3.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/BjZoYl9F1dk/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/4.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/BjcJ3ZilrNd/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/5.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/Bj0fTKwhrp1/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/6.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/Bj20_X-BSsL/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/7.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/BkADoAvB88p/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/8.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/BkAj80uhtoj/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/9.jpg);"></a></li>
                                            <li><a href="https://www.instagram.com/p/BkFMwhThm3I/" target="_blank" class="thumb-list-item bg-image" style="background-image: url(/img/instagram/10.jpg);"></a></li>
                                            <li><a href="#" class="thumb-list-item bg-image" target="_blank" style="background-image: url(/img/instagram/11.jpg);"></a></li>
                                            <li><a href="#" class="thumb-list-item bg-image" target="_blank" style="background-image: url(/img/instagram/12.jpg);"></a></li>

                                        </ul>
                                        <!-- End thumbnail list -->

                                    </div>
                                    <!-- End sidebar widget -->

                                </div> <!-- /.col -->

                                {{--<div class="col-md-12 col-sm-6">--}}

                                    {{--<!-- Begin sidebar widget -->--}}
                                    {{--<div class="sidebar-widget sidebar-subscribe">--}}
                                        {{--<h3 class="sidebar-heading">Subscribe</h3>--}}
                                        {{--<p class="small text-gray">Subscribe to our newsletter and stay updated on the latest news! Do not worry, we will not send spam.</p>--}}

                                        {{--<!-- Begin subscribe form -->--}}
                                        {{--<form id="sidebar-subscribe-form">--}}
                                            {{--<div class="form-group no-margin">--}}
                                                {{--<input type="email" class="form-control" id="sidebar-subscribe" name="subscribe" placeholder="Enter your email address..." required="">--}}
                                                {{--<button type="submit" class="btn btn-primary btn-block btn-lg">Subscribe</button>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                        {{--<!-- End subscribe form -->--}}

                                    {{--</div>--}}
                                    {{--<!-- End sidebar widget -->--}}

                                {{--</div> <!-- /.col -->--}}

                                {{--<div class="col-md-12 col-sm-6">--}}

                                    {{--<!-- Begin sidebar widget -->--}}
                                    {{--<div class="sidebar-widget sidebar-meta">--}}
                                        {{--<h3 class="sidebar-heading">Meta</h3>--}}
                                        {{--<ul class="list-unstyled">--}}
                                            {{--<li><a href="">Log In</a></li>--}}
                                            {{--<li><a href="">Entries RSS</a></li>--}}
                                            {{--<li><a href="">Comments RSS</a></li>--}}
                                            {{--<li><a href="https://wordpress.org/">WordPress.org</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<!-- End sidebar widget -->--}}

                                {{--</div> <!-- /.col -->--}}

                            </div> <!-- /.row -->
                        </div>
                        <!-- End sidebar -->

                    </div> <!-- /.col (Sidebar column) -->

                </div> <!-- /.row -->

            </div> <!-- /.blog-list-inner -->
        </section>
        <!-- End blog list section -->
    @else
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
            {{--<div class="page-header-image parallax-bg-3 bg-image" style="background-image: url(/img/holding.gif);">--}}

                {{--<!-- Element cover--}}
                {{--===================--}}
                {{--* You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".--}}
                {{---->--}}
                {{--<div class="cover bg-transparent-5-dark"></div>--}}

                {{--<video autoplay loop id="error-video">--}}
                  {{--<source src="/img/holding.webp" type="video/mp4">--}}
                    {{--Your browser does not support the video tag.--}}
                    {{--<div class="cover bg-transparent-5-dark"></div>--}}
                {{--</video>--}}

                <img id="error-video" src="/img/holding.webp" alt="Typing Gif" />

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
                    <h1 class="page-header-title">Content Coming Soon</h1>
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
                                        <h1 class="tt-heading-title">Content Coming Soon</h1>
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
    @endif
@stop