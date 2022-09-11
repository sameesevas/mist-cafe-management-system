<?php

    require '../Database/db_setup.php';

    $itemName = $_POST['itemName'];
    $inventoryId = $_POST['inventoryId'];
    

    insert_into_inventory($itemName,$inventoryId);
?>