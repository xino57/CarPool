<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $route_status_id = ""; 
    $route_status_name = ""; 

    if (isset($_GET["route_status_id"]) && $_GET["route_status_id"] > 0)
    {
        $sql = "SELECT * FROM table_route_status 
                WHERE route_status_id = :route_status_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":route_status_id", $_GET["route_status_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $route_status_id = $row["route_status_id"]; 
            $route_status_name = $row["route_status_name"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of route status</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="route_status_id">Enter route status id</label>
                <input class="form-control" id="route_status_id" placeholder="" name="route_status_id"
                    value="<?=$route_status_id;?>">
            </div>
        
            <div class="form-group">
                <label for="route_status_name">Enter route status name</label>
                <input class="form-control" id="route_status_name" placeholder="" name="route_status_name"
                    value="<?=$route_status_name;?>">
            </div>
            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>