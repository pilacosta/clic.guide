<?php
require_once  'defines.php';
require_once 'db/db_access.php';
require_once 'views/page_head.php';
require_once 'views/header.php';

//
//define('ARTICLE_IMG_PATH', 'upload_images/');
//define('CAT_ID','catid');

//var_dump();

// Chargement des articles
$services = get_services('LIMIT 20');
?>


<main>

    <div class="container">
    <div class="retour-detail">
        <p><a href="index.php"><< retour</p></a>

    </div>


        <div class="row detail-bg">
            <div class="col-9 gouche-detail">
                <div class="row">

  <?php foreach ($services as $profil) { ?>

                    <div class="container ">
                        <div class="detail-nom">
                            <h1><?= $profil['titre'] ?></h1>
<!--                            <h1>Chantal Mathieu photographe</h1>-->

                            <p><span>Quartier : </span><?= $profil['quartier'] ?></p>
                        </div>
                        <div class="info-detail">
                            <p><?= utf8_encode($profil['infoLar'])?></p>
                        </div>

                        <hr class="col-12">

                        <!-- image detail -->
                            <div class="row">
                                <div class="col-12 ajout-image">
                                    <img src="<?= ARTICLE_IMG_PATH . $profil['photo'] ?>" alt="photo <?= $profil['nom'] ?>">

<!--                                    <img src="upload_images/artistes-art-05.jpg" alt="">-->
                                </div>
                            </div>
                    </div><!--fin container-->
                </div>

            </div><!--fin annonces-->

            <div class="col-3  col_droite_detail">
                <div class="container">

                    <div class="info-col-droite">
                        <img src="<?= ARTICLE_IMG_PATH . $profil['logo'] ?>" alt="photo <?= $profil['nom'] ?>">

                        <p>chantal@gmail.com</p>

                    </div>

                </div><!--fin container-->
            </div><!--fin colonne droite-->
        </div><!--fin row-->

<?php } ?>

    </div><!--fin container-->

</main>


<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>

</html>
