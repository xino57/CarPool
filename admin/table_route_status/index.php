<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $sql = "SELECT * FROM table_route_status
            ORDER BY route_status_id ASC";

    $statement = $db->prepare($sql);
    $statement->execute();
    $recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of route status</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <h1 class="text-primary">List of route status</h1>
    <div class="text-center alert alert-warning" role="alert">
        <?= "Warning! If you add, edit, delete informations here! You will probably have to edit inside code too!"; ?>
    </div>
    <table class="table table-striped">
        <caption>List of route status</caption>
        <tr>
            <th scope="col">Route status id</th>
            <th scope="col">Route status name</th>
            <th scope="col">
                <a href="form.php">Add new route status</a>
            </th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($recordset as $row) { ?>
        <tr>
            <td><?=$row["route_status_id"];?></td>
            <td><?=$row["route_status_name"];?></td>
            <td>
                <a href="delete.php?route_status_id=<?=$row["route_status_id"];?>" title="Delete">Delete</a>
            </td>
            <td>
                <a href="form.php?route_status_id=<?=$row["route_status_id"];?>" title="Edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <footer></footer>
</body>

</html>