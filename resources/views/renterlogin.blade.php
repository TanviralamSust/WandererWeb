<!DOCTYPE html>
<html>
   <!-- Mirrored from preview.byaviators.com/template/superlist/index-video-transparent-header.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 05:21:46 GMT -->
   @include('head')
   <body class="">
      <div class="page-wrapper">
         <header class="header header-transparent">
            <div class="header-wrapper">
               <div class="container">
                  <div class="header-inner">
                     <div class="header-logo">
                        <a href="#">
                        <img src="assets/img/logo-white.png" alt="Logo">
                        <span>Wanderer</span>
                        </a>
                     </div>
                     <!-- /.header-logo -->
                     <div class="header-content">
                        <div class="header-bottom">
                           <!-- /.header-action -->
                           <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                              <li class="active">
                                 <a href="#"> Home </a>
                              </li>
                              <li >
                                 <a href="{{route('agent.index')}}">Agent Trip</a>
                              </li>
                              <li >
                                 <a href="{{route('renter.index')}}">Renter Service</a>
                              </li>
                              @if(!auth()->check())
                              <li class="has-mega-menu ">
                                 <a href="#">User <i class="fa fa-chevron-down"></i></a>
                                 <ul class="mega-menu">
                                    <li>
                                       <a href="#">User Account</a>

                                       <ul>

                                          <li><a href="/log">Login Form</a></li>
                                          <li><a href="/reg">Register Form</a></li>

                                       </ul>
                                    </li>
                                    <li class="hidden-xs">
                                       <div class="special">
                                          <a href="/reg">Sign Up Now</a>
                                       </div>
                                       <!-- /.special-->
                                    </li>
                                 </ul>
                              </li>
                              @endif
                              <li >
                                 <a href="/userblog">Blog</a>
                              </li>

                              <li >
                                 <a href="/contact">Contact </a>
                              </li>
                              </li>
                              <li >
                                 <a href="{{route('renter.create')}}">Service Rent </a>
                              </li>
                              </li>
                              @if(auth()->check())
                                 <li>
                                    <a href="{{ route('logout') }}">
                                       Logout
                                    </a>

                                 </li>
                              @endif
                           </ul>
                        </div>
                        <!-- /.header-bottom -->
                     </div>
                     <!-- /.header-content -->
                  </div>
                  <!-- /.header-inner -->
               </div>
               <!-- /.container -->
            </div>
            <!-- header-wrapper -->
         </header>
         <div class="main">
            <div class="main-inner">
               <div class="content">
                  <div class="mt-140">
                     <div class="hero-video">
                        <video preload="metadata" autoplay="true" muted="" loop="">
                           <source src="{!! asset('assets/img/tmp/video.mp4') !!}" type="video/mp4">
                        </video>
                        <div class="video-overlay"></div>
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                                 <h1>Wanderer</h1>
                                 <p>A social network for travellers. Where any one can take travelling as a lifestyle not a luxary.</p>
                                 <!-- /.input-group -->
                              </div>
                              <!-- /.col-* -->
                           </div>
                           <!-- /.row -->
                        </div>
                        <!-- /.container -->
                     </div>
                     <!-- /.hero-video -->
                  </div>
                  <div class="container">
                     <div class="page-header">
                        <h1>Most Recent Trip Added By Our Agents ;</h1>
                        <p>List of most recent interesting places and events in our directory submitted <br>by our varified and registered agents. Check out the trending trips.</p>
                     </div>
                     <!-- /.page-header -->
                     <div class="cards-simple-wrapper">
                        <div class="row">
                           @forelse($datas as $data)
                              <div class="col-sm-6 col-md-3">
                                 <div class="card-simple" data-background-image="{{asset('agent/'.$data->photo1)}}">
                                    <div class="card-simple-background">
                                       <div class="card-simple-content">
                                          <h2><a href="{{ route('agent.singleTrip', $data->id) }}">{{$data->title}}">Trip Name Made bye Agent</a></h2>
                                          <div class="card-simple-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                          </div>
                                          <!-- /.card-rating -->
                                          <div class="card-simple-actions">
                                             <a href="#" class="fa fa-bookmark-o"></a>
                                             <a href="listing-detail.html" class="fa fa-search"></a>
                                             <a href="#" class="fa fa-heart-o"></a>
                                          </div>
                                          <!-- /.card-simple-actions -->
                                       </div>
                                       <!-- /.card-simple-content -->
                                       <div class="card-simple-label">{{$data->title}}</div>
                                       <div class="card-simple-price">{{$data->cost}}</div>
                                    </div>
                                    <!-- /.card-simple-background -->
                                 </div>
                                 <!-- /.card-simple -->
                              </div>
                           @empty
                              <h1>no data</h1>
                           @endforelse

                        </div>
                        <!-- /.row -->
                     </div>
                     <div class="page-header">
                        <h1>Most Recent Trip Added By Our Renters ;</h1>
                        <p>List of most recent services in our directory submitted <br>by our varified and registered renters. Check out the trending services.</p>
                     </div>
                     <!-- /.cards-simple-wrapper -->
                     <div class="block background-white fullwidth mt80">
                        <div class="row">
                           @forelse($dataRenter as $dataRenter)
                              <div class="col-sm-6">
                                 <div class="posts">

                                    <div class="post">
                                       <div class="post-image">
                                          <img src="{{asset('renter/'.$dataRenter->photo1)}}" alt="">
                                          <a class="read-more" href="{{ route('renter.singleService', $dataRenter->id) }}">View</a>
                                       </div>
                                       <!-- /.post-image -->
                                       <div class="post-content">
                                          <div class="post-label">{{$dataRenter->cost}}</div>
                                          <!-- /.post-label -->
                                          <div class="post-date">{{$dataRenter->date}}</div>
                                          <!-- /.post-date -->
                                          <h2>{{$dataRenter->title}}</h2>
                                          <p>{{$dataRenter->description}}</p>
                                       </div>
                                       <!-- /.post-content -->
                                    </div>
                                    <!-- /.post-content -->
                                 </div>

                                 <!-- /.post -->
                              </div>

                           @empty
                              <h1>no data</h1>
                        @endforelse
                        <!-- /.posts -->
                        </div>



                     </div>
                     <!-- /.block -->
                     <!-- /.block -->
                     <div class="block background-white background-transparent-image fullwidth">
                        <div class="page-header">
                           <h1>Blogs and trip made by our users...</h1>
                           <p>Check out the best places &amp; events in the city. Each one is worth<br> of visiting. Experience which you never forget.</p>
                        </div>
                        <!-- /.page-header -->
                        <div class="cards-wrapper">
                           <div class="row">
                              <div class="col-sm-8">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card" data-background-image="assets/img/tmp/product-7.jpg">
                                          <div class="card-label">
                                             <a href="/userblogdetails">Coffe</a>
                                          </div>
                                          <!-- /.card-label -->
                                          <div class="card-content">
                                             <h2><a href="/userblogdetails">Name of trip</a></h2>
                                             <div class="card-meta">
                                                <i class="fa fa-map-o"></i> Trip place and details
                                             </div>
                                             <!-- /.card-meta -->
                                             <div class="card-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                             </div>
                                             <!-- /.card-rating -->
                                             <div class="card-actions">
                                                <a href="#" class="fa fa-bookmark-o"></a>
                                                <a href="userblogdetails.blade.php" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                             </div>
                                          </div>
                                          <!-- /.card-content -->
                                       </div>
                                       <!-- /.card -->
                                    </div>
                                    <!-- /.col-* -->
                                 </div>
                                 <!-- /.row -->
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="card" data-background-image="assets/img/tmp/product-4.jpg">
                                          <div class="card-label">
                                             <a href="listing-detail.html">Restaurant</a>
                                          </div>
                                          <!-- /.card-label -->
                                          <div class="card-content">
                                             <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                                             <div class="card-meta">
                                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                                             </div>
                                             <!-- /.card-meta -->
                                             <div class="card-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                             </div>
                                             <!-- /.card-rating -->
                                             <div class="card-actions">
                                                <a href="#" class="fa fa-bookmark-o"></a>
                                                <a href="listing-detail.html" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                             </div>
                                          </div>
                                          <!-- /.card-content -->
                                       </div>
                                       <!-- /.card -->
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="card" data-background-image="assets/img/tmp/product-2.jpg">
                                          <div class="card-label">
                                             <a href="listing-detail.html">Vacation</a>
                                          </div>
                                          <!-- /.card-label -->
                                          <div class="card-content">
                                             <h2><a href="listing-detail.html">Homemade Coffee</a></h2>
                                             <div class="card-meta">
                                                <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                                             </div>
                                             <!-- /.card-meta -->
                                             <div class="card-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                             </div>
                                             <!-- /.card-rating -->
                                             <div class="card-actions">
                                                <a href="#" class="fa fa-bookmark-o marked"></a>
                                                <a href="listing-detail.html" class="fa fa-search"></a>
                                                <a href="#" class="fa fa-heart-o"></a>
                                             </div>
                                          </div>
                                          <!-- /.card-content -->
                                       </div>
                                       <!-- /.card -->
                                    </div>
                                    <!-- /.col-* -->
                                 </div>
                                 <!-- /.row -->
                              </div>
                              <!-- /.col-* -->
                              <div class="col-sm-4">
                                 <div class="card card-tall" data-background-image="assets/img/tmp/product-1.jpg">
                                    <div class="card-label">
                                       <a href="listing-detail.html">Vacation</a>
                                    </div>
                                    <!-- /.card-label -->
                                    <div class="card-content">
                                       <h2><a href="listing-detail.html">Trip to Paris, France</a></h2>
                                       <div class="card-meta">
                                          <i class="fa fa-map-o"></i> 347/26 22th Avenue, NYC USA
                                       </div>
                                       <!-- /.card-meta -->
                                       <div class="card-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </div>
                                       <!-- /.card-rating -->
                                       <div class="card-actions">
                                          <a href="#" class="fa fa-bookmark-o"></a>
                                          <a href="listing-detail.html" class="fa fa-search"></a>
                                          <a href="#" class="fa fa-heart-o marked"></a>
                                       </div>
                                    </div>
                                    <!-- /.card-content -->
                                 </div>
                                 <!-- /.card -->
                              </div>
                              <!-- /.col-* -->
                           </div>
                           <!-- /.row -->
                        </div>
                        <!-- /.cards-wrapper -->
                     </div>
                     <div class="block background-black-light fullwidth">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="box">
                                 <div class="box-icon">
                                    <i class="fa fa-life-ring"></i>
                                 </div>
                                 <!-- /.box-icon -->
                                 <div class="box-content">
                                    <h2>E-mail Support</h2>
                                    <p>We are always here to answer all your questions. Feel free to contact us.</p>
                                    <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                                 </div>
                                 <!-- /.box-content -->
                              </div>
                           </div>
                           <!-- /.col-sm-4 -->
                           <div class="col-sm-4">
                              <div class="box">
                                 <div class="box-icon">
                                    <i class="fa fa-flask"></i>
                                 </div>
                                 <!-- /.box-icon -->
                                 <div class="box-content">
                                    <h2>Always Improving</h2>
                                    <p>Our dedicated team of developers are implementing awesome features.</p>
                                    <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                                 </div>
                                 <!-- /.box-content -->
                              </div>
                           </div>
                           <!-- /.col-sm-4 -->
                           <div class="col-sm-4">
                              <div class="box">
                                 <div class="box-icon">
                                    <i class="fa fa-thumbs-o-up"></i>
                                 </div>
                                 <!-- /.box-icon -->
                                 <div class="box-content">
                                    <h2>Best Quality</h2>
                                    <p>We list only verifiend places and events to provide best content.</p>
                                    <a href="#">Read More <i class="fa fa-chevron-right"></i></a>
                                 </div>
                                 <!-- /.box-content -->
                              </div>
                           </div>
                           <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <div class="block background-white fullwidth">
                        <div class="page-header">
                           <h1>Our Details</h1>
                           <p>Read what our team says about our directory services and products. Do you want to<br> read more? Check out another <a href="#">interesting testimonials</a>.</p>
                        </div>
                        <!-- /.page-header -->
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="testiMonial">
                                 <div class="testimonialImage">
                                    <img src="assets/img/tmp/agent-3" alt="">
                                 </div>
                                 <!-- /.testimonial-image -->
                                 <div class="testimonial-inner">
                                    <div class="testimonial-title">
                                       <h2>Tanvir Alam</h2>
                                       <div class="testimonial-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </div>
                                       <!-- /.testimonial-rating -->
                                    </div>
                                    <!-- /.testimonial-title -->
                                    Good for the travellers
                                    <div class="testimonial-sign">- Backend team</div>
                                    <!-- /.testimonial-sign -->
                                 </div>
                                 <!-- /.testimonial-inner -->
                              </div>
                              <!-- /.testimonial -->
                              <div class="testimonial">
                                 <div class="testimonial-image">
                                    <img src="assets/img/tmp/agent-1.jpg" alt="">
                                 </div>
                                 <!-- /.testimonial-image -->
                                 <div class="testimonial-inner">
                                    <div class="testimonial-title">
                                       <h2>Ifte Araf Islam</h2>
                                       <div class="testimonial-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </div>
                                       <!-- /.testimonial-rating -->
                                    </div>
                                    <!-- /.testimonial-title -->
                                    Our Dream project
                                    <div class="testimonial-sign">- Project Team</div>
                                    <!-- /.testimonial-sign -->
                                 </div>
                                 <!-- /.testimonial-inner -->
                              </div>
                              <!-- /.testimonial -->
                              <div class="testimonial last">
                                 <div class="testimonial-image">
                                    <img src="assets/img/tmp/agent-3.jpg" alt="">
                                 </div>
                                 <!-- /.testimonial-image -->
                                 <div class="testimonial-inner">
                                    <div class="testimonial-title">
                                       <h2>Montaser Hamid</h2>
                                       <div class="testimonial-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </div>
                                       <!-- /.testimonial-rating -->
                                    </div>
                                    <!-- /.testimonial-title -->
                                   Interactive web app.
                                    <div class="testimonial-sign">- Front End Team</div>
                                    <!-- /.testimonial-sign -->
                                 </div>
                                 <!-- /.testimonial-inner -->
                              </div>
                              <!-- /.testimonial -->
                           </div>
                           <!-- /.col-* -->
                           <div class="col-sm-6">
                              <div class="testimonial">
                                 <div class="testimonial-image">
                                    <img src="myassets/agent-4.jpg" alt="">
                                 </div>
                                 <!-- /.testimonial-image -->
                                 <div class="testimonial-inner">
                                    <div class="testimonial-title">
                                       <h2>Raqibul hasan</h2>
                                       <div class="testimonial-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </div>
                                       <!-- /.testimonial-rating -->
                                    </div>
                                    <!-- /.testimonial-title -->
                                 Tried our best to give
                                    <div class="testimonial-sign">- Testing Team</div>
                                    <!-- /.testimonial-sign -->
                                 </div>
                                 <!-- /.testimonial-inner -->
                              </div>
                              <!-- /.testimonial -->
                              <div class="testimonial last">
                                 <div class="testimonial-image">
                                    <img src="assets/img/tmp/agent-5.jpg" alt="">
                                 </div>
                                 <!-- /.testimonial-image -->
                                 <div class="testimonial-inner">
                                    <div class="testimonial-title">
                                       <h2>Sadman Masood </h2>
                                       <div class="testimonial-rating">
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                          <i class="fa fa-star"></i>
                                       </div>
                                       <!-- /.testimonial-rating -->
                                    </div>
                                    <!-- /.testimonial-title -->
                              Will create a social commiunity
                                    <div class="testimonial-sign">- Marketing team</div>
                                    <!-- /.testimonial-sign -->
                                 </div>
                                 <!-- /.testimonial-inner -->
                              </div>
                              <!-- /.testimonial -->
                           </div>
                           <!-- /.col-* -->
                        </div>
                     </div>
                     <div class="block background-secondary fullwidth mt80 mb-80 pt60 pb60">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="contact-info-wrapper">
                                 <h2>Do You Have Any Questions?</h2>
                                 <div class="contact-info">
                                    <span class="contact-info-item">
                                    <i class="fa fa-at"></i>
                                    <span>support@wanderer.com</span>
                                    </span><!-- /.contact-info-item -->
                                    <span class="contact-info-item">
                                    <i class="fa fa-phone"></i>
                                    <span>+123-456-789</span>
                                    </span><!-- /.contact-info-item -->
                                 </div>
                                 <!-- /.contact-info-->
                              </div>
                              <!-- /.contact-info-wrapper -->
                           </div>
                           <!-- /.col-* -->
                        </div>
                        <!-- /.row -->
                     </div>
                  </div>
                  <!-- /.container -->
               </div>
               <!-- /.content -->
            </div>
            <!-- /.main-inner -->
         </div>
         <!-- /.main -->
      @include('footer')
      <!-- /.footer -->
      </div>
      <!-- /.page-wrapper -->
      @include('script')
   </body>
   <!-- Mirrored from preview.byaviators.com/template/superlist/index-video-transparent-header.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 05:21:46 GMT -->
</html>