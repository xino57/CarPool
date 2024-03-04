<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/protect.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/admin/include/connect.php";
    
    $user_id = ""; 
    $user_name = ""; 
    $user_firstname = ""; 
    $user_mail = ""; 
    $user_password = "";
    $user_phone = "";
    $user_adress = "";
    $user_birthdate = "";
    $user_profilepicture = "";
    $user_date = "";
    $user_category_id = "";

    if (isset($_GET["user_id"]) && $_GET["user_id"] > 0)
    {
        $sql = "SELECT * FROM table_user 
                WHERE user_id = :user_id";

        $statement = $db->prepare($sql);
        $statement->bindParam(":user_id", $_GET["user_id"]);
        $statement->execute();
        
        if ($row = $statement->fetch())
        {
            $user_id = $row["user_id"]; 
            $user_name = $row["user_name"]; 
            $user_firstname = $row["user_firstname"]; 
            $user_mail = $row["user_mail"]; 
            $user_password = $row["user_password"]; 
            $user_phone = $row["user_phone"]; 
            $user_adress = $row["user_adress"]; 
            $user_birthdate = $row["user_birthdate"];
            $user_profilepicture = $row["user_profilepicture"]; 
            $user_date = $row["user_date"]; 
            $user_category_id = $row["user_category_id"]; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of users</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <head></head>
    <main>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="user_id">Enter user id</label>
                <input class="form-control" id="user_id" placeholder="" name="user_id"
                    value="<?=$user_id;?>">
            </div>
        
            <div class="form-group">
                <label for="user_name">Enter user name</label>
                <input class="form-control" id="user_name" placeholder="" name="user_name"
                    value="<?=$user_name;?>">
            </div>

            <div class="form-group">
                <label for="user_firstname">Enter user firstname</label>
                <input class="form-control" id="user_firstname" placeholder="" name="user_firstname"
                    value="<?=$user_firstname;?>">
            </div>

            <div class="form-group">
                <label for="user_mail">Enter user mail</label>
                <input class="form-control" id="user_mail" placeholder="" name="user_mail"
                    value="<?=$user_mail;?>">
            </div>

            <div class="form-group">
                <label for="user_password">Enter user password</label>
                <input class="form-control" id="user_password" placeholder="" name="user_password"
                    value="<?=$user_password;?>">
            </div>

            <div class="form-group">
                <label for="user_phone">Enter user phone</label>
                <input class="form-control" id="user_phone" placeholder="" name="user_phone"
                    value="<?=$user_phone;?>">
            </div>

            <div class="form-group">
                <label for="user_adress">Enter user adress</label>
                <input class="form-control" id="user_adress" placeholder="" name="user_adress"
                    value="<?=$user_adress;?>">
            </div>

            <div class="form-group">
                <label for="user_birthdate">Enter user birthdate</label>
                <input class="form-control" id="user_birthdate" placeholder="" name="user_birthdate"
                    value="<?=$user_birthdate;?>">
            </div>

            <div class="form-group">
                <label for="user_profilepicture">Enter user profilepicture</label>
                <input class="form-control" id="user_profilepicture" placeholder="" name="user_profilepicture"
                    value="<?=$user_profilepicture;?>">
            </div>

            <div class="form-group">
                <label for="user_date">Enter user date</label>
                <input class="form-control" id="user_date" placeholder="" name="user_date"
                    value="<?=$user_date;?>">
            </div>

            <div class="form-group">
                <label for="user_category_id">Enter user category_id</label>
                <input class="form-control" id="user_category_id" placeholder="" name="user_category_id"
                    value="<?=$user_category_id;?>">
            </div>

            <button type="submit" class="w-100 btn btn-primary btn-block">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>