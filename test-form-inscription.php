<?php if (array_key_exists(RESTAURANT, $_GET)) {
    foreach ($serv_resto as $profil) { ?>

        <div class="row publi_annonce" ><!--onclick="location.href='test.html'"-->
            <div class="col-3 image-annonce">
                <img src="<?= ARTICLE_IMG_PATH . $profil['photo'] ?>" alt="photo <?= $profil['titre'] ?>">
                <!--                       <img src="upload_images/artistes-photo-06.jpg" alt="clic guide fleuriste">-->
            </div>
            <div class="col-9 col-m-9 info_annonce">
                <div class="row entete-annonce">
                    <div class="col-4 logo_annonce">
                        <img src="<?= ARTICLE_IMG_PATH . $profil['logo'] ?>" alt="photo <?= $profil['titre'] ?>">
                        <!--                                <img src="upload_images/artistes-logo-p-09.png" alt="">-->
                    </div>
                    <div class="col-8 titre_info">
                        <a href="detail.php?titre=<?= $profil['id'] ?>"><h1><?= utf8_encode($profil['titre']) ?></h1></a>
                    </div>
                </div>
                <hr class="col-12">
                <p class="text_info"><?= utf8_encode($profil['infoSmall'])?></p>
                <div class="row div-adresse">
                    <div class="col-1 col-m-2 carte">
                        <img src="upload_images/position-annonce.png" alt="icon annonces clic guide montreal">
                    </div>
                    <div class="col-11 col-m-10 info_adresse">
                        <p><span class="quartier"><?= utf8_encode($profil['quartier']) ?></span>
                        <p><?= utf8_encode($profil['adresse']) ?></p>
                        <p><?= $profil['codepostal'] ?> Montréal, Québec</p>
                        <p><span>Tel.: </span><?= $profil['telephone'] ?></p>
                    </div><!--fin adresse-->
                </div>
            </div>
        </div><!--fin publi_annonce-->

    <?php }

} else if (array_key_exists(ARTIST, $_GET)) {
    foreach ($serv_artist as $profil) { ?>

        <div class="row publi_annonce" ><!--onclick="location.href='test.html'"-->
            <div class="col-3 image-annonce">
                <img src="<?= ARTICLE_IMG_PATH . $profil['photo'] ?>" alt="photo <?= $profil['titre'] ?>">
                <!--                       <img src="upload_images/artistes-photo-06.jpg" alt="clic guide fleuriste">-->
            </div>
            <div class="col-9 col-m-9 info_annonce">
                <div class="row entete-annonce">
                    <div class="col-4 logo_annonce">
                        <img src="<?= ARTICLE_IMG_PATH . $profil['logo'] ?>" alt="photo <?= $profil['titre'] ?>">
                        <!--                                <img src="upload_images/artistes-logo-p-09.png" alt="">-->
                    </div>
                    <div class="col-8 titre_info">
                        <a href="detail.php?titre=<?= $profil['id'] ?>"><h1><?= utf8_encode($profil['titre']) ?></h1></a>
                    </div>
                </div>
                <hr class="col-12">
                <p class="text_info"><?= utf8_encode($profil['infoSmall'])?></p>
                <div class="row div-adresse">
                    <div class="col-1 col-m-2 carte">
                        <img src="upload_images/position-annonce.png" alt="icon annonces clic guide montreal">
                    </div>
                    <div class="col-11 col-m-10 info_adresse">
                        <p><span class="quartier"><?= utf8_encode($profil['quartier']) ?></span>
                        <p><?= utf8_encode($profil['adresse']) ?></p>
                        <p><?= $profil['codepostal'] ?> Montréal, Québec</p>
                        <p><span>Tel.: </span><?= $profil['telephone'] ?></p>
                    </div><!--fin adresse-->
                </div>
            </div>
        </div><!--fin publi_annonce-->


    <?php }
} ?>