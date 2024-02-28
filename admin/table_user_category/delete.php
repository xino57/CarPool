<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";

    if (isset($_GET["user_category_id"]) && $_GET["user_category_id"] > 0)
    {
        $sql = "DELETE FROM table_user_category
        WHERE user_category_id = :user_category_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":user_category_id", $_GET["user_category_id"]);
        $statement->execute();
    }

    header("location:index.php");
?>