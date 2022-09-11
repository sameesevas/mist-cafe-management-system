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

    <title>Food Menu</title>
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
<h2>Food Menu</h2>
<?php 
    show_menu();
?>
</div>
        <div class='container mt-10'>
        <h2>Add to Food Menu</h2>
        <?php 
        ?>
            <div>
                <?php
                issue_food_item();
                ?>
            </div>
        </div>

</body>
</html>
