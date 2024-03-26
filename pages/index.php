<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <!-- Liens -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/variable_bootstrap.css" />
    <link rel="stylesheet" href="/css/footer.css">
    <title>CarPool</title>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php 
        require_once $_SERVER['DOCUMENT_ROOT']. "/pages/components/header.php";
         ?>
        <!-- Content -->
        <div class="image"></div>
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                    <nav class="navbar ">
                        <div class="container-fluid">
                            <form class="d-flex" role="search">
                                <img src="/icon/search.svg" alt="IconSearch" class="iconSearch" />
                                <input class="form-control me-2" type="search" placeholder="Où allez-vous ?"
                                    aria-label="Search">
                                <button class="btn btn-primary" type="submit">Rechercher</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="table">
                <table class="table-primary title-table">
                    <thead>
                        <tr class="icon text-center">
                            <th>&nbsp;&nbsp;&nbsp;<img src="/icon/geo-alt.svg" alt="icon-destination">
                                &nbsp;Destination&nbsp;&nbsp;&nbsp;</th>
                            <th>&nbsp;&nbsp;&nbsp;<img src="/icon/calendar-check.svg" alt="icon-calendrier"> &nbsp;Date
                                du trajet&nbsp;&nbsp;&nbsp;</th>
                            <th>&nbsp;&nbsp;&nbsp;<img src="/icon/person-check.svg" alt="icon-user-check"> &nbsp;Nombre
                                de places&nbsp;&nbsp;&nbsp;</th>
                            <th>&nbsp;&nbsp;&nbsp;<img src="/icon/point.svg" alt="icon-point-depart">
                                &nbsp;Départ&nbsp;&nbsp;&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>Metz</td>
                            <td>20/03/2024</td>
                            <td>2</td>
                            <td>Thionville</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bloc de réassurance -->
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-5">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold">
                            <img src="/icon/person-check.svg" alt="IconPerson-check" class="iconPersonCheck" />
                            Utilisateurs
                        </h5>
                    </div>
                    <div class="card-body">
                        <div>
                            Covoiturez en toute sécurité avec CarPool : membres MNS ou IFA vérifiés uniquement !
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold">
                            <img src="/icon/currency-euro.svg" alt="IconEuro" class="iconEuro" />
                            Frais réduits
                        </h5>
                    </div>
                    <div class="card-body">
                        <div>
                            Réduisez considérablement les frais de transport en utilisant nos services!
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold">
                            <img src="/icon/car-front-fill.svg" alt="IconCar" class="iconCar" />
                            Emprunte de CO² réduite
                        </h5>
                    </div>
                    <div class="card-body">
                        <div>
                            Réduisez considérablement votre empreinte de CO2 !
                        </div>
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