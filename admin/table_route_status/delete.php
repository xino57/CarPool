<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";

    if (isset($_GET["route_status_id"]) && $_GET["route_status_id"] > 0)
    {
        $sql = "DELETE FROM table_route_status
        WHERE route_status_id = :route_status_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":route_status_id", $_GET["route_status_id"]);
        $statement->execute();
    }

    header("location:index.php");
?>