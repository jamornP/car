<?php
    session_start();
    if(!$_SESSION['login']){
        header("location: /car/pages/auth/login.php");
        exit;
    }
?>