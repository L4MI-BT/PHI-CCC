<h1>Je suis le collecte</h1>

la collecte pret de chez moi:
    <a href="?controller=asso&method=search">recherche</a>

<?php


    foreach ($departement as $info) {?>
    <p><?php echo $info->getNom_asso(); ?></p>
    <?php }?>