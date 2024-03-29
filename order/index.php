<?php
 error_reporting(E_ERROR | E_PARSE);
?>
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
    <title>MIST Cafeteria</title>
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

        <?php
            include 'navbar.php';
        ?>
        <section class="home-section home-fade home-full-height" id="home">
            <div class="hero-slider">
                <ul class="slides">
                    <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider3.png&quot;);">
                        <div class="titan-caption">
                            <div class="caption-content">

                                <div class="font-alt mb-30 titan-title-size-1">
                                    Military Institute of Science and Technology (MIST)</div>
                                <div class="font-alt mb-30 titan-title-size-1">
                                    Technology for Advancement</div>
                                <div class="font-alt mb-30 titan-title-size-4"> Center Of Excellence</div>
                                <div class="font-alt mb-40 titan-title-size-1">Visit MIST Official Website</div><a class="section-scroll btn btn-border-w btn-round" href="https://mist.ac.bd/">GO</a>
                            </div>
                        </div>
                    </li>
                    <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider1.png&quot;);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1">Military Institute of Science and Technology (MIST)</div>
                                <div class="font-alt mb-30 titan-title-size-1">
                                    Technology for Advancement</div>
                                <div class="font-alt mb-30 titan-title-size-4"> Center Of Excellence</div>
                                <div class="font-alt mb-40 titan-title-size-1"> Visit MIST Official Website</div><a class="section-scroll btn btn-border-w btn-round" href="https://mist.ac.bd/">GO</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="main">
            <section class="module-small">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">MENU</h2>
                        </div>
                    </div>

                    <div class="row multi-columns-row">
                                <?php
                                $conn = oci_connect("mcafe", "root", "localhost/xe");

                                if ($conn){
                            
                                $sql = "SELECT * FROM FOOD_MENU ORDER BY NAME ASC";
                                $stid = oci_parse($conn, $sql);
                                oci_execute($stid);
                            
                                }

                                while ( oci_fetch($stid ))
                                {
                                $foodId = oci_result($stid, 'FOOD_ID');
                                $name = oci_result($stid, 'NAME');
                                $price = oci_result($stid, 'PRICE');
                                $foodUnit = oci_result($stid, 'FOOD_UNIT');
                                $availibility = oci_result($stid, 'AVAILIBILITY');
                                    
                                echo "<div class='col-sm-6 col-md-3 col-lg-3'>";
                                echo "<div class='shop-item'>";
                                echo "<div class='shop-item-image'><img src='assets/images/shop/${name}.jpg' alt='Lunch' />";
                                if( $availibility != 0) {
                                    echo "<form action='orderHandler.php' method='POST'>";
                                    echo "<input type='text' placeholder='foodId' name='foodId' value='${foodId}' hidden/>";
                                    echo "<input type='text' placeholder='price' name='price' value='${price}' hidden/>";
                                    echo "<div class='shop-item-detail'><button type='submit' class='btn btn-round btn-b'><span class='icon-basket'>Place order</span></button></div>
                                    ";
                                    echo "</form>";
                                }
                                else {
                                    echo "<div class='shop-item-detail'><a class='btn btn-round btn-b'><span class='icon-basket' onclick=''>Item Not Available</span></a></div>
                                    ";
                                }

                                echo "</div>";
                                echo "<h4 class='shop-item-title font-alt'><a href='#'>${name}</a></h4>&#2547 ${price}";
                                echo "<h4 class='shop-item-title font-alt'><a href='#'>${availibility} ${foodUnit} available</a>";
                                echo "</div>";
                                echo "</div>";
                                }
                                oci_close($conn);
                        ?>
                    </div>

                </div>
            </section>
            <section class="module module-video bg-dark-30" data-background="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2>
                        </div>
                    </div>
                </div>
                <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=IqmcSpQqenY', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
            </section>

            <hr class="divider-w">

            <hr class="divider-d">
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
                                <li><a href="index.php">Home</a></li>

                                <li><a href="checkout.php">Checkout</a></li>

                                <li><a href="about.php">About Us</a></li>
                                <li><a href="login.php">Join Us</a>
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
    <script src="assets/js/main.js"></script>
</body>

</html>