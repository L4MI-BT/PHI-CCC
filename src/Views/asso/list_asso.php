<p>Asso : </p>
<?php


    foreach ($list_asso as $info) {?>
    <p><?php echo $info->getNom_asso(); ?></p>
    <?php }?>
    <a href="?controller=asso&method=insert">ajouter</a>
   