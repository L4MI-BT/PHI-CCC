<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PHI (Pharmacie Humanitaire Internationnal)</title>
    <link rel="stylesheet" href="Asset/Styles/bootstrap.css">
    <link rel="stylesheet" href="Asset/Styles/style.css">

    
</head>
<body>
    <?php session_start(); ?>
    <header>
    <nav class="main-nav">
  <div class="container">

    <!-- Checkbox: doit être AVANT nav-inner pour que ~ fonctionne -->
    <input type="checkbox" id="menu-toggle"/>

    <div class="nav-inner">

      <!-- Logo -->
      

      <!-- Hamburger CSS-only -->
      <label class="hamburger-label" for="menu-toggle" aria-label="Ouvrir le menu">
        <span></span><span></span><span></span>
      </label>

      <!-- Nav -->
      <ul class="nav-links">
        <li class="mt-3">
            <a class="nav-brand" href="?controller=global&method=index">
        <?php if(isset($_SESSION['user'])){ ?>
                    <a href="http://localhost/PHI-CCC/?controller=global&method=admin"><img src="./Asset/Images/logo.svg" width="80%"></a>
                <?php }else{?>
                    <a href="http://localhost/PHI-CCC/?controller=global&method=index"><img src="./Asset/Images/logo.svg" width="80%"></a>
                <?php } ?>
      </a>
        </li>
        <li>
          <a href="?controller=global&method=enBref">Qui sommes-nous ?</a>
        </li>

        <li tabindex="0">
          <a href="#">
            Nous Soutenir
            <svg class="chevron" viewBox="0 0 12 8"><polyline points="1,1 6,7 11,1"/></svg>
          </a>
          <div class="dropdown-panel">
            <a href="?controller=global&method=dons">Dons</a>
            <a href="?controller=global&method=collecte">Collecte</a>
            <hr/>
            <a href="?controller=global&method=boutique">Boutique</a>
          </div>
        </li>

        <li tabindex="0">
          <a href="#">
            Nous Rejoindre
            <svg class="chevron" viewBox="0 0 12 8"><polyline points="1,1 6,7 11,1"/></svg>
          </a>
          <div class="dropdown-panel">
            <a href="?controller=global&method=benevol">Devenir Bénévole</a>
            <a href="?controller=global&method=assos">Nos Associations</a>
          </div>
        </li>

        <li>
          <a href="?controller=global&method=mission">Nos Missions</a>
        </li>

        <li>
          <a href="?controller=global&method=contact">Contact</a>
        </li>

      </ul>

      <!-- CTA -->
      <div class="nav-actions">
        <a href="?controller=global&method=dons" class="btn-don">Faire un don</a>
      </div>

    </div><!-- /nav-inner -->
  </div><!-- /container -->
</nav>
<section class="hero background-header">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8">
        <p class="mb-2">AGIR POUR <span class="hero-label">L'ÉQUITÉ DES SOINS</span></p>
        <h1>ICI ET LÀ BAS.</h1>
        <p class="hero-sub">Nous œuvrons pour un accès équitable aux soins de santé, partout dans le monde, sans distinction.</p>
        <a href="#" class="btn btn-hero">Découvrir nos actions</a>
      </div>
    </div>
  </div>
</section>
        
            <h1>
                
            </h1>
        </div>
    </nav>
</header>
<main>
    <?php require_once "route.php"; ?>
    <a href="?controller=Asso&method=list">Liste</a>
</main>
<footer class="bg-footer">
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
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-5">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/profile.php?id=100064819986030">
                                <img src="./Asset/Images/facebook.svg" alt="" height="22px">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <img src="./Asset/Images/insta.svg" alt="" height="22px">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <img src="./Asset/Images/link.svg" alt="" height="22px">
                            </a>
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