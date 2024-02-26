<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $sql = "SELECT * FROM table_car
            ORDER BY car_id ASC";

    $statement = $db->prepare($sql);
    $statement->execute();
    $recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of cars</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <h1 class="text-primary">List of cars</h1>
    <table class="table table-striped">
        <caption>List of cars</caption>
        <tr>
            <th scope="col">Car id</th>
            <th scope="col">Car brand</th>
            <th scope="col">Car model</th>
            <th scope="col">Car year manifacture</th>
            <th scope="col">Car number of place</th>
            <th scope="col">Car registration plate</th>
            <th scope="col">Car date</th>
            <th scope="col">Car user id</th>
            <th scope="col">
                <a href="form.php">Add new car</a>
            </th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($recordset as $row) { ?>
        <tr>
            <td><?=$row["car_id"];?></td>
            <td><?=$row["car_brand"];?></td>
            <td><?=$row["car_model"];?></td>
            <td><?=$row["car_yearmanifacture"];?></td>
            <td><?=$row["car_numberofplace"];?></td>
            <td><?=$row["car_registrationplate"];?></td>
            <td><?=$row["car_date"];?></td>
            <td><?=$row["user_id"];?></td>
            <td>
                <a href="delete.php?car_id=<?=$row["car_id"];?>" title="Delete">Delete</a>
            </td>
            <td>
                <a href="form.php?car_id=<?=$row["car_id"];?>" title="Edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <footer></footer>
</body>

</html>