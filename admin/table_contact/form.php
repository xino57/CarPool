<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $contact_id = ""; 
    $contact_title = ""; 
    $contact_content = ""; 
    $contact_date = "";
    $user_id = "";

    if (isset($_GET["contact_id"]) && $_GET["contact_id"] > 0)
    {
        $sql = "SELECT * FROM table_contact 
                WHERE contact_id = :contact_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":contact_id", $_GET["contact_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $contact_id = $row["contact_id"]; 
            $contact_title = $row["contact_title"]; 
            $contact_content = $row["contact_content"]; 
            $contact_date = $row["contact_date"]; 
            $user_id = $row["user_id"]; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of contacts</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="contact_id">Enter contact id</label>
                <input class="form-control" id="contact_id" placeholder="" name="contact_id"
                    value="<?=$contact_id;?>">
            </div>

            <div class="form-group">
                <label for="contact_title">Enter contact title</label>
                <input class="form-control" id="contact_title" placeholder="" name="contact_title"
                    value="<?=$contact_title;?>">
            </div>

            <div class="form-group">
                <label for="contact_content">Enter contact content</label>
                <input class="form-control" id="contact_content" placeholder="" name="contact_content"
                    value="<?=$contact_content;?>">
            </div>

            <div class="form-group">
                <label for="contact_date">Enter contact date</label>
                <input class="form-control" id="contact_date" placeholder="" name="contact_date"
                    value="<?=$contact_date;?>">
            </div>

            <div class="form-group">
                <label for="user_id">Enter user id</label>
                <input class="form-control" id="user_id" placeholder="" name="user_id"
                    value="<?=$user_id;?>">
            </div>
            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>