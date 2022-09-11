<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
?>

<nav class="navbar navbar-custom navbar-fixed-top navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="./index.php" style="width: auto;">MIST Cafeteria</a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./index.php">Home</a></li>
                        <!-- <li><a href="products.html">Products</a></li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li> -->
                        <li><a href="./about.php">About Us</a></li>
                        <li><a href="./myorder.php">My Orders</a></li>

                        <?php
                            if( $_SESSION['userStatus'] == 'loggedin' ) {
                                
                                echo "<li class='nav-item'>";
                                echo "<a class='nav-link' href='../frontend/logout.php'> Logout </a>";
                                echo "</li>";
                            }
                            else {
                                echo "<li class='nav-item'>";
                                echo "<a class='nav-link' href='../frontend/login.php'> Logout </a>";
                                echo "</li>";
                            }
                        ?>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="login.html">Login Or Register</a></li>
                                <li><a href="myid.html">My Account</a></li>
                            </ul> -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>