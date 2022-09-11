<?php declare(strict_types=1); // strict requirement
      error_reporting(E_ERROR | E_PARSE); //suppress-warnings


// functions to create tables 
// end

function check_connection_status() {   // return boolean true-false

   $conn = oci_connect("mcafe", "root", "localhost/xe");
   if (!$conn) {
      $m = oci_error();
      return false;
      exit;
   }

   else {
      return true;
   }
   oci_close($conn);
}

function create_customer_table() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if($conn) {
      // sql to create table
      $sql = "CREATE TABLE Customer( 
               customer_id VARCHAR2(20),
               name VARCHAR2(40),
               address VARCHAR2(60),
               contact_no VARCHAR2(20),
               login_id VARCHAR2(40) UNIQUE,
               login_pass VARCHAR2(30),
               user_name VARCHAR2(20),
               CONSTRAINT Customer_Customer_id_pk PRIMARY KEY(customer_id)
       )";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Customer Table created successfully";
   } 
   else {
      echo "Customer table already exists" ;
   }

   oci_close($conn);

}

function create_employee_table() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if($conn) {
      // sql to create table
      $sql = "CREATE TABLE Employee( 
            Employee_id VARCHAR2(20),
            Name VARCHAR2(40),
            Designation VARCHAR2(20),
            Joining_date DATE,
            Address VARCHAR2(50),
            DOB DATE,
            Contact_no VARCHAR2(40),
            Age NUMBER(3,0),
            Salary NUMBER(7,0),
            Login_id VARCHAR2(40),
            Login_pass VARCHAR2(40),
            User_name VARCHAR2(40),
            Manager_id VARCHAR2(20),
            CONSTRAINT Employee_Employee_id_pk PRIMARY KEY(Employee_id)
       )";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Employee Table created successfully";
   } 
   else {
      echo "Employee table already exists" ;
   }

   oci_close($conn);

}
function create_inventory_table() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if($conn) {
      // sql to create table
      $sql = "CREATE TABLE Inventory( 
               Inventory_id VARCHAR2(20),
               Item_Name VARCHAR2(40),
               Buying_date VARCHAR2(255),
               Buying_quantity NUMBER(5,0),
               Buying_price NUMBER(6,0),
               Issuing_date VARCHAR2(255),
               Issued_quantity NUMBER(5,0),
               Remaining_quantity NUMBER(5,0),	
               CONSTRAINT Inventory_Inventory_id_pk PRIMARY KEY(Inventory_id)
       )";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Inventory Table created successfully";
   } 
   else {
      echo "Inventory table already exists" ;
   }

   oci_close($conn);

}

function create_food_menu_table() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if($conn) {
      // sql to create table
      $sql = "CREATE TABLE Food_menu( 
               Food_id VARCHAR2(20),
               Name VARCHAR2(40),
               Price NUMBER(4,0),
               Availibility VARCHAR2(10),
               Food_unit VARCHAR2(20),
               Required_raw_material VARCHAR2(100),
               CONSTRAINT Food_Menu_Food_id_pk PRIMARY KEY(Food_id)
       )";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Food Menu Table created successfully";
   } 
   else {
      echo "Food menu table already exists" ;
   }

   oci_close($conn);

}

function create_orders_table() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if($conn) {
      // sql to create table
      $sql = "CREATE TABLE Orders( 
               Food_id VARCHAR2(20),
               Order_id VARCHAR2(20),
               Quantity NUMBER(5,0),
               Bill NUMBER(5,0),
               Ordering_Date VARCHAR2(20),
               Employee_id VARCHAR2(20),
               Customer_id VARCHAR2(20),
               CONSTRAINT Orders_Order_id_pk PRIMARY KEY(Order_id)
       )";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Order Table created successfully";
   } 
   else {
      echo "Order table already exists" ;
   }

   oci_close($conn);

}



// authentication functions
// register customer

function register_customer($name, $address, $loginPass, $contact_no, $loginId, $username) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   // random 11 digit cust_id generation 

   for ($i = 0; $i < 11; $i++) {
      $temp .= rand(1, 9);
    }

   $cust_id = $temp; 

   if($conn) {
      // sql to insert table
      $sql = "INSERT INTO Customer(customer_id,name,address,contact_no,login_id,login_pass,user_name)
      VALUES ({$cust_id},'{$name}','{$address}','{$contact_no}','{$loginId}','{$loginPass}','{$username}') 
      ";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Customer created successfully.";
   } 
   else {
      $e = oci_error($stid);
      echo "Error: " . $e['message'];
   }
   oci_close($conn);
}


function authenticate_user($loginId, $password) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");


   if ( $loginId == 'employee@gmail.com' ) {

      $sql = "select Login_pass from Employee WHERE Login_id = '{$loginId}' ";
      $stid = oci_parse($conn, $sql);
      $r = oci_execute($stid);
   
      while($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){
         foreach ($row as $item) {
            if ($item == null) {
               return "Email doesn't exist";
            }
            else {
               if ($item == $password) {
                  // return "Employee Logged in";
                  session_start();
                  $_SESSION['userStatus'] = 'loggedin';
                  $_SESSION['userType'] = 'employee';
                  $_SESSION['UID'] = $loginId; 
                  header("Location: /mcafe/admin/manage1.php");
               }
               else {
                  return "Password didn't match!";
               }
            }
         }
      }
   }

   else {

      $sql = "select Login_pass from Customer WHERE Login_id = '{$loginId}' ";
      $stid = oci_parse($conn, $sql);
      $r = oci_execute($stid);

      while($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){
         foreach ($row as $item) {
            if ($item == null) {
               return "Email doesn't exist";
            }
            else {
               if ($item == $password) {
                  // return "Customer Logged in";
                  session_start();
                  $_SESSION['userStatus'] = 'loggedin';
                  $_SESSION['userType'] = 'customer';
                  $_SESSION['UID'] = $loginId; 
                  
                  header("Location: /mcafe/order/");

               }
               else {
                  return "Password didn't match!";
               }
            }
         }
      }
   }

   return "Email doesn't exist";

   oci_close($conn);

}

function show_inventory () {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT * FROM Inventory ORDER BY ITEM_NAME ASC";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }
   $cnt = 0;
   echo "<table class='table table-striped'><tr>";
   echo "<th>#</th>";
   echo "<th>Inventory ID</th>";
   echo "<th>Item Name</th>";
   echo "<th>Buying Date</th>";
   echo "<th>Buying Quantity</th>";
   echo "<th>Issuing Date</th>";
   echo "<th>Issued Quantity</th>";
   echo "<th>Remaining Quantity</th>";
   echo "</tr>";

   while ( oci_fetch($stid ))
   {
      $inventoryID = oci_result($stid, 'INVENTORY_ID');
      $itemName = oci_result($stid, 'ITEM_NAME');
      $buyingDate = oci_result($stid, 'BUYING_DATE');
      $buyingQuantity = oci_result($stid, 'BUYING_QUANTITY');
      $issuingDate = oci_result($stid, 'ISSUING_DATE');
      $issuedQuantity = oci_result($stid, 'ISSUED_QUANTITY');
      $remainingQuantity = oci_result($stid, 'REMAINING_QUANTITY');
      $cnt++;
      echo "<tr><td scope='row'>$cnt</td>";
      echo "<td> $inventoryID </td>";
      echo "<td> $itemName </td>";
      echo "<td> $buyingDate </td>";
      echo "<td> $buyingQuantity </td>";
      echo "<td> $issuingDate </td>";
      echo "<td> $issuedQuantity </td>";
      echo "<td class='text-center'> $remainingQuantity </td>
      </tr>";
   //    <td> 
   //    <select class='form-control' name='status' id='status'>
   //    <option value='pending'>Pending</option>
   //    <option value='delivered'>Delivered</option>
   //  </select></td>
   }
   oci_close($conn);
   echo "</table>";






}

function show_menu() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT * FROM FOOD_MENU ORDER BY NAME ASC";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }
   $cnt = 0;
   echo "<table class='table table-striped'><tr>";
   echo "<th>#</th>";
   echo "<th>Food ID</th>";
   echo "<th>Food Name</th>";
   echo "<th>Price</th>";
   echo "<th>Availibility</th>";
   echo "<th>Food unit</th>";
   echo "<th>Required Raw Material</th>";
   echo "</tr>";

   while ( oci_fetch($stid ))
   {
      $foodId = oci_result($stid, 'FOOD_ID');
      $foodName = oci_result($stid, 'NAME');
      $price = oci_result($stid, 'PRICE');
      $availability = oci_result($stid, 'AVAILIBILITY');
      $foodUnit = oci_result($stid, 'FOOD_UNIT');
      $requiredRawMaterial = oci_result($stid, 'REQUIRED_RAW_MATERIAL');
      $cnt++;
      echo "<tr><td scope='row'>$cnt</td>";
      echo "<td> $foodId </td>";
      echo "<td> $foodName </td>";
      echo "<td> $price </td>";
      echo "<td> $availability </td>";
      echo "<td> $foodUnit </td>";
      echo "<td class='text-center'> $requiredRawMaterial </td>
      </tr>";
   //    <td> 
   //    <select class='form-control' name='status' id='status'>
   //    <option value='pending'>Pending</option>
   //    <option value='delivered'>Delivered</option>
   //  </select></td>
   }
   oci_close($conn);
   echo "</table>";






}

function create_order($orderId, $foodId, $bill, $employeeId, $customer_id, $quantity) {
   
   $conn = oci_connect("mcafe", "root", "localhost/xe");

   $orderingDate = date("Y/m/d");

   if($conn) {
      // sql to create table
      $sql = "INSERT INTO Orders(order_id,food_id,quantity,bill,employee_id,customer_id,ordering_date)
      VALUES ('{$orderId}','{$foodId}','{$quantity}',{$bill},'{$employeeId}','{$customer_id}','{$orderingDate}') 
      ";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Order placed successfully.";
   } 
   else {
      $e = oci_error($stid);
      echo "Error: " . $e['message'];
   }
   update_menu_table($foodId);               
   header("Location: /mcafe/order/myorder.php");
   oci_close($conn);

}

function update_menu_table($foodId) {
   $conn = oci_connect("mcafe", "root", "localhost/xe");

   $fetchAvailability = get_new_availability($foodId);
   $newAvailability = (int) $fetchAvailability;
   $newAvailability = $newAvailability - 1 ;

   if($conn) {
      // sql to create table
      $sql = "UPDATE FOOD_MENU SET AVAILIBILITY = $newAvailability WHERE food_id = $foodId ";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Menu updated successfully.";
   } 
   else {
      $e = oci_error($stid);
      echo "Error: " . $e['message'];
   }
   oci_close($conn);
}

function get_new_availability($foodId) {
   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT AVAILIBILITY FROM FOOD_MENU WHERE FOOD_ID = $foodId";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }

   while ( oci_fetch($stid ))
   {
      $newAvailability = oci_result($stid, 'AVAILIBILITY');
      
   }
   oci_close($conn);
   return $newAvailability;
}

function show_customer_orders($UID) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT * FROM ORDERS INNER JOIN FOOD_MENU ON FOOD_MENU.FOOD_ID = ORDERS.FOOD_ID WHERE CUSTOMER_ID = '$UID' ORDER BY ORDERING_DATE DESC ";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }
   $cnt = 0;
   echo "<table class='table table-striped'><tr>";
   echo "<th>#</th>";
   echo "<th>Order ID</th>";
   echo "<th>Food Name</th>";
   echo "<th>Bill</th>";
   echo "<th>Quantity</th>";
   echo "<th>Ordering Date</th>";
   echo "</tr>";

   while ( oci_fetch($stid ))
   {
      $orderId = oci_result($stid, 'ORDER_ID');
      $foodName = oci_result($stid, 'NAME');
      $bill = oci_result($stid, 'BILL');
      $quantity = oci_result($stid, 'QUANTITY');
      $orderingDate = oci_result($stid, 'ORDERING_DATE');
      $cnt++;
      echo "<tr><td scope='row'>$cnt</td>";
      echo "<td> $orderId </td>";
      echo "<td> $foodName </td>";
      echo "<td> $bill </td>";
      echo "<td> $quantity </td>";
      echo "<td class=''> $orderingDate </td>
      </tr>";

   }
   oci_close($conn);
   echo "</table>";
}

function show_all_orders() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT * FROM ORDERS INNER JOIN FOOD_MENU ON FOOD_MENU.FOOD_ID = ORDERS.FOOD_ID ORDER BY ORDERING_DATE DESC ";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }
   $cnt = 0;
   echo "<table class='table table-striped'><tr>";
   echo "<th>#</th>";
   echo "<th>Order ID</th>";
   echo "<th>Food Name</th>";
   echo "<th>Bill</th>";
   echo "<th>Quantity</th>";
   echo "<th>Ordering Date</th>";
   echo "</tr>";

   while ( oci_fetch($stid ))
   {
      $orderId = oci_result($stid, 'ORDER_ID');
      $foodName = oci_result($stid, 'NAME');
      $bill = oci_result($stid, 'BILL');
      $quantity = oci_result($stid, 'QUANTITY');
      $orderingDate = oci_result($stid, 'ORDERING_DATE');
      $cnt++;
      echo "<tr><td scope='row'>$cnt</td>";
      echo "<td> $orderId </td>";
      echo "<td> $foodName </td>";
      echo "<td> $bill </td>";
      echo "<td> $quantity </td>";
      echo "<td class=''> $orderingDate </td>
      </tr>";

   }
   oci_close($conn);
   echo "</table>";
}



function insert_into_inventory ($itemName, $inventoryId) {
   
   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if($conn) {
      // sql to create table
      $sql = "INSERT INTO Inventory(Inventory_id,Item_name,Remaining_quantity,buying_quantity,issued_quantity)
      VALUES ('{$inventoryId}','{$itemName}',0,0,0) 
      ";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Added to inventory successfully.";
   } 
   else {
      $e = oci_error($stid);
      echo "Error: " . $e['message'];
   }
   update_menu_table($foodId);               
   header("Location: /mcafe/admin/inventory.php");
   oci_close($conn);

}

function update_inventory () {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT * FROM Inventory ORDER BY ITEM_NAME ASC";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }
   $cnt = 0;
   echo "<table class='table table-striped'><tr>";
   echo "<th>#</th>";
   echo "<th>Item Name</th>";
   echo "<th>Add Quantity</th>";
   echo "</tr>";

   while ( oci_fetch($stid ))
   {
      $inventoryID = oci_result($stid, 'INVENTORY_ID');
      $itemName = oci_result($stid, 'ITEM_NAME');
      $buyingDate = oci_result($stid, 'BUYING_DATE');
      $buyingQuantity = oci_result($stid, 'BUYING_QUANTITY');
      $issuingDate = oci_result($stid, 'ISSUING_DATE');
      $issuedQuantity = oci_result($stid, 'ISSUED_QUANTITY');
      $remainingQuantity = oci_result($stid, 'REMAINING_QUANTITY');
      $cnt++;
      echo "<tr><td scope='row'>$cnt</td>";
      echo "<td> $itemName </td>";
      echo "<td class=''> <form action='../admin/updateInventory.php' method='POST'> <input type='text' name='inventoryId' step='1' placeholder='$inventoryID' value='$inventoryID' hidden> <input name='addQuantity' type='number' step='1' placeholder='$buyingQuantity' value='$buyingQuantity'> <button class='btn btn-info'>Update</button> </form> </td>
      </tr>";
   //    <td> 
   //    <select class='form-control' name='status' id='status'>
   //    <option value='pending'>Pending</option>
   //    <option value='delivered'>Delivered</option>
   //  </select></td>
   }
   oci_close($conn);
   echo "</table>";






}

function update_inventory_item ($inventoryId, $addQuantity) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   $getCurrentRemainingQuantity = get_current_inventory_remaining_quantity($inventoryId);
   // echo $getCurrentRemainingQuantity;
   $newQuantity = $getCurrentRemainingQuantity + (int) $addQuantity;

   $buyingDate = date("Y/m/d");

   if($conn) {
      // sql to create table
      $sql = "UPDATE INVENTORY SET BUYING_QUANTITY = $addQuantity, BUYING_DATE = '$buyingDate', REMAINING_QUANTITY = $newQuantity WHERE inventory_id = $inventoryId";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Updated successfully.";
   } 
   else {
      $e = oci_error($stid);
      echo "Error: " . $e['message'];
   }
   // update_menu_table($foodId);               
   header("Location: /mcafe/admin/inventory.php");
   oci_close($conn);

}

function get_current_inventory_remaining_quantity ($inventoryId) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT REMAINING_QUANTITY FROM INVENTORY WHERE INVENTORY_ID = $inventoryId";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }

   while ( oci_fetch($stid ))
   {
      $remainingQuantity = oci_result($stid, 'REMAINING_QUANTITY');
      
   }
   oci_close($conn);
   // echo $remainingQuantity;
   return $remainingQuantity;
}


function issue_food_item() {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT * FROM Inventory ORDER BY ITEM_NAME ASC";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }
   $cnt = 0;
   echo "<table class='table table-striped'><tr>";
   echo "<th>#</th>";
   echo "<th>Item Name</th>";
   echo "<th>Remaining Quantity</th>";
   echo "<th>Issue Quantity</th>";
   echo "</tr>";

   while ( oci_fetch($stid ))
   {
      $inventoryID = oci_result($stid, 'INVENTORY_ID');
      $itemName = oci_result($stid, 'ITEM_NAME');
      $buyingDate = oci_result($stid, 'BUYING_DATE');
      $buyingQuantity = oci_result($stid, 'BUYING_QUANTITY');
      $issuingDate = oci_result($stid, 'ISSUING_DATE');
      $issuedQuantity = oci_result($stid, 'ISSUED_QUANTITY');
      $remainingQuantity = oci_result($stid, 'REMAINING_QUANTITY');
      $cnt++;
      echo "<tr><td scope='row'>$cnt</td>";
      echo "<td> $itemName </td>";
      echo "<td> $remainingQuantity </td>";
      
      echo "<td class=''> <form action='../admin/issueFoodItem.php' method='POST'> <input type='text' name='itemName' step='1' placeholder='' value='$itemName' hidden> <input type='text' name='inventoryId' step='1' placeholder='' value='$inventoryID' hidden> <input name='issueQuantity' type='number' step='1' placeholder='' value=''> <button class='btn btn-info'>Issue</button> </form> </td>
      </tr>";
   //    <td> 
   //    <select class='form-control' name='status' id='status'>
   //    <option value='pending'>Pending</option>
   //    <option value='delivered'>Delivered</option>
   //  </select></td>
   }
   oci_close($conn);
   echo "</table>";
}

function addToFoodItem($itemName, $issueQuantity,$inventoryId) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   for ($i = 0; $i < 11; $i++) {
      $temp .= rand(1, 9);
    }

   $foodId = $temp; 

   $price = rand(5,100);


   if($conn) {
      // sql to create table
      $sql = "INSERT INTO FOOD_MENU (Food_Id,name,Availibility,Price,Food_Unit,Required_raw_material)
      VALUES ('{$foodId}','{$itemName}',$issueQuantity,$price,'pcs','Food Ingredients') 
      ";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Added to Food Menu successfully.";
   } 
   else {
      $e = oci_error($stid);
      echo "Error: " . $e['message'];
   }
   update_inventory_after_adding_to_food_menu($inventoryId,$issueQuantity);               
   header("Location: /mcafe/admin/menu.php");
   oci_close($conn);

}

function update_inventory_after_adding_to_food_menu($inventoryId,$issueQuantity) {
      //adjust remaining quantity
      $conn = oci_connect("mcafe", "root", "localhost/xe");

      $getCurrentRemainingQuantity = get_current_inventory_remaining_quantity($inventoryId);
      // echo $getCurrentRemainingQuantity;
      $newQuantity = $getCurrentRemainingQuantity - (int) $issueQuantity;

      $issuingDate = date("Y/m/d");

      if($conn) {
         // sql to create table
         $sql = "UPDATE INVENTORY SET ISSUED_QUANTITY = $issueQuantity, ISSUING_DATE = '$issuingDate', REMAINING_QUANTITY = $newQuantity WHERE inventory_id = $inventoryId";
      }

      $stid = oci_parse($conn,$sql);
      $val =  oci_execute($stid);
      if ($val) {
         echo "Updated successfully.";
      } 
      else {
         $e = oci_error($stid);
         echo "Error: " . $e['message'];
      }
      // update_menu_table($foodId);               
      // header("Location: /mcafe/admin/inventory.php");
      oci_close($conn);

}



function FoodItemExist($itemName) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT * FROM FOOD_MENU WHERE NAME = '$itemName' ";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }

   while ( oci_fetch($stid ))
   {
      $flag = oci_result($stid, 'FOOD_ID');
      
   }
   oci_close($conn);
   // echo $remainingQuantity;
   if($flag) {
      return true;
   }
   else {
      return false;
   }
   
}

function updateFoodItem ($itemName, $issueQuantity, $inventoryId ) {

   $conn = oci_connect("mcafe", "root", "localhost/xe");

   $getCurrentAvailableFoodQuantity = get_current_food_availibility($itemName);
   // echo $getCurrentRemainingQuantity;
   $newQuantity = $getCurrentAvailableFoodQuantity + (int) $issueQuantity;

   // $issuingDate = date("Y/m/d");

   if($conn) {
      // sql to create table
      $sql = "UPDATE FOOD_MENU SET AVAILIBILITY = $newQuantity WHERE name = '$itemName'";
   }

   $stid = oci_parse($conn,$sql);
   $val =  oci_execute($stid);
   if ($val) {
      echo "Updated successfully.";
   } 
   else {
      $e = oci_error($stid);
      echo "Error: " . $e['message'];
   }
   update_inventory_after_adding_to_food_menu($inventoryId,$issueQuantity);
   // update_menu_table($foodId);               
   header("Location: /mcafe/admin/menu.php");
   oci_close($conn);

}

function get_current_food_availibility($itemName) {
   $conn = oci_connect("mcafe", "root", "localhost/xe");

   if ($conn){

      $sql = "SELECT AVAILIBILITY FROM FOOD_MENU WHERE NAME = '$itemName' ";
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);

   }

   while ( oci_fetch($stid ))
   {
      $availibility = oci_result($stid, 'AVAILIBILITY');
      
   }
   oci_close($conn);
   // echo $remainingQuantity;
   return $availibility;
}




?>