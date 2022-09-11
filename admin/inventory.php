<?php
    session_start();
    require '../Database/db_setup.php';
    // echo $_SESSION['UID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Inventory</title>
</head>
<body>
<div class="container mb-5">
    <?php
        include 'navbar.php';
    ?>
</div>
<br>
<br>
<div class='container mt-10'>
<h2>Inventory</h2>
<?php 
    show_inventory();
?>
</div>


    <div class='container mt-10'>
    <h2>Update Inventory</h2>
    <?php 
        update_inventory();
    ?>
    <!-- <form action='updateInventory.php' method='POST'>
        <label>Select the Item</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </form> -->

    </div>


    <div class='container mt-10'>
        <h2>Add New Item to Inventory</h2>
        <div class='container'>
            <div class="row">
                <div class="col-md-3">
                <form action='addItemToInventory.php' method='POST'>
                    <?php
                        for ($i = 0; $i < 11; $i++) {
                            $temp .= rand(1, 9);
                        }
                    
                            $inventoryId = $temp; 
                    ?>
                <label>Item Name</label>
                <input class='form-control mb-2' type='text' placeholder='Item Name' name='itemName' required/>

                <input class='form-control mb-2 hidden' type='text' placeholder='Item Name' name='inventoryId' value='<?php echo $inventoryId; ?>' >

                <button class='btn btn-primary mt-5' style='margin-top:5px;'>Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

