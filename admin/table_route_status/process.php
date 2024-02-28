<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["route_status_id"]) && $_POST["route_status_id"] > 0)
    {
        $sql = "UPDATE table_route_status SET 
                route_status_name=:route_status_name
                WHERE route_status_id=:route_status_id";
    }
    else
    {
        $sql = "INSERT INTO table_route_status (route_status_name)
                VALUES (:route_status_name)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["route_status_id"]) && $_POST["route_status_id"] > 0)
    {
        $statement->bindParam(":route_status_id", $_POST["route_status_id"]);
    }
    if (isset($_POST["route_status_name"]))
    {
        $statement->bindParam(":route_status_name", $_POST["route_status_name"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>