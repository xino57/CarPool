<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $route_id = ""; 
    $route_startadress = ""; 
    $route_endadress = ""; 
    $route_departuretime = ""; 
    $route_arrivaltime = "";
    $route_date = "";
    $car_id = "";
    $route_status_id = "";

    if (isset($_GET["route_id"]) && $_GET["route_id"] > 0)
    {
        $sql = "SELECT * FROM table_route 
                WHERE route_id = :route_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":route_id", $_GET["route_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $route_id = $row["route_id"]; 
            $route_startadress = $row["route_startadress"]; 
            $route_endadress = $row["route_endadress"]; 
            $route_departuretime = $row["route_departuretime"]; 
            $route_arrivaltime = $row["route_arrivaltime"]; 
            $route_date = $row["route_date"]; 
            $car_id = $row["car_id"];
            $route_status_id = $row["route_status_id"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of routes</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="route_id">Enter route id</label>
                <input class="form-control" id="route_id" placeholder="" name="route_id"
                    value="<?=$route_id;?>">
            </div>
        
            <div class="form-group">
                <label for="route_startadress">Enter route start adress</label>
                <input class="form-control" id="route_startadress" placeholder="" name="route_startadress"
                    value="<?=$route_startadress;?>">
            </div>

            <div class="form-group">
                <label for="route_endadress">Enter route end adress</label>
                <input class="form-control" id="route_endadress" placeholder="" name="route_endadress"
                    value="<?=$route_endadress;?>">
            </div>

            <div class="form-group">
                <label for="route_departuretime">Enter route departure time</label>
                <input class="form-control" id="route_departuretime" placeholder="" name="route_departuretime"
                    value="<?=$route_departuretime;?>">
            </div>

            <div class="form-group">
                <label for="route_arrivaltime">Enter route arrival time</label>
                <input class="form-control" id="route_arrivaltime" placeholder="" name="route_arrivaltime"
                    value="<?=$route_arrivaltime;?>">
            </div>

            <div class="form-group">
                <label for="route_date">Enter route date</label>
                <input class="form-control" id="route_date" placeholder="" name="route_date"
                    value="<?=$route_date;?>">
            </div>

            <div class="form-group">
                <label for="car_id">Enter route car id</label>
                <input class="form-control" id="car_id" placeholder="" name="car_id"
                    value="<?=$car_id;?>">
            </div>

            <div class="form-group">
                <label for="route_status_id">Enter route status id</label>
                <input class="form-control" id="route_status_id" placeholder="" name="route_status_id"
                    value="<?=$route_status_id;?>">
            </div>

            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>