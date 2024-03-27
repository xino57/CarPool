<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <!-- Liens -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/variable_bootstrap.css" />
    <link rel="stylesheet" href="/css/reviews.css" />
    <title>Reviews</title>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/header.php";
        ?>
        <!-- reviews -->
        <div class="reviews mt-3">
            <div class="wrapper text-white">
                <h1 class="text-center mb-4">Publier un commentaire sur le trajet</h1>
                <form action="#">
                    <div class="raiting">
                        <input type="number" name="raiting" hidden>
                        <i><img src="/icon/star.svg" alt="star" class="star"></i>
                        <i><img src="/icon/star.svg" alt="star" class="star"></i>
                        <i><img src="/icon/star.svg" alt="star" class="star"></i>
                        <i><img src="/icon/star.svg" alt="star" class="star"></i>
                        <i><img src="/icon/star.svg" alt="star" class="star"></i>
                    </div>

                    <div class="mt-4">
                        <label for="form-control" class="mb-2">
                            <h5>Donnez votre avis !</h5>
                        </label>
                        <textarea class="form-control" placeholder="Votre avis..." id="textarea1"
                            style="height: 200px"></textarea>
                    </div>

                    <div class="d-md-flex justify-content-md-end">
                        <div class="p-lg-4 mb-3 mb-md-0"><button class="btn btn-danger mr-md-2">Annuler</button></div>
                        <div class="p-lg-4"><button class="btn btn-primary">Envoyer</button></div>
                    </div>

            </div>
            </form>
        </div>

        <div class="text-white">
            <hr>
        </div>

        <!-- Footer -->
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/footer.php";
        ?>
    </div>

    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/reviews.js"></script>
</body>

</html>