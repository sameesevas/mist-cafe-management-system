<?php declare(strict_types=1);

    require '../Database/db_setup.php';

    $loginId = $_POST['loginId'];
    $password = $_POST['password'];

    $userInfo = authenticate_user($loginId, $password);
    
    echo $userInfo; 
?>