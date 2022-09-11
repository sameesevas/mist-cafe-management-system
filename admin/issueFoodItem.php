<?php

    require '../Database/db_setup.php';

    $issueQuantity =  $_POST['issueQuantity'];
    $itemName = $_POST['itemName'];
    $inventoryId = $_POST['inventoryId'];

    //check if item already exists in the food_Menu if not then add otherwise update
    $flag = FoodItemExist($itemName);

    if($flag == true) {

        updateFoodItem($itemName,$issueQuantity,$inventoryId);
    }

    else {

        addToFoodItem($itemName, $issueQuantity, $inventoryId);

    }

?>