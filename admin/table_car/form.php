<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $car_id = ""; 
    $car_brand = ""; 
    $car_model = ""; 
    $car_yearmanifacture = ""; 
    $car_numberofplace = "";
    $car_registrationplate = "";
    $car_date = "";
    $user_id = "";

    if (isset($_GET["car_id"]) && $_GET["car_id"] > 0)
    {
        $sql = "SELECT * FROM table_car 
                WHERE car_id = :car_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":car_id", $_GET["car_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $car_id = $row["car_id"]; 
            $car_brand = $row["car_brand"]; 
            $car_model = $row["car_model"]; 
            $car_yearmanifacture = $row["car_yearmanifacture"]; 
            $car_numberofplace = $row["car_numberofplace"]; 
            $car_registrationplate = $row["car_registrationplate"]; 
            $car_date = $row["car_date"]; 
            $user_id = $row["user_id"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of cars</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="car_id">Enter car id</label>
                <input class="form-control" id="car_id" placeholder="" name="car_id"
                    value="<?=$car_id;?>">
            </div>
        
            <div class="form-group">
                <label for="car_brand">Enter car brand</label>
                <input class="form-control" id="car_brand" placeholder="" name="car_brand"
                    value="<?=$car_brand;?>">
            </div>

            <div class="form-group">
                <label for="car_model">Enter car model</label>
                <input class="form-control" id="car_model" placeholder="" name="car_model"
                    value="<?=$car_model;?>">
            </div>

            <div class="form-group">
                <label for="car_yearmanifacture">Enter year manifacture</label>
                <input class="form-control" id="car_yearmanifacture" placeholder="" name="car_yearmanifacture"
                    value="<?=$car_yearmanifacture;?>">
            </div>

            <div class="form-group">
                <label for="car_numberofplace">Enter car number of place</label>
                <input class="form-control" id="car_numberofplace" placeholder="" name="car_numberofplace"
                    value="<?=$car_numberofplace;?>">
            </div>

            <div class="form-group">
                <label for="car_registrationplate">Enter registration plate</label>
                <input class="form-control" id="car_registrationplate" placeholder="" name="car_registrationplate"
                    value="<?=$car_registrationplate;?>">
            </div>

            <div class="form-group">
                <label for="car_date">Enter car date</label>
                <input class="form-control" id="car_date" placeholder="" name="car_date"
                    value="<?=$car_date;?>">
            </div>

            <div class="form-group">
                <label for="user_id">Enter user id</label>
                <input class="form-control" id="user_id" placeholder="" name="user_id"
                    value="<?=$user_id;?>">
            </div>

            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>