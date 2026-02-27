 <div class="breadcrum container">
        <ol class="breadcrumb m-4">
            <li class="breadcrumb-item"><a href="?controller=global&method=index">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">nos missions</li>
        </ol>
    </div>
<div class="container">
    <h2 class="m-5 text-center">NOS MISSIONS</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut numquam placeat voluptatibus inventore quas ipsa repellendus soluta perferendis. Expedita, laboriosam reiciendis. Animi dicta impedit a ipsa. Explicabo, ratione nobis doloribus repellat 
    </p>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum iste tenetur minus consequatur porro corrupti saepe labore voluptate ea. Deserunt corrupti facilis modi perspiciatis,<br> voluptas excepturi asperiores velit amet minima veniam eum aperiam odit natus numquam repellendus recusandae beatae itaque. Maxime aliquam, veritatis ducimus quas amet fugiat provident voluptatum nostrum deserunt quo voluptas ipsa quam possimus ipsam dicta dolores unde aspernatur earum blanditiis in tenetur tempore excepturi <br>assumenda. Quae tenetur culpa quam, harum vel laudantium dolorem recusandae quaerat eligendi exercitationem officia sint ea rerum quo aliquid possimus explicabo nemo fugiat corrupti aliquam ratione! Adipisci necessitatibus tempora sit architecto non? Eius?
    </p>
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
