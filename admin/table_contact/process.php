<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["contact_id"]) && $_POST["contact_id"] > 0)
    {
        $sql = "UPDATE table_contact SET 
                contact_title=:contact_title,
                contact_content=:contact_content,
                contact_date=:contact_date,
                user_id=:user_id
                WHERE contact_id=:contact_id";
    }
    else
    {
        $sql = "INSERT INTO table_contact (contact_title, contact_content, contact_date, user_id)
                VALUES (:contact_title, :contact_content, :contact_date, :user_id)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["contact_id"]) && $_POST["contact_id"] > 0)
    {
        $statement->bindParam(":contact_id", $_POST["contact_id"]);
    }
    if (isset($_POST["contact_title"]))
    {
        $statement->bindParam(":contact_title", $_POST["contact_title"]);
    }
    if (isset($_POST["contact_content"]))
    {
        $statement->bindParam(":contact_content", $_POST["contact_content"]);
    }
    if (isset($_POST["contact_date"]))
    {
        $statement->bindParam(":contact_date", $_POST["contact_date"]);
    }
    if (isset($_POST["user_id"]))
    {
        $statement->bindParam(":user_id", $_POST["user_id"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>