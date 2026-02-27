    <div class="breadcrum container">
        <ol class="breadcrumb m-4">
            <li class="breadcrumb-item"><a href="?controller=global&method=index">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Assos</li>
        </ol>
    </div>
<div class="container">
    <h2 class="m-5 text-center">NOS ASSOCIATIONS</h2>
    <p>
        Présente dans près d’une quarantaine de départements, chaque association locale de PHI est un moteur d’action humanitaire et solidaire au cœur de nos territoires.
    </p>
    <p>
        Au plus près du terrain, chacune d’entre elle cultive son identité propre et conduit des missions solidaires et humanitaires qui lui tiennent à cœur. <br> 
        Nos associations départementales sont des relais précieux et essentiels à l’action de PHI sur les territoires. Véritables lieux de rencontres de coopération et d’échanges, nos associations collectent, trient, préparent et distribuent des dispositifs médicaux et du matériel médical, organisent des actions de prévention et de sensibilisation, et soutiennent des missions humanitaires concrètes. <br>
        Rejoindre une association PHI, c’est intégrer une équipe motivée, participer à des projets porteurs de sens et voir directement l’impact de votre engagement. <br>
        Découvrez nos associations et trouvez celle la plus près de chez vous !


    </p>
    <div class="m-5">
        <div class="row g-4">
            <?php foreach($liste_assos as $items)
                { ?>
            <div class="col-lg-4">
                <div class="card">
                    <h4 class="titre-asso text-center p-3">
                        <?= $items->getNom_asso() ?>
                    </h4>
                    <p class="text-center">
                        <?= $items->getAdresse() ?>
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
        </ul>
</nav>


</div>
