<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
?>


<main>

    <div class="container">
    <div class="retour-detail">
        <p><a href="index.php"><< retour</p></a>

    </div>
        <div class="row detail-bg">
            <div class="col-9 gouche-detail">
                <div class="row">

                    <div class="container ">
                        <div class="detail-nom">
                            <h1>Chantal Mathieu photographe</h1>
                            <p><span>Quartier :</span> Rossemont</p>
                        </div>
                        <div class="info-detail">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci risus,
                                lacinia eu ante quis, fringilla hendrerit leo. Donec finibus augue ut urn. </p>
                        </div>

                        <hr class="col-12">

                        <!-- image detail -->
                            <div class="row">
                                <div class="col-12 ajout-image">
                                    <img src="images/artistes-art-05.jpg" alt="">
                                </div>
                            </div>
                    </div><!--fin container-->
                </div>

            </div><!--fin annonces-->

            <div class="col-3  col_droite_detail">
                <div class="container">

                    <div class="info-col-droite">
                        <img src="images/artistes-logo-p-09.png" alt="">
                        <p>chantal@gmail.com</p>

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
