<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    if (isset($_POST["route_id"]) && $_POST["route_id"] > 0)
    {
        $sql = "UPDATE table_route SET 
                route_start=:route_start,
                route_endadress=:route_endadress,
                route_departuretime=:route_departuretime,
                route_arrivaltime=:route_arrivaltime,
                route_date=:route_date,
                car_id=:car_id
                route_status_id=:route_status_id
                WHERE route_id=:route_id";
    }
    else
    {
        $sql = "INSERT INTO table_route (route_start, route_endadress, route_departuretime, route_arrivaltime, route_date, car_id, route_status_id)
                VALUES (:route_start, :route_endadress, :route_departuretime, :route_arrivaltime, :route_date, :car_id, :route_status_id)";
    }

    $statement = $db->prepare($sql);
    if (isset($_POST["route_id"]) && $_POST["route_id"] > 0)
    {
        $statement->bindParam(":route_id", $_POST["route_id"]);
    }
    if (isset($_POST["route_start"]))
    {
        $statement->bindParam(":route_start", $_POST["route_start"]);
    }
    if (isset($_POST["route_endadress"]))
    {
        $statement->bindParam(":route_endadress", $_POST["route_endadress"]);
    }
    if (isset($_POST["route_departuretime"]))
    {
        $statement->bindParam(":route_departuretime", $_POST["route_departuretime"]);
    }
    if (isset($_POST["route_arrivaltime"]))
    {
        $statement->bindParam(":route_arrivaltime", $_POST["route_arrivaltime"]);
    }
    if (isset($_POST["route_date"]))
    {
        $statement->bindParam(":route_date", $_POST["route_date"]);
    }
    if (isset($_POST["car_id"]))
    {
        $statement->bindParam(":car_id", $_POST["car_id"]);
    }
    if (isset($_POST["route_status_id"]))
    {
        $statement->bindParam(":route_status_id", $_POST["route_status_id"]);
    }
    
    $statement->execute();
    header("location:index.php");
?>