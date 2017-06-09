<html>
    <head>
            <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('../bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

            @yield('gaya')
    </head>
    <body>

<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="glyphicon glyphicon-menu-hamburger"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">
                    <img src="../img/Logo1.png"  height="25"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Product</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    @if (Auth::guest())
                    <li align="center">
                        <center><a class="btn btn-danger navbar-btn" href="{{ url('/login') }}">Masuk</a></center>
                    </li>
                    @else
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @if( Auth::user()->name == 'admin')
                                        <li>
                                            <a href="/dashboard">Dashboard</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="/profile/{{ Auth::user()->id }}">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                         @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



        @yield('content')

 <footer>
            <div class="footer" id="footer" style="background-color:#000000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li>
                                    <div class="input-append newsletter-box text-center">
                                        <input type="text" class="full text-center" placeholder="Email ">
                                        <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social">
                                <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->

            <div class="footer-bottom" style="background-color:#000000" >
                <div class="container">
                    <p align="center" > Copyright © Footer E-commerce Plugin 2014. All right reserved. class </p>
                    <div class="pull-right">
                        <ul class="nav nav-pills payments">
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                            <li><i class="fa fa-cc-paypal"></i></li>
                        </ul>
                    </div>
                </div>



    </body>

@yield('skrip')
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>



</html>
