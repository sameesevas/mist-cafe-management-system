<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>MIST Cafeteria - Login</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="index.html" style="width: auto;">MIST Cafeteria</a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <!-- <li><a href="products.html">Products</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="checkout.html">Checkout</a></li>


                        <li><a href="login.html">Join Us</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="login.html">Login Or Register</a></li>
                                <li><a href="myid.html">My Account</a></li>
                            </ul> -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <hr class="divider-w">
        <section class="module bg-dark-60 shop-page-header" data-background="assets/images/shop/login-page-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Login Or register</h2>
                        <div class="module-subtitle font-serif">....</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1 mb-sm-40" id="logindiv">
                        <h4 class="font-alt">Login</h4>
                        <hr class="divider-w mb-10">
                        <form class="form " id="login-form" method="post" action="index.php">
                            <div class="form-group">
                                <input class="form-control" id="lmail" type="text" name="E-mail" placeholder="E-mail" />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="lpassword" type="password" name="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-round btn-b">Login</button>
                            </div>
                            <div class="form-group"><a href="">Forgot Password?</a></div>
                        </form>
                    </div>
                    <div class="col-sm-5" id="model-signup">
                        <h4 class="font-alt">Register</h4>
                        <hr class="divider-w mb-10">
                        <form class="form" action="" id="signup-form" method="">
                            <div class="form-group">
                                <input class="form-control" id="suemail" type="text" name="ID" placeholder="ID" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="suemail" type="text" name="name" placeholder="Name" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="suemail" type="text" name="address" placeholder="Address" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="suemail" type="text" name="phone" placeholder="Phone No.S" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="suemail" type="text" name="email" placeholder="Email" required />
                            </div>

                            <div class="form-group">
                                <input class="form-control" id="supassword" type="password" name="password" placeholder="Password" required/>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-block btn-round btn-b" href="login.html"> Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Site footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p> Military Institute of Science and Technology (MIST) (Bengali: মিলিটারি ইনস্টিটিউট অফ সায়েন্স অ্যান্ড টেকনোলজি) is a public engineering institute in Bangladesh located at Mirpur Cantonment, Dhaka. MIST is run by the Bangladesh
                            Armed Forces, and is affiliated with Bangladesh University of Professionals. Though a military institution, both military and civilian students study in MIST.</p>
                    </div>

                    <div class="col-xs-6 col-md-3">


                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a></li>

                            <li><a href="checkout.html">Checkout</a></li>

                            <li><a href="about.html">About Us</a></li>
                            <li><a href="login.html">Join Us</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="login.html">Login Or Register</a></li>
                                    <li><a href="myid.html">My Account</a></li>
                                </ul> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                            <a href="#">MIST</a>.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="https://www.facebook.com/mist.ac.bd/"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-firestore.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>


    <script src="auth.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>