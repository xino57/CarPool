<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/public/include/global.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pages/protected/include/connect.php";

$error_message = "";

if (isset ($_POST['submit'])) {
    if (isset ($_POST['user_name']) && isset ($_POST['user_firstname']) && isset ($_POST['user_mail']) && isset ($_POST['user_password']) && isset ($_POST['user_phone']) && isset ($_POST['user_password_confirm'])) {
        if ($_POST['user_name'] != "" && $_POST['user_firstname'] != "" && $_POST['user_mail'] != "" && $_POST['user_password'] != "" && $_POST['user_phone'] != "" && $_POST['user_password_confirm'] != "") {

            $user_name = htmlspecialchars($_POST['user_name']);
            $user_firstname = htmlspecialchars($_POST['user_firstname']);
            $user_mail = htmlspecialchars($_POST['user_mail']);
            $user_phone = htmlspecialchars($_POST['user_phone']);
            $user_password = htmlspecialchars($_POST['user_password']);
            $user_password_confirm = htmlspecialchars($_POST['user_password_confirm']);


            if(false !== filter_var($user_mail, FILTER_VALIDATE_EMAIL)){
                if(preg_match('/^[0-9]{10}+$/', $user_phone)) {

                    if ($user_password != $user_password_confirm) {
                        $error_message = "Le mot de passe de confirmation n'est pas le même";
                    } else {
                        $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
                        $user_category_id = eUserCategories::Standard;
        
                        $sql = "INSERT INTO table_user (user_name, user_firstname, user_mail, user_phone, user_password, user_category_id) VALUES (:user_name, :user_firstname, :user_mail, :user_phone, :user_password, :user_category_id)";
                        $statement = $db->prepare($sql);
                        $statement->bindParam(':user_name', $user_name);
                        $statement->bindParam(':user_firstname', $user_firstname);
                        $statement->bindParam(':user_mail', $user_mail);
                        $statement->bindParam(':user_phone', $user_phone);
                        $statement->bindParam(':user_password', $user_password);
                        $statement->bindParam(':user_category_id', $user_category_id);
                        $statement->execute();

                        header("location: /pages/login.php");
                        exit();
                    }
                }else{
                    $error_message = "Le numéro de téléphone n'est pas valide !";
                }
            } else{
                $error_message = "L'adresse mail n'est pas valide !";
            }
        } else {
            $error_message = "Veuillez remplir tous les champs.";
        }
    } else {
        $error_message = "Veuillez remplir tous les champs.";
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/variable_bootstrap.css" />
    <link rel="stylesheet" href="/css/registration_form.css" />
</head>

<body>
    <div class="container">
        <!-- nav -->
        <<?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/header.php";
        ?>

            <!-- Content -->

            <div class="form-registration">
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center text-white">
                        <div class="form-registration-items">
                            <form action="register.php" class="form-registration-labels" method="POST">
                                <h1 class="text-center text-white mt-3 m-3">Créer un compte</h1>
                                <div class="form-group">
                                    <label for="user_name">Nom de famille</label>
                                    <input type="text" class="form-control form-control-lg" id="user_name"
                                        placeholder="Nom de famille" name="user_name">
                                </div>
                                <div class="form-group">
                                    <label for="user_firstname">Prénom</label>
                                    <input type="text" class="form-control form-control-lg" id="user_firstname"
                                        placeholder="Prénom" name="user_firstname">
                                </div>
                                <div class="form-group">
                                    <label for="user_mail">Adresse mail</label>
                                    <input type="mail" class="form-control form-control-lg" id="user_mail"
                                        placeholder="Adresse mail" name="user_mail">
                                </div>
                                <div class="form-group">
                                    <label for="user_phone">Téléphone</label>
                                    <input type="number" class="form-control form-control-lg" id="user_phone"
                                        placeholder="Téléphone" name="user_phone">
                                </div>
                                <div class="form-group">
                                    <label for="user_password">Mot de passe</label>
                                    <input type="password" class="form-control form-control-lg" id="user_password"
                                        placeholder="Mot de passe" name="user_password">
                                </div>
                                <div class="form-group">
                                    <label for="user_password_confirm">Confirmer le mot de passe</label>
                                    <input type="password" class="form-control form-control-lg"
                                        id="user_password_confirm" placeholder="Confirmer le mot de passe"
                                        name="user_password_confirm">
                                </div>
                                <div class="form-group mt-3 col">
                                    <button type="submit" id="submit" name="submit"
                                        class="btn btn-secondary mt-3 col-12 btn-submit">Envoyer le
                                        message</button>
                                </div>
                                <?php if ($error_message != "") { ?>
                                    <div class="text-center alert alert-danger" role="alert">
                                        <?= $error_message; ?>
                                    </div>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/footer.php";
            ?>
    </div>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>