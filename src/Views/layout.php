<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHI (Pharmacie Humanitaire Internationnal)</title>
    <link rel="stylesheet" href="Asset/Styles/style.css">
    <link rel="stylesheet" href="Asset/Styles/bootstrap.css">
</head>
<body>
    <?php session_start(); ?>
    <header>
     
        <nav>
        <div class="green">
            <img class="rounded mx-auto d-block" src="./asset/img/logo_1.png" alt="logo NomadRoad" width="25%">
        </div>
        <div class="orange">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="?controller=global&method=index">Accueil</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="?controller=global&method=enBref">Qui somme-nous ?</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nous Soutenir</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="?controller=global&method=dons">Dons</a></li>
                                    <li><a class="dropdown-item" href="?controller=global&method=collecte">Collecte</a></li>
                                    <li><a class="dropdown-item" href="?controller=global&method=boutique">Boutique</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nous Rejoindre</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="?controller=global&method=benevol">Devenir Benevol</a></li>
                                    <li><a class="dropdown-item" href="?controller=global&method=assos">Nos Associations</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?controller=global&method=mission">Nos Misions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?controller=global&method=contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1>
                <?php if(isset($_SESSION['user'])){ ?>
                    <a href="http://localhost/PHI-CCC/?controller=global&method=admin">PHI (Pharmacie Humanitaire Internationnal) </a>
                <?php }else{?>
                    <a href="http://localhost/PHI-CCC/?controller=global&method=index">PHI (Pharmacie Humanitaire Internationnal)</a>
                <?php } ?>
            </h1>
        </div>
    </nav>
</header>
<main>
    <?php require_once "route.php"; ?>
    <a href="?controller=Asso&method=list">Liste</a>
</main>
<footer class="bg-footer">
    <ul class="navbar-nav mb-2 mb-lg-0 ms-5">
        <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/profile.php?id=100064819986030">
                <img src="./asset/img/facebook-f-brands-solid-full.svg" alt="" height="22px">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <img src="./Asset/Images/facebook.svg" alt="rfrf" height="22px">
            </a>
        </li>
    </ul>
    <div class="bandeau">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Menu principal</h5>
                    <ul>
                        <li>
                            <a class="text-reset text-decoration-none" href="?controller=global&method=index">Accueil</a>
                        </li>
                        <li>
                            <a class="text-reset text-decoration-none" href="?controller=global&method=enBref">Qui somme-nous ?</a>
                        </li>
                        <li>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nous Soutenir</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?controller=global&method=dons">Dons</a></li>
                                <li><a class="dropdown-item" href="?controller=global&method=collecte">Collecte</a></li>
                                <li><a class="dropdown-item" href="?controller=global&method=boutique">Boutique</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nous Soutenir</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?controller=global&method=benevol">Devenir Benevol</a></li>
                                <li><a class="dropdown-item" href="?controller=global&method=assos">Nos Associations</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="text-reset text-decoration-none" href="?controller=global&method=mission">Nos Misions</a>
                        </li>
                        <li>
                            <a class="text-reset text-decoration-none" href="?controller=global&method=contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Information</h5>
                    <ul>
                        <li>
                            <a class="text-reset text-decoration-none" href="?controller=global&method=mentionLegal">Mention légal</a>
                        </li>
                        <li>
                            <a class="text-reset text-decoration-none" href="#">Politique de confidentialité</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">Copyright ISFAC</div>
    </div>
</footer>
<script src="Asset/Js/script.js"></script>
<script src="Asset/Js/bootstrap.bundle.js"></script>
</body>
</html>