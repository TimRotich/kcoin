<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>K-Coin</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/logo.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout" style="background-color: white;">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading1.gif" alt="#"  height="20px" width="20px;"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div  class="head_top">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="/"><img src="images/logo1.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            @if (Route::has('login'))
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        @auth
                                        <a href="{{ url('/dashboard') }}" class="nav-link" > Home  </a>
                                    </li>
                                    <li class="nav-item ">
                                        @else
                                            <a href="{{ route('login') }}" class="nav-link" ><b>Login</b></a>
                                    </li>
                                    <li class="nav-item">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="nav-link" ><b>Register</b></a>
                                    </li>
                                    @endif
                                    @endauth
                                    <li class="nav-item">
                                        <a href="/about" class="nav-link">ABOUT  K-Coin</a>
                                    </li>
                                </ul>
                                @endauth
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
        <!-- end header -->
        <!-- banner -->
        <section class="banner_main">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-md-6">
                        <div class="text-bg">
                            <h1>Digital Kenyan Coin</h1>
                            <p>The Kenyan Pride. We give you a platform to appreciate the Kenyan Coin.
                            Join K-Coin and trade our coin. The coin keeps on appreciating. </p>
                            <a href="/register">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-img">
                            <figure><img src="images/world1.png" alt="#"/></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>
<!-- end banner -->

<!-- contact -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contact us</h2>
                    <span>Do you have any enquiries? Contact us below</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <form class="main_form ">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="form_contril" placeholder="Name " type="text" name="Name ">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="Phone Number" type="text" name=" Phone Number">
                        </div>
                        <div class="col-md-12">
                            <input class="form_contril" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="cont">
                        <h3> <strong class="multi"> Embracing the Market through technology</strong><br>
                            Let's embrace the Kenyan Coin
                        </h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright 2019 All Right Reserved By<a href="https://www.jobskeagency.com/"> JobsKeAgency Company</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>

