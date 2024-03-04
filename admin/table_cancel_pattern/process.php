<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["cancel_pattern_id"]) && $_POST["cancel_pattern_id"] > 0)
    {
        $sql = "UPDATE table_cancel_pattern SET 
                cancel_pattern_content=:cancel_pattern_content,
                cancel_pattern_date=:cancel_pattern_date,
                route_id=:route_id
                WHERE cancel_pattern_id=:cancel_pattern_id";
    }
    else
    {
        $sql = "INSERT INTO table_cancel_pattern (cancel_pattern_content, cancel_pattern_date, route_id)
                VALUES (:cancel_pattern_content, :cancel_pattern_date, :route_id)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["cancel_pattern_id"]) && $_POST["cancel_pattern_id"] > 0)
    {
        $statement->bindParam(":cancel_pattern_id", $_POST["cancel_pattern_id"]);
    }
    if (isset($_POST["cancel_pattern_content"]))
    {
        $statement->bindParam(":cancel_pattern_content", $_POST["cancel_pattern_content"]);
    }
    if (isset($_POST["cancel_pattern_date"]))
    {
        $statement->bindParam(":cancel_pattern_date", $_POST["cancel_pattern_date"]);
    }
    if (isset($_POST["route_id"]))
    {
        $statement->bindParam(":route_id", $_POST["route_id"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>