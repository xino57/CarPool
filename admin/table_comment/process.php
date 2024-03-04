<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["comment_id"]) && $_POST["comment_id"] > 0)
    {
        $sql = "UPDATE table_comment SET 
                comment_stars=:comment_stars,
                comment_title=:comment_title,
                comment_content=:comment_content,
                comment_date=:comment_date
                WHERE comment_id=:comment_id";
    }
    else
    {
        $sql = "INSERT INTO table_comment (comment_stars, comment_title, comment_content, comment_date)
                VALUES (:comment_stars, :comment_title, :comment_content, :comment_date)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["comment_id"]) && $_POST["comment_id"] > 0)
    {
        $statement->bindParam(":comment_id", $_POST["comment_id"]);
    }
    if (isset($_POST["comment_stars"]))
    {
        $statement->bindParam(":comment_stars", $_POST["comment_stars"]);
    }
    if (isset($_POST["comment_title"]))
    {
        $statement->bindParam(":comment_title", $_POST["comment_title"]);
    }
    if (isset($_POST["comment_content"]))
    {
        $statement->bindParam(":comment_content", $_POST["comment_content"]);
    }
    if (isset($_POST["comment_date"]))
    {
        $statement->bindParam(":comment_date", $_POST["comment_date"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>