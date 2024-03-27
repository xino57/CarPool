<?php 
session_start();
if (!isset($_SESSION['user_connected']) || $_SESSION['user_connected'] != "OK")
{
    header("location: /pages/login.php");
    exit();
}
?>