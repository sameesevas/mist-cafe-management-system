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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        body {
            font-family: 'Roboto', sans-serif;
        }
        
        * {
            margin: 0;
            padding: 0;
        }
        
        i {
            margin-right: 10px;
        }
        /*------------------------*/
        
        input:focus,
        button:focus,
        .form-control:focus {
            outline: none;
            box-shadow: none;
        }
        
        .form-control:disabled,
        .form-control[readonly] {
            background-color: #fff;
        }
        
        .table tr,
        .table tr td {
            vertical-align: middle;
        }
        
        .button-container {
            display: flex;
            align-items: center;
        }
        
        .button-container .form-control {
            max-width: 80px;
            text-align: center;
            display: inline-block;
            margin: 0px 5px;
        }
        
        #myTable .form-control {
            width: auto;
            display: inline-block;
        }
        
        .cart-qty-plus,
        .cart-qty-minus {
            width: 38px;
            height: 38px;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }
        
        .cart-qty-plus:hover,
        .cart-qty-minus:hover {
            background-color: #5161ce;
            color: #fff;
        }
        
        .img-prdct {
            width: 50px;
            height: 50px;
            background-color: #5161ce;
            border-radius: 4px;
        }
        
        .img-prdct img {
            width: 100%;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        
        <?php
            include 'navbar.php';
        ?>

        <section class="module bg-dark-60 shop-page-header" data-background="assets/images/shop/checkout-page-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">MILITARY INSTITUTE OF SCIENCE AND TECHNOLOGY (MIST) </h2>
                        <div class="module-subtitle font-serif"> Technology for Advancement </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module">
            <div class="container">

                <hr class="divider-w pt-20">
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped table-border checkout-table">
                            <tbody>
                                <tr>
                                    <th class="hidden-xs">Item</th>
                                    <th>Description</th>
                                    <th class="hidden-xs">Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                                <tr>
                                    <td class="hidden-xs">
                                        <a href="#"><img src="assets/images/shop/product-14.jpg" alt="Accessories Pack" /></a>
                                    </td>
                                    <td>
                                        <h5 class="product-title font-alt">Accessories Pack</h5>
                                    </td>
                                    <td class="hidden-xs">
                                        <h5 class="product-title font-alt">£20.00</h5>
                                    </td>
                                    <td>
                                        <input class="form-control" type="number" name="" value="1" max="50" min="1" />
                                    </td>
                                    <td>
                                        <h5 class="product-title font-alt">£20.00</h5>
                                    </td>
                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="hidden-xs">
                                        <a href="#"><img src="assets/images/shop/product-13.jpg" alt="Men’s Casual Pack" /></a>
                                    </td>
                                    <td>
                                        <h5 class="product-title font-alt">Men’s Casual Pack</h5>
                                    </td>
                                    <td class="hidden-xs">
                                        <h5 class="product-title font-alt">£20.00</h5>
                                    </td>
                                    <td>
                                        <input class="form-control" type="number" name="" value="1" max="50" min="1" />
                                    </td>
                                    <td>
                                        <h5 class="product-title font-alt">£20.00</h5>
                                    </td>
                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input class="form-control" type="text" id="" name="" placeholder="Coupon code" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <button class="btn btn-round btn-g" type="submit">Apply</button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-3">
                        <div class="form-group">
                            <button class="btn btn-block btn-round btn-d pull-right" type="submit">Update Cart</button>
                        </div>
                    </div>
                </div>
                <hr class="divider-w">
                <div class="row mt-70">
                    <div class="col-sm-5 col-sm-offset-7">
                        <div class="shop-Cart-totalbox">
                            <h4 class="font-alt">Cart Totals</h4>
                            <table class="table table-striped table-border checkout-table">
                                <tbody>
                                    <tr>
                                        <th>Cart Subtotal :</th>
                                        <td>£40.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Total :</th>
                                        <td>£2.00</td>
                                    </tr>
                                    <tr class="shop-Cart-totalprice">
                                        <th>Total :</th>
                                        <td>£42.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-lg btn-block btn-round btn-d" type="submit">Proceed to
                                Checkout</button>
                        </div>
                    </div>
                </div> -->
                <div class="container-fluid mt-5">
                    <h2 class="mb-5 text-center">Bucket List</h2>
                    <div class="row justify-content-center">
                        <div class="">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th class="text-right"><span id="amount" class="amount">Amount</span> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="assets/images/shop/product-7.jpg"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Chicken Khichuri</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control" value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="55" class="price form-control" disabled>
                                            </td>
                                            <td align="right">&#2547 <span id="amount" class="amount">0</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="assets/images/shop/product-10.jpg"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Samucha</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control" value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="10" class="price form-control" disabled>
                                            </td>
                                            <td align="right">&#2547 <span id="amount" class="amount">0</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="assets/images/shop/product-8.jpg"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Dim Khichuri</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control" value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="45" class="price form-control" disabled>
                                            </td>
                                            <td align="right">&#2547 <span id="amount" class="amount">0</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="assets/images/shop/product-9.jpg"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Samucha</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control" value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="10" class="price form-control" disabled>
                                            </td>
                                            <td align="right">&#2547 <span id="amount" class="amount">0</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td align="right"><strong>TOTAL = &#2547 <span id="total" class="total">0</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-block btn-round btn-d" type="submit">Proceed to
                    Checkout</button>

            </div>
        </section>>
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
    <script>
        // -----------------for-Shopping-cart-------------
        $(document).ready(function() {
            update_amounts();
            $('.qty, .price').on('keyup keypress blur change', function(e) {
                update_amounts();
            });
        });

        function update_amounts() {
            var sum = 0.0;
            $('#myTable > tbody  > tr').each(function() {
                var qty = $(this).find('.qty').val();
                var price = $(this).find('.price').val();
                var amount = (qty * price)
                sum += amount;
                $(this).find('.amount').text('' + amount);
            });
            $('.total').text(sum);
        }



        //----------------for quantity-increment-or-decrement-------
        var incrementQty;
        var decrementQty;
        var plusBtn = $(".cart-qty-plus");
        var minusBtn = $(".cart-qty-minus");
        var incrementQty = plusBtn.click(function() {
            var $n = $(this)
                .parent(".button-container")
                .find(".qty");
            $n.val(Number($n.val()) + 1);
            update_amounts();
        });

        var decrementQty = minusBtn.click(function() {
            var $n = $(this)
                .parent(".button-container")
                .find(".qty");
            var QtyVal = Number($n.val());
            if (QtyVal > 0) {
                $n.val(QtyVal - 1);
            }
            update_amounts();
        });
    </script>
</body>

</html>