<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/connect.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/public/include/global.php";

    $error_message = "";
    if (isset($_POST["user_mail"]) && isset($_POST["user_password"]))
    {
        $user_mail = $_POST["user_mail"];
        $user_password = $_POST["user_password"];
        
        $sql = "SELECT * FROM table_user
        WHERE user_mail = :user_mail";
        
        $statement = $db->prepare($sql);
        $statement->bindParam(":user_mail", $user_mail);
        $statement->execute();
        
        $row_user = $statement->fetch();
        if (!$row_user)
        {
            $error_message = "The account doesn't exist!";
            goto SHOW_FORM;
        }

        if (!password_verify($user_password, $row_user["user_password"]))
        {
            $error_message = "The password is wrong!";
            goto SHOW_FORM;
        }
        
        $user_category_id = $row_user['user_category_id'];
        if ($user_category_id != eUserCategories::Admin)
        {
            $error_message = "The account is not an admin!";
            goto SHOW_FORM;
        }
        
        session_start();
        $_SESSION['user_connected'] = "OK";
        $_SESSION['user_name'] = $row_user['admin_name'];
        header("location: index.php");
        exit();

        SHOW_FORM:
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulaire de Connexion</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Connexion</h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="user_mail" class="form-label">Admin login :</label>
                                <input type="text" class="form-control" name="user_mail" id="user_mail"
                                    placeholder="Enter your admin login">
                            </div>
                            <div class="mb-3">
                                <label for="user_password" class="form-label">Admin password :</label>
                                <input type="user_password" class="form-control" name="user_password"
                                    id="user_password" placeholder="Enter your admin password">
                            </div>
                            <button type="submit" value="ok" class="btn btn-primary btn-block">Se connecter</button>
                            <?php if ($error_message != ""){ ?>
                            <div class="text-center alert alert-danger" role="alert">
                                <?= $error_message; ?>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>