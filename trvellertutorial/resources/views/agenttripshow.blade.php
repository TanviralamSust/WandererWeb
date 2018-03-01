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
                        <a href="agentlogin">
                            <img src="assets/img/logo.png" alt="Logo">
                            <span>Wonderer</span>
                        </a>
                    </div><!-- /.header-logo -->


                            <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                                <li >
                                    <a href="agentlogin">Home <i class="fa fa-chevron-down"></i></a>
                                </li>

                            </ul>
                        </div><!-- /.header-bottom -->
                    </div><!-- /.header-content -->
                </div><!-- /.header-inner -->
    </header><!-- /.header -->




    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">



                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
                                <h1>Trip Added by our varified agents</h1>
                            </div><!-- /.page-title -->

                            <div class="posts">
                                @forelse($datas as $data)
                                    <div class="post">
                                        <div class="post-image">
                                            <img src="{{asset('agent/'.$data->photo1)}}" alt="A Clockwork Origin">
                                            <a class="read-more" href="{{ route('agent.singleTrip', $data->id) }}">View</a>
                                        </div><!-- /.post-image -->

                                        <div class="post-content">
                                            <h2><a href="{{ route('agent.singleTrip', $data->id) }}">{{$data->title}}"</a></h2>
                                            <p>{{$data->description}}</p>
                                        </div><!-- /.post-content -->

                                        <div class="post-meta clearfix">
                                            <div class="post-meta-author">By <a href="{{ route('agent.singleTrip', $data->id) }}">Eric Yorick</a></div><!-- /.post-meta-author -->
                                            <div class="post-meta-date">08/24/2015</div><!-- /.post-meta-date -->
                                            <div class="post-meta-comments"><i class="fa fa-comments"></i> <a href="{{ route('agent.singleTrip', $data->id) }}">3 comments</a></div><!-- /.post-meta-comments -->
                                            <div class="post-meta-more"><a href="{{ route('agent.singleTrip', $data->id) }}">Read More <i class="fa fa-chevron-right"></i></a></div><!-- /.post-meta-more -->
                                        </div><!-- /.post-meta -->
                                    </div><!-- /.post -->
                                @empty
                                    <h1>no data</h1>
                                @endforelse





                            <div class="pager">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a>2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div><!-- /.pagination -->


                        </div><!-- /.content -->
                    </div><!-- /.col-* -->

            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>About Wondere</h2>


                    <div class="col-sm-4">
                        <h2>Contact Information</h2>

                        <p>
                            Your Street Sust, Dept of cse, Sylhet,Bangladesh<br>
                            +1-123-456-789, <a href="#">nihal@wanderer.com</a>
                        </p>
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

                        <li><a href="#">Terms &amp; Conditions</a></li>
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

<!-- Mirrored from preview.byaviators.com/template/superlist/blog-standard-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 05:24:04 GMT -->
</html>
