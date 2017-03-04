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
$services = get_services('LIMIT 3');

//var_dump();

?>





<main>
    <div class="container">

        <div class="row">
            <div class="col-9 annonces"><!--annonces-->
                <div id="container-main"><!--accordion-->

                    <div class="accordion-container">
                        <a href="#" class="accordion-titulo">Categories<span class="toggle-icon"></span></a>
                        <div class="accordion-content">

                            <!--section categories-->
                            <div class="row"><!--division en 3-->

                                <div class="col-4 col-m-4 mi-menu">
                                    <div class="cat-ser">
                                        <p><a href="" class="cat-link">Agents immobiliers</a></p>
                                        <p> <a href="" class="cat-sublink">Agents vcbgfhfh</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p> <a href="" class="cat-link">Artistes</a></p>
                                        <p><a href="" class="cat-sublink">Photograpes</a></p>
                                        <p><a href="" class="cat-sublink">Peintres</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p><a href="" class="cat-link">Juridique</a></p>
                                        <p><a href="" class="cat-sublink">Juridique hhdsdhd</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p><a href="" class="cat-link">Beauté</a></p>
                                        <p><a href="" class="cat-sublink">Beauté jjere</a></p>
                                    </div>

                                </div>
                                <div class="col-4 col-m-4">

                                    <div class="cat-ser">
                                        <p> <a href="" class="cat-link">Construction et décoration</a></p>
                                        <p><a href="" class="cat-sublink">Construction</a></p>
                                        <p><a href="" class="cat-sublink">Décoration</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p> <a href="" class="cat-link">Divertissement</a></p>
                                        <p> <a href="" class="cat-sublink">Photograpes</a></p>
                                        <p><a href="" class="cat-sublink">Peintres</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p> <a href="" class="cat-link">Écoles</a></p>
                                        <p> <a href="" class="cat-sublink">Musique</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p> <a href="" class="cat-link">Entretien</a></p>
                                        <p><a href="" class="cat-sublink">Maison</a></p>
                                    </div>



                                </div>
                                <div class="col-4 col-m-4">

                                    <div class="cat-ser">
                                        <p><a href="" class="cat-link">Événements</a></p>
                                        <p><a href="" class="cat-sublink">Construction</a></p>
                                        <p><a href="" class="cat-sublink">Décoration</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p> <a href="" class="cat-link">Mécanique automobile</a></p>
                                        <p><a href="" class="cat-sublink">Photograpes</a></p>
                                        <p><a href="" class="cat-sublink">Peintres</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p><a href="" class="cat-link">Organizations communautaires</a></p>
                                        <p><a href="" class="cat-sublink">Musique</a></p>
                                    </div>
                                    <div class="cat-ser">
                                        <p> <a href="" class="cat-link">Restaurants</a></p>
                                        <p> <a href="" class="cat-sublink">Asiatiques</a></p>
                                        <p> <a href="" class="cat-sublink">Italiens</a></p>
                                        <p><a href="" class="cat-sublink">Mexicains</a></p>
                                    </div>

                                </div>

                            </div><!--fin division 3-->

                        </div><!--fin accordion-content-->
                    </div><!--fin accordion-container-->
                </div><!--fin accordion-->

                <!--fin section categories-->

<div>


                <!--annonces-->
    <?php foreach ($services as $profil) { ?>

                <div class="row publi_annonce" ><!--onclick="location.href='test.html'"-->
                    <div class="col-3 image-annonce">
                        <img src="<?= ARTICLE_IMG_PATH . $profil['photo'] ?>" alt="photo <?= $profil['nom'] ?>">
<!--                       <img src="upload_images/artistes-photo-06.jpg" alt="clic guide fleuriste">-->
                    </div>
                    <div class="col-9 info_annonce">
                        <div class="row entete-annonce">
                            <div class="col-4 logo_annonce">
                                <img src="<?= ARTICLE_IMG_PATH . $profil['logo'] ?>" alt="photo <?= $profil['nom'] ?>">
<!--                                <img src="upload_images/artistes-logo-p-09.png" alt="">-->
                            </div>
                            <div class="col-8 titre_info">
                                <a href="detail.php"><h1><?= $profil['titre'] ?></h1></a>
<!--                                <a href="detail.php"><h1>Chantal Mathieu photographe</h1></a>-->
                            </div>

                        </div>
                        <hr class="col-12">
                        <p class="text_info"><?= utf8_encode($profil['infoSmall'])?></p>


                            <div class="row">
                                <div class="col-1 col-m-2 carte">
                                    <img src="upload_images/position-annonce.png" alt="position annonces clic guide montreal">

                                </div>
                                <div class="col-11 col-m-10 info_adresse">
                                    <p><span class="quartier"><?= $profil['quartier'] ?></span>
                                        <?= utf8_encode($profil['adresse']) ?>
                                        <p><?= $profil['codepostal'] ?> Montréal, Québec</p>
                                        <p><span>Tel.: </span><?= $profil['telephone'] ?></p>

                                </div><!--fin adresse-->
                            </div>
                    </div>
                </div><!--fin publi_annonce-->

    <?php } ?>

</div>
<!--annonce 2-->





<!--ennumeration-->
                <div class="navigation_cat">
                    <a href="#" class="prev_pag"><</a>
                    <a href="#" class="pag_selecteur current">1</a>
                    <a href="#" class="pag_selecteur">2</a>
                    <a href="#" class="pag_selecteur">3</a>
                    <a href="#" class="pag_selecteur">4</a>
                    <a href="#" class="pag_selecteur">5</a>
                    <a href="#" class="next_pag">></a>
                </div>
            </div><!--fin annonces-->

            <div class="col-3 col_droite_pub">
                <div class="container">
                    <img src="upload_images/pub-google_01.png" alt="">
                    <img src="upload_images/pub-google_02.png" alt="">
                </div><!--fin container-->
            </div><!--fin colonne droite-->
        </div><!--fin row-->
    </div><!--fin container-->

</main>




<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>

</html>