 <header class="header header-transparent">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-logo">
                                <a href="index-2.html">
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

                                        <li class="has-mega-menu ">
                                            <a href="#">User <i class="fa fa-chevron-down"></i></a>
                                            <ul class="mega-menu">

                                                <li>
                                                    {{--<a href="#">User Account</a>--}}
                                                    <ul>
                                                        <li><a href="#">Profile Edit</a></li>
                                                        @if(auth()->guest())
                                                        <li><a href="{{route('login')}}">Login Form</a></li>
                                                        <li><a href="{{route('register')}}">Register Form</a></li>
                                                        @endif
                                                        <li><a href="#">Change Password Form</a></li>
                                                    </ul>
                                                </li>
                                            
                                                <li class="hidden-xs">
                                                    <div class="special">
                                                        <a href="{{route('register')}}">Sign Up Now</a>
                                                    </div>
                                                    <!-- /.special-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li >
                                            <a href="/userblog">Blog</a>
                                            
                                        </li>
                                        @if(auth()->check())
                                        <li >
                                            <a href="{{ route('logout') }}">Logout</a>

                                        </li>
                                        @endif
                                        <li >
                                            <a href="{{route('agent.create')}}">Trip Make </a>
                                        </li>
                                            <li >
                                                <a href="{{route('renter.create')}}">Renter Service </a>
                                            </li>

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