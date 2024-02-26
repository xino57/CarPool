<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["car_id"]) && $_POST["car_id"] > 0)
    {
        $sql = "UPDATE table_car SET 
                car_brand=:car_brand,
                car_model=:car_model,
                car_yearmanifacture=:car_yearmanifacture,
                car_numberofplace=:car_numberofplace,
                car_registrationplate=:car_registrationplate,
                car_date=:car_date,
                user_id=:user_id
                WHERE car_id=:car_id";
    }
    else
    {
        $sql = "INSERT INTO table_car (car_brand, car_model, car_yearmanifacture, car_numberofplace, car_registrationplate, car_date, user_id)
                VALUES (:car_brand, :car_model, :car_yearmanifacture, :car_numberofplace, :car_registrationplate, :car_date, :user_id)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["car_id"]) && $_POST["car_id"] > 0)
    {
        $statement->bindParam(":car_id", $_POST["car_id"]);
    }
    if (isset($_POST["car_brand"]))
    {
        $statement->bindParam(":car_brand", $_POST["car_brand"]);
    }
    if (isset($_POST["car_model"]))
    {
        $statement->bindParam(":car_model", $_POST["car_model"]);
    }
    if (isset($_POST["car_yearmanifacture"]))
    {
        $statement->bindParam(":car_yearmanifacture", $_POST["car_yearmanifacture"]);
    }
    if (isset($_POST["car_numberofplace"]))
    {
        $statement->bindParam(":car_numberofplace", $_POST["car_numberofplace"]);
    }
    if (isset($_POST["car_registrationplate"]))
    {
        $statement->bindParam(":car_registrationplate", $_POST["car_registrationplate"]);
    }
    if (isset($_POST["car_date"]))
    {
        $statement->bindParam(":car_date", $_POST["car_date"]);
    }
    if (isset($_POST["user_id"]))
    {
        $statement->bindParam(":user_id", $_POST["user_id"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>