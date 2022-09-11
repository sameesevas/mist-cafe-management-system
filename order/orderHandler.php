<?php
    // echo $_POST['foodId'];
    require '../Database/db_setup.php';
    session_start();

    $foodId = $_POST['foodId'];

    for ($i = 0; $i < 11; $i++) {
        $temp .= rand(1, 9);
      }
  
     $orderId = $temp; 
     $quantity = '1';
     $bill = $_POST['price'];
     $employeeId = 'employee@gmail.com';
     $customer_id = $_SESSION['UID'];

     $orderingDate = date("DD-MON-YYYY");
    //  echo $orderingDate;
    //  echo $_SESSION['UID'];
     create_order($orderId, $foodId, $bill, $employeeId, $customer_id, $quantity);


    
?>