<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/blog-standard-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 05:24:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="assets/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>Wanderer -Trip added by our Agents</title>
</head>


<body class="">

<div class="page-wrapper">

    <header class="header">
        <div class="header-wrapper">
            <div class="container">
                <div class="header-inner">
                    <div class="header-logo">
                        <a href="#">
                            <img src="assets/img/logo.png" alt="Logo">
                            <span>Wonderer</span>
                        </a>
                    </div><!-- /.header-logo -->


                    <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                        <li >
                            <a href="agent-index">Home <i class="fa fa-chevron-down"></i></a>
                        </li>

                    </ul>
                </div><!-- /.header-bottom -->
            </div><!-- /.header-content -->
        </div><!-- /.header-inner -->
    </header><!-- /.header -->




    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">



                    <div class="page-title">
                        <h1>{{$data->title}}</h1>
                    </div><!-- /.page-title -->

                    <div class="posts post-detail">



                        <div class="Wrapper">
                            <img src="{{asset('agent/'.$data->photo1)}}" alt="Smiley face" height="250" width="250" />
                            <img src="{{asset('agent/'.$data->photo2)}}" alt="Smiley face" height="250" width="250" />
                            <img src="{{asset('agent/'.$data->photo3)}}" alt="Smiley face" height="250" width="250" />
                            <img src="{{asset('agent/'.$data->photo4)}}" alt="Smiley face" height="250" width="250" />
                        </div>


                        <div class="post-meta clearfix">




                            <div class="post-meta-author">By <a href="#">Eric Yorick</a></div><!-- /.post-meta-author -->
                            <div class="post-meta-date">08/24/2015</div><!-- /.post-meta-date -->
                            <div class="post-meta-comments"><i class="fa fa-comments"></i> <a href="#">3 comments</a></div><!-- /.post-meta-comments -->
                        </div><!-- /.post-meta -->



                        <div class="post-content">
                            <p class='drop-cap'> "{{$data->description}}"</p>
                        </div><!-- /.post-content -->



                        <div class="post-meta-tags clearfix">
                            Tags:
                            <ul>
                                <li class="tag"><a href="#">Coffee</a></li>
                                <li class="tag"><a href="#">Breakfast</a></li>
                                <li class="tag"><a href="#">Wine</a></li>
                                <li class="tag"><a href="#">Healthy Food</a></li>
                                <li class="tag"><a href="#">Raw Food</a></li>
                            </ul>
                        </div><!-- /.post-meta -->

                        <h2>For Booking:</h2>
                        <h3>contact Num: +880-2736183748"</h3>

                        <h2>Write a Comment</h2>
                        <form class="background-white p20 add-comment" method="post" action="#">

                            <p>Required fields are marked <span class="required">*</span></p>

                            <div class="row">

                                <div class="form-group col-sm-12">
                                    <label for="">Comment  <span class="required">*</span></label>
                                    <textarea class="form-control" rows="5" id="" required></textarea>
                                </div><!-- /.col-sm-12 -->

                                <div class="form-group col-sm-4">
                                    <label for="">Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="" required>
                                </div><!-- /.col-sm-4 -->

                                <div class="form-group col-sm-4">
                                    <label for="">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control" id="" required>
                                </div><!-- /.col-sm-4 -->

                                <div class="form-group col-sm-4">
                                    <label for="">Website</label>
                                    <input type="text" class="form-control" id="">
                                </div><!-- /.col-sm-4 -->




                            </div><!-- /.row -->
                        </form>

                    </div><!-- /.post -->


                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>About Wanderer</h2>

                        <p>Social networking app and website</p>
                    </div><!-- /.col-* -->

                    <div class="col-sm-4">
                        <h2>Contact Information</h2>

                        <p>
                            Your Street SUST, Dept of CSE, Sylhet<br>
                            +1-123-456-789, <a href="#">nihal@wanderer.com</a>
                        </p>
                    </div><!-- /.col-* -->

                    <div class="col-sm-4">
                        <h2>Stay Connected</h2>

                        <ul class="social-links nav nav-pills">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul><!-- /.header-nav-social -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-left">
                    &copy; 2015 All rights reserved. Created by <a href="#">Aviators</a>.
                </div><!-- /.footer-bottom-left -->

                <div class="footer-bottom-right">
                    <ul class="nav nav-pills">
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                        <li><a href="contact-1.html">Contact</a></li>
                    </ul><!-- /.nav -->
                </div><!-- /.footer-bottom-right -->
            </div><!-- /.container -->
        </div>
    </footer><!-- /.footer -->

</div><!-- /.page-wrapper -->

<script src="assets/js/jquery.js" type="text/javascript"></script>
<script src="assets/js/map.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="assets/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="assets/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="assets/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="assets/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="assets/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="assets/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="assets/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assets/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="assets/js/superlist.js" type="text/javascript"></script>

</body>

<!-- Mirrored from preview.byaviators.com/template/superlist/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 05:24:05 GMT -->
</html>
