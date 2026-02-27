

<section class="stats-section">
  <div class="container">
    <div class="row g-3">
      <div class="col-6 col-md-3">
        <div class="stat-card vert-fonce">
          <div class="stat-number">47</div>
          <div class="stat-label">Projets actifs</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-card jaune">
          <div class="stat-number">40</div>
          <div class="stat-label">Pays couverts</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-card rose">
          <div class="stat-number">174</div>
          <div class="stat-label">Partenaires</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-card vert-clair">
          <div class="stat-number">558</div>
          <div class="stat-label">Bénéficiaires</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INFO + GALLERY -->
<section class="info-section">
  <div class="container">
    <div class="row g-5 align-items-center position">
      <div class="col-lg-6">
        <div class="d-flex align-items-start gap-3">
          <img class="info-icon" src="./Asset/Images/TERRE.svg">
          <div>
            <h2 class="info-title">40 ANS DENGAGEMENT</h2>
            <p class="info-text">
                Depuis près de 40 ans, Pharmacie Humanitaire Internationale agit en France et à l'international pour garantir un accès équitable à des soins de qualité aux personnes les plus vulnérables.
                PHI collecte, sécurise et redistribue des médicaments et dispositifs médicaux neufs, accompagne les structures de soins et coopère avec des partenaires locaux afin de répondre aux besoins de santé avec rigueur et responsabilité.
                Toutes nos actions s'inscrivent dans une logique de qualité, de respect des systèmes de santé et de renforcement durable des capacités locales.
            </p>
          </div>
        </div>
      </div>
    <div class="col-lg-6">
        <img src="./Asset/Images/photos.png" width="100%">
    </div>
    </div>
  </div>
</section>

<!-- ACTION CARDS -->
<section class="cards-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="action-card">
          <div class="action-card-title">DON</div>
          <div class="action-card-text">Description courte de l'action menée sur le terrain pour améliorer l'accès aux soins.</div>
          <a href="#" class="btn btn-success">Bouton</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="action-card">
          <div class="action-card-title">BENEVOLE</div>
          <div class="action-card-text">Description courte de l'action menée sur le terrain pour améliorer l'accès aux soins.</div>
          <a href="#" class="btn btn-success">Bouton</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="action-card">
          <div class="action-card-title">COLLECTE</div>
          <div class="action-card-text">Description courte de l'action menée sur le terrain pour améliorer l'accès aux soins.</div>
          <a href="#" class="btn btn-success">Bouton</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ACTUALITÉS -->
<section class="news-section">
  <div class="container">
    <h2 class="section-title">NOS <span>ACTUALITÉS</span></h2>
    <div class="m-5">
        <div class="row g-4">
            <?php foreach($liste_actus as $items)
                {?>
                
            <div class="col-lg-4">
                <a href="?controller=actu&method=getactu&id=<?php echo $items->getId_actu() ?>" class="text-reset text-decoration-none">
                    <div class="news-card">
                        <img class="card-images" src="<?= $items->getUrl_Image() ?>" alt="">
                        <h4 class="titre-asso text-center p-3">
                            <?= $items->getTitre() ?>
                        </h4>
                        <p class="text-center">
                            <?= $items->getDescription() ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
  </div>
</section>
