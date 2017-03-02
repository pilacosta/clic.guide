<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
?>


<main>

    <div class="container">

        <div class="row">
            <div class="col-9">
                <div class="row">

                    <div class="container">
                        <div>
                            <h1>Bienvenue sur clic.guide.montreal</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci risus,
                                lacinia eu ante quis, fringilla hendrerit leo. Donec finibus augue ut urn. </p>
                        </div>


                        <div class="profil-base">
                            <div class="col-6 profil-gouche">
                                <h1>Chantal Mathieu photographe</h1>
                                <p>Rossemont</p>
                            </div>

                            <div class="col-6 profil-droite">
                                <a href="" class="bouton-ajouter">Ajouter un logo</a>
                                <p>chantal@gmail.com</p>
                            </div>
                        </div>
                        <hr class="col-12">

                        <!--    Ajout image -->
                            <div class="row">
                                <div class="col-12 ajout-image">
                                    <a href="" class="bouton">Ajouter une image</a>
                                </div>
                                <div class="col-4 ">
                                    <img src="images/artistes-art-05.jpg" alt="">
                                </div>
                                <div class="col-8 mod-image">
                                    <a href="" class="bouton-mod">Modifier</a>
                                    <a href="" class="bouton-sup">Supprimer</a>
                                </div>
                            </div>

                    </div><!--fin container-->

                </div>



            </div><!--fin annonces-->

            <div class="col-3  col_droite">
                <div class="container">
                    <div class="info-col-droite">
                        <h2>Instruction pour annoncer</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci risus,
                            lacinia eu ante quis, fringilla</p>
                    </div>
                    <div class="info-col-droite">
                        <h2>Instruction pour annoncer</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci risus,
                            lacinia eu ante quis, fringilla</p>
                    </div>

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
