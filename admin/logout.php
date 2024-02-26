<?php
    session_start();
    $_SESSION['user_connected'] = "";
    $_SESSION['user_name'] = "";
    session_destroy();
    header("location: /admin/login.php");
?>