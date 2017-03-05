<?php
require_once  'defines.php';
require_once 'db/db_access.php';
require_once 'views/page_head.php';
require_once 'views/header.php';

// Chargement des articles
//$services = get_services('LIMIT 3');

$id = $_GET['id'];
$user = get_user_by_id($id);
var_dump($user);

?>


<main>

    <div class="container">
        <div class="retour-detail">
            <p><a href="index.php"><< retour</a></p>
        </div>

<!--      mi test nuevo  -->
        <div class="row detail-bg">

                <div class="row publi_annonce" ><!--onclick="location.href='test.html'"-->
                    <div class="col-9 gouche-detail">
                        <div class="row ">
                            <div class="col-12 detail-nom">
                                <h1><?= utf8_encode($user['nom']) ?></h1>
                                <p><span>Quartier : </span><?= utf8_encode($user['quartier']) ?></p>
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

                    <div class="col-3 info-col-droite">
                        <img src="<?= ARTICLE_IMG_PATH . $user['logo'] ?>" alt="photo <?= $user['titre'] ?>">
                    </div>
                </div><!--fin publi_annonce-->

        </div> <!--     fin mi test nuevo  -->









    </div><!--fin container-->

</main>


<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>

</html>
