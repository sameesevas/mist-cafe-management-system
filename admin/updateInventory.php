<?php

    require '../Database/db_setup.php';

    update_inventory_item($_POST['inventoryId'], $_POST['addQuantity']);

?>