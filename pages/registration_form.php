<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/registration_form.css" />
    <link rel="stylesheet" href="/css/variable_bootstrap.css" />
    <link rel="stylesheet" href="/css/contact.css">
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
                            <form action="sender.php" class="form-registration-labels" method="POST">
                                <h1 class="text-white mt-3 m-3">Créer un compte</h1>
                                <div class="form-group">
                                    <label for="user_name">Nom de famille</label>
                                    <input type="text" class="form-control form-control-lg" id="user_name"
                                        placeholder="Nom de famille">
                                </div>
                                <div class="form-group">
                                    <label for="user_firstname">Prénom</label>
                                    <input type="text" class="form-control form-control-lg" id="user_firstname"
                                        placeholder="Prénom">
                                </div>
                                <div class="form-group">
                                    <label for="user_mail">Adresse mail</label>
                                    <input type="text" class="form-control form-control-lg" id="user_mail"
                                        placeholder="Adresse mail">
                                </div>
                                <div class="form-group">
                                    <label for="user_password">Mot de passe</label>
                                    <input type="password" class="form-control form-control-lg" id="user_password"
                                        placeholder="Mot de passe">
                                </div>
                                <div class="form-group">
                                    <label for="user_password_confirm">Confirmer le mot de passe</label>
                                    <input type="password" class="form-control form-control-lg"
                                        id="user_password_confirm" placeholder="Confirmer le mot de passe">
                                </div>
                                <div class="form-group mt-3 col">
                                    <button type="submit" class="btn btn-secondary mt-3 col-12 btn-submit">Envoyer le
                                        message</button>
                                </div>
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