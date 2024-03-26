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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Domine:wght@400..700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
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
                            <h1 class="text-white text-center mt-3 m-3">Connexion au compte</h1>
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
                                    class="btn btn-secondary mt-3 col-12 btn-submit"><h5>Connexion</h5></button>
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