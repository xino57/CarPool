<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["user_id"]) && $_POST["user_id"] > 0)
    {
        $sql = "UPDATE table_user SET 
                user_name=:user_name,
                user_firstname=:user_firstname,
                user_mail=:user_mail,
                user_password=:user_password,
                user_phone=:user_phone,
                user_adress=:user_adress,
                user_birthdate=:user_birthdate,
                user_profilepicture=:user_profilepicture,
                user_date=:user_date,
                user_category_id=:user_category_id
                WHERE user_id=:user_id";
    }
    else
    {
        $sql = "INSERT INTO table_user (user_name, user_firstname, user_mail, user_password, user_phone, user_adress, user_birthdate, user_profilepicture, user_date, user_category_id)
                VALUES (:user_name, :user_firstname, :user_mail, :user_password, :user_phone, :user_adress, :user_birthdate, :user_profilepicture, :user_date, :user_category_id)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["user_id"]) && $_POST["user_id"] > 0)
    {
        $statement->bindParam(":user_id", $_POST["user_id"]);
    }
    if (isset($_POST["user_name"]))
    {
        $statement->bindParam(":user_name", $_POST["user_name"]);
    }
    if (isset($_POST["user_firstname"]))
    {
        $statement->bindParam(":user_firstname", $_POST["user_firstname"]);
    }
    if (isset($_POST["user_mail"]))
    {
        $statement->bindParam(":user_mail", $_POST["user_mail"]);
    }
    if (isset($_POST["user_password"]))
    {
        $statement->bindParam(":user_password", $_POST["user_password"]);
    }
    if (isset($_POST["user_phone"]))
    {
        $statement->bindParam(":user_phone", $_POST["user_phone"]);
    }
    if (isset($_POST["user_adress"]))
    {
        $statement->bindParam(":user_adress", $_POST["user_adress"]);
    }
    if (isset($_POST["user_birthdate"]))
    {
        $statement->bindParam(":user_birthdate", $_POST["user_birthdate"]);
    }
    if (isset($_POST["user_profilepicture"]))
    {
        $statement->bindParam(":user_profilepicture", $_POST["user_profilepicture"]);
    }
    if (isset($_POST["user_date"]))
    {
        $statement->bindParam(":user_date", $_POST["user_date"]);
    }
    if (isset($_POST["user_category_id"]))
    {
        $statement->bindParam(":user_category_id", $_POST["user_category_id"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>