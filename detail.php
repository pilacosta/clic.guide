<?php
require_once  'defines.php';
require_once 'db/db_access.php';
require_once 'views/page_head.php';
require_once 'views/header.php';

$id = $_GET['id'];
$user = get_user_by_id($id);
var_dump($user);

//var_dump();

// Chargement des articles
//$services = get_services('LIMIT 5');
?>


<main>

    <div class="container">
        <div class="retour-detail">
            <p><a href="index.php"><< Retour</a></p>
        </div>


        <div class="row detail-bg">
            <?php /*foreach ($services as $profil) { */?>
                <div class="row detail-annonce" ><!--onclick="location.href='test.html'"-->
                    <div class="col-9 gouche-detail">
                        <div class="row ">
                            <div class="col-12 detail-nom">
                                <h1><?= utf8_encode($user['titre']) ?></h1>
<!--                                <p><span>Quartier : </span>--><?//= utf8_encode($profil['quartier']) ?><!--</p>-->
                            </div>
                        </div>
                        <hr class="col-12">

                        <div class="info-detail">
                            <p><?= utf8_encode($user['infoLar'])?></p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-m-12 ajout-image">
                                <img src="<?= ARTICLE_IMG_PATH . $user['photo'] ?>" alt="photo <?= $user['titre'] ?>">
                            </div><!--fin adresse-->
                        </div>
                    </div>

                    <div class="col-3 col_droite_detail">
                        <div class="logo-detail">
                            <img src="<?= ARTICLE_IMG_PATH . $user['logo'] ?>" alt="photo <?= $user['titre'] ?>">
                        </div>

                        <div class="adresse-detail">
                            <p><span class="quartier"><?= $user['quartier'] ?></span>
                            <p><?= utf8_encode($user['adresse']) ?></p>
                            <p><?= $user['codepostal'] ?> Montréal, Québec</p>
                            <p><span>Tel.: </span><?= $user['telephone'] ?></p>
                            <p><?= $user['courriel'] ?></p>
                        </div>

                            <div class="carte">
                                <iframe src="https://www.google.com/maps/<?= $profil['codepostal'] ?>" width="250" height="250"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>


                               <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.1014357046893!2d-73.58113268493864!3d45.568398734506374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91ea4dda399a9%3A0xa6ab6a8d65a31ab6!2s4556+Rue+Saint-Zotique+E%2C+Montr%C3%A9al%2C+QC+H1T+1M4!5e0!3m2!1sfr!2sca!4v1485391999912" width="250" height="250"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>-->

                                <!--                    <img src="images/carte.png" alt="">-->
                            </div>



                    </div>
                </div><!--fin publi_annonce-->
            <?php /*} */?>
        </div> <!--     fin mi test nuevo  -->
    </div><!--fin container-->

</main>


<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>

</html>
