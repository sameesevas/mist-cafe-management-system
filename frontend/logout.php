<?php
    session_start();
    $_SESSION['userStatus'] = 'loggedout';
    $_SESSION['userType'] = 'loggedout';
    $_SESSION['UID'] = null;

    header("Location: /mcafe/frontend");

?>