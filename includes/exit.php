<?php
    session_start();
    unset($_SESSION['email']);
    session_unset();
    session_destroy();
    $path = "../index.php";
    header('Location : $path');
    exit;
?>