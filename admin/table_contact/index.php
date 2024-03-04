<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $sql = "SELECT * FROM table_contact
            ORDER BY contact_id ASC";

    $statement = $db->prepare($sql);
    $statement->execute();
    $recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of contacts</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <h1 class="text-primary">List of contacts</h1>
    <table class="table table-striped">
        <caption>List of contacts</caption>
        <tr>
            <th scope="col">Contact id</th>
            <th scope="col">Contact title</th>
            <th scope="col">Contact content</th>
            <th scope="col">Contact date</th>
            <th scope="col">User id</th>
            <th scope="col">
                <a href="form.php">Add new contact</a>
            </th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($recordset as $row) { ?>
        <tr>
            <td><?=$row["contact_id"];?></td>
            <td><?=$row["contact_title"];?></td>
            <td><?=$row["contact_content"];?></td>
            <td><?=$row["contact_date"];?></td>
            <td><?=$row["user_id"];?></td>
            <td>
                <a href="delete.php?contact_id=<?=$row["contact_id"];?>" title="Delete">Delete</a>
            </td>
            <td>
                <a href="form.php?contact_id=<?=$row["contact_id"];?>" title="Edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <footer></footer>
</body>

</html>