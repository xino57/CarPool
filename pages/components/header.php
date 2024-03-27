<?php 
$header='<nav class="navbar navbar-expand-lg bg-custom-blue navbar-light  navbar-header">
<div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/image/logo_Carpool.png" alt="logo_Carpool"
            class="imageLogo img-fluid"></a>
    <button class="navbar-toggler custom-toggler navbar-toggler-color" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon navbar-toggler-color"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-success">
                        <h5>Accueil</h5>
                    </button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-success">
                        <h5>Rechercher des offres</h5>
                    </button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-success">
                        <h5>Rechercher des demandes</h5>
                    </button></a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <button class="btn btn-primary signUp" type="submit">
                <h5>Connexion</h5>
            </button>
        </form>
    </div>
</div>
</nav>';

echo $header;
 ?>