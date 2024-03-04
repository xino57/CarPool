<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";

    if (isset($_GET["route_id"]) && $_GET["route_id"] > 0)
    {
        $sql = "DELETE FROM table_route
        WHERE route_id = :route_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":route_id", $_GET["route_id"]);
        $statement->execute();
    }

    header("location:index.php");
?>