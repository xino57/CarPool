<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $sql = "SELECT * FROM table_cancel_pattern
            ORDER BY cancel_pattern_id ASC";

    $statement = $db->prepare($sql);
    $statement->execute();
    $recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of cancel patterns</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <h1 class="text-primary">List of cancel patterns</h1>
    <table class="table table-striped">
        <caption>List of cancel patterns</caption>
        <tr>
            <th scope="col">Cancel pattern id</th>
            <th scope="col">Cancel pattern content</th>
            <th scope="col">Cancel pattern date</th>
            <th scope="col">Cancel route id</th>
            <th scope="col">
                <a href="form.php">Add new cancel pattern</a>
            </th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($recordset as $row) { ?>
        <tr>
            <td><?=$row["cancel_pattern_id"];?></td>
            <td><?=$row["cancel_pattern_content"];?></td>
            <td><?=$row["cancel_pattern_date"];?></td>
            <td><?=$row["route_id"];?></td>
            <td>
                <a href="delete.php?cancel_pattern_id=<?=$row["cancel_pattern_id"];?>" title="Delete">Delete</a>
            </td>
            <td>
                <a href="form.php?cancel_pattern_id=<?=$row["cancel_pattern_id"];?>" title="Edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <footer></footer>
</body>

</html>