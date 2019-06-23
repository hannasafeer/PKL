<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Viral Story - Viral News Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Breaking News Area -->
                            <div class="top-breaking-news-area">
                                <div id="breakingNewsTicker" class="ticker">
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                        <li><a href="#">Welcome to Colorlib Family.</a></li>
                                        <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Social Info Area-->
                            <div class="top-social-info-area">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="viral-news-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{url('/')}}"><img src="img/core-img/logo.png" alt="Logo"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{url('catagory')}}">Top 10</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('catagory')}}">Catagories</a></li>
                                            <li><a href="{{url('single-post')}}">Single Article</a></li>
                                            <li><a href="{{url('quize-article')}}">Quize Article</a></li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{url('/')}}">Home</a></li>
                                                    <li><a href="{{url('catagory')}}">Catagories</a></li>
                                                    <li><a href="{{url('single-post')}}">Single Article</a></li>
                                                    <li><a href="{{url('quize-article')}}">Quize Article</a></li>
                                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/')}}">Funny</a></li>
                                    <li><a href="{{url('/')}}">Videos</a></li>
                                    <li><a href="{{url('/')}}">Don’t Miss</a></li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('catagory')}}">Catagories</a></li>
                                                <li><a href="{{url('single-post')}}">Single Article</a></li>
                                                <li><a href="{{url('quize-article')}}">Quize Article</a></li>
                                                <li><a href="{{url('contact')}}">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('catagory')}}">Catagories</a></li>
                                                <li><a href="{{url('single-post')}}">Single Article</a></li>
                                                <li><a href="{{url('quize-article')}}">Quize Article</a></li>
                                                <li><a href="{{url('contact')}}">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('catagory')}}">Catagories</a></li>
                                                <li><a href="{{url('single-post')}}">Single Article</a></li>
                                                <li><a href="{{url('quize-article')}}">Quize Article</a></li>
                                                <li><a href="{{url('contact')}}">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('catagory')}}">Catagories</a></li>
                                                <li><a href="{{url('single-post')}}">Single Article</a></li>
                                                <li><a href="{{url('quize-article')}}">Quize Article</a></li>
                                                <li><a href="{{url('contact')}}">Contact</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Search Button -->
                                <div class="search-btn">
                                    <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Search Form -->
                                <div class="viral-search-form">
                                    <form id="search" action="#" method="get">
                                        <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>

                                <!-- Video Post Button -->
                                <div class="add-post-button">
                                    <a href="#" class="btn add-post-btn">Add Post</a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Viral News Breadcumb Area Start ##### -->
    <div class="viral-news-breadcumb-area section-padding-50">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <!-- Breadcumb Area -->
                <div class="col-12 col-md-4">
                    <h3>Articles</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Trending</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Articles</li>
                        </ol>
                    </nav>
                </div>

                <!-- Add Widget -->
                <div class="col-12 col-md-8">
                    <div class="add-widget">
                        <a href="#"><img src="img/bg-img/add2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Viral News Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post-details">
                            <div class="post-thumb">
                                <img src="img/bg-img/18.jpg" alt="">
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <h2 class="post-title">This Is How Notebooks Who Travels Around The World Look Like</h2>
                                <div class="post-meta">

                                    <!-- Post Details Meta Data -->
                                    <div class="post-details-meta-data mb-50 d-flex align-items-center justify-content-between">
                                        <!-- Post Author & Date -->
                                        <div class="post-authors-date">
                                            <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                            <p class="post-date">5 Hours Ago</p>
                                        </div>
                                        <!-- View Comments -->
                                        <div class="view-comments">
                                            <p class="views">1281 Views</p>
                                            <a href="#comments" class="comments">3 comments</a>
                                        </div>
                                    </div>

                                    <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellentesque lectus et accumsan aliquam. Fusce lobortis cursus quam, id mattis sapien. Aliquam erat volutpat. Aliquam placerat, est quis sagittis tincidunt, ipsum eros posuere mi, ut finibus quam sem eget ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec commodo quis enim ac auctor. Ut et mollis felis, sit amet ultricies est. Suspendisse sed faucibus tortor.</p>

                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi. Quisque quam quam, porta in tellus sed, scelerisque volutpat purus. Fusce a dapibus diam, et porttitor lectus. Integer quis lectus scelerisque, tincidunt neque vel, viverra enim. Integer condimentum semper ornare. Duis eu dolor ac massa venenatis euismod semper vitae libero. Aenean nec fringilla sem. Pellentesque in tortor condimentum ante sagittis sodales quis sit amet lectus. Aenean dolor ante, pulvinar vitae egestas in, viverra eget diam. Fusce quis massa id magna viverra dictum. Vestibulum dolor risus, elementum non urna congue, varius placerat nibh. Cras bibendum ullamcorper dui lacinia pellentesque. Donec eget neque facilisis, consectetur urna vitae, rhoncus mi. Vestibulum fringilla efficitur sem, at dictum nisl rhoncus at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                    <p>Mauris tristique est nec felis tristique fermentum. Curabitur ex tortor, malesuada sollicitudin lectus quis, luctus egestas lectus. Cras posuere accumsan felis a porta. Nulla cursus a ligula at commodo. Mauris dui magna, pellentesque vel metus iaculis, venenatis fringilla felis. Aenean in velit sit amet mauris ultrices aliquam.</p>
                                </div>
                            </div>
                            <!-- Login with Facebook to post comments -->
                            <div class="login-with-facebook my-5">
                                <a href="#">Login with Facebook to post comments</a>
                            </div>
                        </div>

                        <!-- Related Articles Area -->
                        <div class="related-articles-">
                            <h4 class="mb-70">Related Articles</h4>

                            <div class="row">
                                <!-- Single Post -->
                                <div class="col-12">
                                    <div class="single-blog-post style-3 style-5 d-flex align-items-center mb-50">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Data -->
                                        <div class="post-data">
                                            <a href="#" class="post-catagory">Finance</a>
                                            <a href="#" class="post-title">
                                                <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                            </a>
                                            <div class="post-meta">
                                                <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                                <p class="post-date">5 Hours Ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Post -->
                                <div class="col-12">
                                    <div class="single-blog-post style-3 style-5 d-flex align-items-center mb-50">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Data -->
                                        <div class="post-data">
                                            <a href="#" class="post-catagory">Finance</a>
                                            <a href="#" class="post-title">
                                                <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                            </a>
                                            <div class="post-meta">
                                                <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                                <p class="post-date">5 Hours Ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix" id="comments">
                            <h4 class="title mb-70">1 comment</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/t1.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">Christian Williams</a>
                                            <a href="#" class="post-date">April 15, 2018</a>
                                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="img/bg-img/t2.jpg" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-author">Sandy Doe</a>
                                                    <a href="#" class="post-date">April 15, 2018</a>
                                                    <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/t3.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">Christian Williams</a>
                                            <a href="#" class="post-date">April 15, 2018</a>
                                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div class="post-a-comment-area">
                            <h4 class="mb-70">Leave a comment</h4>

                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Name*">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" class="form-control" id="email" placeholder="Email*">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="subject" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn viral-btn mt-30" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget mb-70">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Trending Articles Widget -->
                        <div class="treading-articles-widget mb-70">
                            <h4>Trending Articles</h4>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/15.jpg" alt=""></a>
                                    <span class="serial-number">01.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>This Is How Notebooks Of An Artist Who Travels Around The World Look</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/16.jpg" alt=""></a>
                                    <span class="serial-number">02.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Artist Recreates People’s Childhood Memories With Realistic Dioramas</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Trending Articles -->
                            <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                                    <span class="serial-number">03.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Artist Recreates People’s Childhood Memories With Realistic Dioramas</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Michael Smithson</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget mb-70">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>

                        <!-- Latest Comments -->
                        <div class="latest-comments-widget">
                            <h4>Latest Comments</h4>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="img/bg-img/t1.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Jamie Smith</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="img/bg-img/t2.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Tania Heffner</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>

                            <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="img/bg-img/t3.jpg" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="#"><span>Sandy Doe</span> on Facebook is offering facial recognition...</a>
                                    <p>06:34 am, April 14, 2018</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="{{url('/')}}"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <ul>
                                    <li class="active"><a href="#">Top 10</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Funny</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Celebs</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Submit a video</a></li>
                                    <li><a href="#">Don’tMiss</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- Newsletter Widget -->
                        <div class="newsletter-widget">
                            <h4>Sign up to <br>our newsletter</h4>
                            <form action="#" method="post">
                                <input type="text" name="text" placeholder="Name">
                                <input type="email" name="email" placeholder="Email">
                                <button type="submit" class="btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Latest articles</h4>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Sed a elit euismod augue semper congue sit amet ac.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Latest Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/6.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
