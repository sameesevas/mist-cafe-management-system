<?php declare(strict_types=1);

    require '../Database/db_setup.php';

    $name = $_POST['name'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $contact_no = $_POST['contact_no'];
    $loginId = $_POST['loginId'];
    $username = $_POST['loginId'];

    // echo $name;
    // echo $address;
    // echo $password;
    // echo $contact_no;
    // echo $loginId;
    // echo $username;

    register_customer($name, $address, $password, $contact_no, $loginId, $username);
    // sleep(3);
    header("Location: /mcafe/frontend/login.php");
    exit();
?>

