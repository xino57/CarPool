<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un trajet</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/publish_offers.css" />
    <link rel="stylesheet" href="/css/variable_bootstrap.css" />
</head>

<body>
    <div class="container">
        <!-- nav -->
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/header.php";
        ?>

        <!-- Content -->
        <div class="form-publishoffers">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center text-white">
                    <div class="form-publishoffers-items">
                        <form action="sender.php" class="form-publishoffers-labels" method="POST">
                            <h1 class="text-white mt-3 m-3">Publier un trajet</h1>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Sélectionner une destination...</option>
                                <option value="1">IFA</option>
                                <option value="2">MNS</option>
                            </select>
                            <div class="form-group">
                                <label for="route_departuretime">Date de trajet</label>
                                <input type="text" class="form-control form-control-lg" id="route_departuretime"
                                    placeholder="Date de trajet">
                            </div>
                            <div class="form-group">
                                <label for="car_numberofplace">Nombre de places</label>
                                <input type="text" class="form-control form-control-lg" id="car_numberofplace"
                                    placeholder="Nombre de places">
                            </div>
                            <div class="form-group">
                                <label for="route_startadress">Départ</label>
                                <input type="text" class="form-control form-control-lg" id="route_start_adress"
                                    placeholder="Départ">
                            </div>
                            <div class="form-group mt-3 col">
                                <button type="submit" class="btn btn-secondary mt-3 col-12 btn-submit">Publier le
                                    trajet</button>
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