<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";

    if (isset($_GET["cancel_pattern_id"]) && $_GET["cancel_pattern_id"] > 0)
    {
        $sql = "DELETE FROM table_cancel_pattern
        WHERE cancel_pattern_id = :cancel_pattern_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":cancel_pattern_id", $_GET["cancel_pattern_id"]);
        $statement->execute();
    }

    header("location:index.php");
?>