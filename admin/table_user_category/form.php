<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $user_category_id = ""; 
    $user_category_name = ""; 

    if (isset($_GET["user_category_id"]) && $_GET["user_category_id"] > 0)
    {
        $sql = "SELECT * FROM table_user_category 
                WHERE user_category_id = :user_category_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":user_category_id", $_GET["user_category_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $user_category_id = $row["user_category_id"]; 
            $user_category_name = $row["user_category_name"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of user categories</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="user_category_id">Enter user category id</label>
                <input class="form-control" id="user_category_id" placeholder="" name="user_category_id"
                    value="<?=$user_category_id;?>">
            </div>
        
            <div class="form-group">
                <label for="user_category_name">Enter user category name</label>
                <input class="form-control" id="user_category_name" placeholder="" name="user_category_name"
                    value="<?=$user_category_name;?>">
            </div>
            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>