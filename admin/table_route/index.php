<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $sql = "SELECT * FROM table_route
            ORDER BY route_id ASC";

    $statement = $db->prepare($sql);
    $statement->execute();
    $recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of routes</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <h1 class="text-primary">List of routes</h1>
    <table class="table table-striped">
        <caption>List of routes</caption>
        <tr>
            <th scope="col">Route id</th>
            <th scope="col">Route start adress</th>
            <th scope="col">Route end adress</th>
            <th scope="col">Route departure time</th>
            <th scope="col">Route arrival time</th>
            <th scope="col">Route date</th>
            <th scope="col">Route car id</th>
            <th scope="col">Route status id</th>
            <th scope="col">
                <a href="form.php">Add new route</a>
            </th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($recordset as $row) { ?>
        <tr>
            <td><?=$row["route_id"];?></td>
            <td><?=$row["route_startadress"];?></td>
            <td><?=$row["route_endadress"];?></td>
            <td><?=$row["route_departuretime"];?></td>
            <td><?=$row["route_arrivaltime"];?></td>
            <td><?=$row["route_date"];?></td>
            <td><?=$row["car_id"];?></td>
            <td><?=$row["route_status_id"];?></td>
            <td>
                <a href="delete.php?route_id=<?=$row["route_id"];?>" title="Delete">Delete</a>
            </td>
            <td>
                <a href="form.php?route_id=<?=$row["route_id"];?>" title="Edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <footer></footer>
</body>

</html>