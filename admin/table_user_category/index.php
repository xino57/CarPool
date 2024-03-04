<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $sql = "SELECT * FROM table_user_category
            ORDER BY user_category_id ASC";

    $statement = $db->prepare($sql);
    $statement->execute();
    $recordset = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of user categories</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <h1 class="text-primary">List of user categories</h1>
    <div class="text-center alert alert-warning" role="alert">
        <?= "Warning! If you add, edit, delete informations here! You will probably have to edit inside code too!"; ?>
    </div>
    <table class="table table-striped">
        <caption>List of user categories</caption>
        <tr>
            <th scope="col">User category id</th>
            <th scope="col">User category name</th>
            <th scope="col">
                <a href="form.php">Add new user category</a>
            </th>
            <th scope="col"></th>
        </tr>
        <?php foreach ($recordset as $row) { ?>
        <tr>
            <td><?=$row["user_category_id"];?></td>
            <td><?=$row["user_category_name"];?></td>
            <td>
                <a href="delete.php?user_category_id=<?=$row["user_category_id"];?>" title="Delete">Delete</a>
            </td>
            <td>
                <a href="form.php?user_category_id=<?=$row["user_category_id"];?>" title="Edit">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <footer></footer>
</body>

</html>