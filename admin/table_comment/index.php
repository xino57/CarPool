<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $sql = "SELECT * FROM table_comment
            ORDER BY comment_id ASC";

    $statement = $db->prepare($sql);
    $statement->execute();
    $recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of comments</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <h1 class="text-primary">List of comments</h1>
    <table class="table table-striped">
        <caption>List of comments</caption>
        <tr>
            <th scope="col">Comment id</th>
            <th scope="col">Comment stars</th>
            <th scope="col">Comment title</th>
            <th scope="col">Comment content</th>
            <th scope="col">Comment date</th>
            <th scope="col">
                <a href="form.php">Add new comment</a>
            </th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($recordset as $row) { ?>
        <tr>
            <td><?=$row["comment_id"];?></td>
            <td><?=$row["comment_stars"];?></td>
            <td><?=$row["comment_title"];?></td>
            <td><?=$row["comment_content"];?></td>
            <td><?=$row["comment_date"];?></td>
            <td>
                <a href="delete.php?comment_id=<?=$row["comment_id"];?>" title="Delete">Delete</a>
            </td>
            <td>
                <a href="form.php?comment_id=<?=$row["comment_id"];?>" title="Edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <footer></footer>
</body>

</html>