<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/contact.css" />
    <link rel="stylesheet" href="/css/variable_bootstrap.css" />
</head>

<body>
    <div class="container">
        <!-- nav -->
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/header.php";
        ?>

        <!-- Content -->
        <div class="form-contact">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center text-white">
                    <div class="form-contact-items">
                        <form action="sender.php" class="form-contact-labels" method="POST">
                            <h1 class="text-white mt-3 m-3">Formulaire de contact</h1>
                            <div class="form-group">
                                <label for="user_id">Identifiant utilisateur</label>
                                <input type="text" class="form-control form-control-lg" id="user_id"
                                    placeholder="Identifiant utilisateur">
                            </div>
                            <div class="form-group">
                                <label for="contact_title">Objet de votre message</label>
                                <input type="text" class="form-control form-control-lg" id="contact_title"
                                    placeholder="Objet de votre message">
                            </div>
                            <div class="form-group mt-3">
                                <label for="contact_message">Entrez votre message</label>
                                <textarea class="form-control form-control-lg" name="contact_message"
                                    id="contact_message" rows="4" placeholder="Entrez votre message"></textarea>
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