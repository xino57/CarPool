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
        <nav class="header">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="/image/logo_Carpool.png" alt="logo_carpool" class="imageLogo" />
                </div>
                <div class="col-8 text-center">
                    <div class="button-center text-center">
                        <button class="button-offer btn btn-primary btn-lg m-2">
                            Rechercher des offres
                        </button>
                        <button class="button-request btn btn-primary btn-lg m-2">
                            Rechercher des demandes
                        </button>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="row connect">
                        <img src="/icon/person-circle.svg" alt="logoSignUp" class="imageSignUp" />
                        <button class="button-SignUp btn btn-primary">Sign up</button>
                    </div>
                </div>
            </div>
        </nav>

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
                                <button type="submit" class="btn btn-secondary mt-3 col-12 btn-submit">Connexion</button>
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
        <footer class="text-white mt-5">
            <hr>
            <div class="row px-3 pb-4">
                <div class="col-md-3">
                    <h5 class="mb-2 font-weight-bold">CarPool</h5>
                    <p class="m-1">
                        <a href="#" class="text-white d-block mb-1">Notre Histoire</a>
                        <a href="#" class="text-white d-block mb-1">Nos dirigeants</a>
                        <a href="#" class="text-white d-block mb-1">Nos chiffres</a>
                        <a href="#" class="text-white d-block mb-1">Espace presse</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-2 font-weight-bold">Nos services</h5>
                    <p class="m-1">
                        <a href="#" class="text-white d-block mb-1">Publication de la demande</a>
                        <a href="#" class="text-white d-block mb-1">Réservation des places</a>
                        <a href="#" class="text-white d-block mb-1">Système de Notation</a>
                        <a href="#" class="text-white d-block mb-1">Système de commentaire</a>
                        <a href="#" class="text-white d-block mb-1">Suivi en temps réel</a>
                        <a href="#" class="text-white d-block mb-1">Historique des trajets</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-2 font-weight-bold">Recrutement</h5>
                    <p>
                        <a href="#" class="text-white d-block mb-1">Rejoignez les équipes MNS</a>
                        <a href="#" class="text-white d-block mb-1">Trouvez une formation</a>
                        <a href="#" class="text-white d-block mb-1">Travailler au siège</a>
                        <a href="#" class="text-white d-block mb-1">Devenir Franchisé</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-2 font-weight-bold">Aide en ligne</h5>
                    <p>
                        <a href="#" class="text-white d-block mb-1">FAQ</a>
                        <a href="#" class="text-white d-block mb-1">Contacts</a>
                        <a href="#" class="text-white d-block mb-1">Votre avis</a>
                        <a href="#" class="text-white d-block mb-1">Devenir Franchisé</a>
                    </p>
                </div>
            </div>
            <hr class="mb-1">
            <div class="logo">
                <div class="left">
                    <img src="/icon/instagram.svg" alt="iconInstagram" class="logoInstagram">
                    <img src="/icon/facebook.svg" alt="iconFacebook" class="logoFacebook">
                    <img src="/icon/linkedin.svg" alt="iconLinkedin" class="logoLinkedin">
                </div>
                <div class="right">
                    <img src="/image/logo-mns.png" alt="imageMNS" class="logoMNS">
                </div>
            </div>
        </footer>
    </div>
    <script src="js/main.js"></script>
</body>

</html>