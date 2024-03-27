<?php
$db_host = "localhost";
$db_name = "carpool";
$user_name = "root";
$user_password = "";
try
{
    $db = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8", $user_name, $user_password);
}
catch(Exception $e)
{
    die("Erreur: " . $e->getMessage());
}
?>