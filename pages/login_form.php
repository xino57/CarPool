<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginForm</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/variable_bootstrap.css" />
    <link rel="stylesheet" href="/css/login_form.css" />
</head>

<body>
    <!-- Header -->
    <div class="container">
        <?php

        require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/header.php";

        ?>
        <!-- LoginForm -->
        <div class="form-login">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center text-white">
                    <div class="form-login-items">
                        <form action="sender.php" class="form-login-labels" method="POST">
                            <h1 class="text-white mt-3 m-3">Connexion au compte</h1>
                            <div class="form-group">
                                <label for="user_mail">Adresse mail</label>
                                <input type="text" class="form-control form-control-lg" id="user_mail"
                                    placeholder="Adresse mail">
                            </div>
                            <div class="form-group">
                                <label for="user_password">Mot de passe</label>
                                <input type="text" class="form-control form-control-lg" id="user_password"
                                    placeholder="Mot de passe">
                            </div>
                            <div class="mb-3">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="keep_connected">
                                    <label class="form-check-label" for="keep_connected">
                                        <h5>Se souvenir de moi</h5>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mt-3 col">
                                <button type="submit"
                                    class="btn btn-secondary mt-3 col-12 btn-submit">Connexion</button>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <a href="#" class="text-white">Vous n'avez pas de compte ? Créez en un !</a>
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