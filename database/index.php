<?php
    require __DIR__ . '/db_setup.php';
    error_reporting(E_ERROR | E_PARSE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIST Cafeteria</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">MIST Cafeteria Database</h1>
    </div>

    <footer class="footer">
        <div class="container">
               <h4>Database status:</h4>
            <?php 

                if( check_connection_status() ) {
                    echo "Oracle Connected";
                };
            ?>
        </div>

        <div class="container"> 
              <?php
                create_customer_table();              
              ?>  
        </div>
        
        <div class="container"> 
              <?php
                create_employee_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_inventory_table();              
              ?>  
        </div>

        <div class="container"> 
              <?php
                create_food_menu_table();              
              ?>  
        </div>

        <div class="container"> 
              <?php
                create_orders_table();              
              ?>  
        </div>

        <!--

        <div class="container"> 
              <?php
                create_kamiz_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_transaction_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_customer_mobile_no_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_employee_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_employee_mobile_no_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_shirt_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_pant_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_order_management_table();              
              ?>  
        </div>
        <div class="container"> 
              <?php
                create_catalogue_table();              
              ?>  
        </div> -->
    </footer>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>