<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";

    if (isset($_GET["comment_id"]) && $_GET["comment_id"] > 0)
    {
        $sql = "DELETE FROM table_comment
        WHERE comment_id = :comment_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":comment_id", $_GET["comment_id"]);
        $statement->execute();
    }

    header("location:index.php");
?>