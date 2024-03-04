<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";

    if (isset($_GET["car_id"]) && $_GET["car_id"] > 0)
    {
        $sql = "DELETE FROM table_car
        WHERE car_id = :car_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":car_id", $_GET["car_id"]);
        $statement->execute();
    }

    header("location:index.php");
?>