<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["user_category_id"]) && $_POST["user_category_id"] > 0)
    {
        $sql = "UPDATE table_user_category SET 
                user_category_name=:user_category_name
                WHERE user_category_id=:user_category_id";
    }
    else
    {
        $sql = "INSERT INTO table_user_category (user_category_name)
                VALUES (:user_category_name)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["user_category_id"]) && $_POST["user_category_id"] > 0)
    {
        $statement->bindParam(":user_category_id", $_POST["user_category_id"]);
    }
    if (isset($_POST["user_category_name"]))
    {
        $statement->bindParam(":user_category_name", $_POST["user_category_name"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>