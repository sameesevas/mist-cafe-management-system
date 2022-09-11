<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MIST Cafeteria Dashboard</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
        <nav class="mdc-list mdc-drawer-menu">
                    <a href="index.html" class="brand-logo">
                        <img src="images/favicons/apple-icon-72x72.png" style="padding-left: 50px;" alt="logo">
                    </a>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="manage1.php">
                                 Dashboard
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="total_orders.php">
                                 Orders
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="Menu.php">
                                 Menu
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="inventory.php">
                                 Inventory
                            </a>
                        </div>
                        <div class="mdc-list-item mdc-drawer-item">
                            <a class="mdc-drawer-link" href="index.php">
                                 LogOut
                            </a>
                        </div>
                        
                        
                        
                    </nav>
        </aside>
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
            
        </header>
        <!-- partial -->
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
            



            <!-- partial:partials/_footer.html -->
            <footer>
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                            <span class="text-muted">Copyright © 2018 <a class="text-green" href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex justify-content-end">
                            <span class="mt-0 text-right">Hand-crafted &amp; made with <i class="mdi mdi-heart text-red"></i></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
    </div>
    <!-- body wrapper -->
    <!-- plugins:js -->
    <script src="node_modules/material-components-web/dist/material-components-web.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/progressbar.js/dist/progressbar.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/misc.js"></script>
    <script src="js/material.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>