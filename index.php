<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
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

                                <div class="col-4">
                                    <ul>
                                        <li class="base-cat"><a href="test.html">Agents immobiliers</a></li>
                                        <li class="base-cat"><a href="">Artistes</a>
                                            <ul>
                                                <li class="sub-cat"><a href="">photograpes</li>
                                                <li class="sub-cat"><a href="">peintres</li>
                                            </ul>
                                        </li>

                                        <li class="base-cat"><a href="">Juridique</a></li>
                                        <li class="base-cat"><a href="">Beauté</a></li>
                                    </ul>

                                </div>
                                <div class="col-4">
                                    <li class="sub-cat"><a href="">Construction et décoration</a></li>
                                    <li class="sub-cat"><a href="">Divertissement</a></li>
                                    <li class="sub-cat"><a href="">Écoles</a></li>
                                    <li class="sub-cat"><a href="">Entretien</a></li>

                                </div>
                                <div class="col-4">
                                    <li class="sub-cat"><a href="">Événements</a></li>
                                    <li class="sub-cat"><a href="">Mécanique automobile</a></li>
                                    <li class="sub-cat"><a href="">Organizations communautaires</a></li>
                                    <li class="sub-cat"><a href="">Restaurants</a>
                                        <ul>
                                            <li class="sub-cat"><a href="">Restaurants asiatiques</li>
                                            <li class="sub-cat"><a href="">Restaurants asiatiques</li>

                                        </ul>
                                    </li>
                                </div>

                            </div><!--fin division 3-->

                        </div><!--fin accordion-content-->
                    </div><!--fin accordion-container-->
                </div><!--fin accordion-->

                <!--fin section categories-->


                <!--annonces-->

                <div class="row publi_annonce" ><!--onclick="location.href='test.html'"-->
                    <div class="col-3 image-annonce">
                        <img src="images/artistes-photo-06.jpg" alt="clic guide fleuriste">
                    </div>
                    <div class="col-9 info_annonce">
                        <div class="row entete-annonce">
                            <div class="col-4 logo_annonce">
                                <img src="images/artistes-logo-p-09.png" alt="">
                            </div>
                            <div class="col-8 titre_info">
                                <a href="detail.php"><h1>Chantal Mathieu photographe</h1></a>
                            </div>

                        </div>
                        <hr class="col-12">
                        <p class="text_info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci risus,
                            lacinia eu ante quis, fringilla hendrerit leo. Donec finibus augue ut urn. </p>

                            <div class="row">
                                <div class="col-1 col-m-2 carte">
                                    <img src="images/position-annonce.png" alt="position annonces clic guide montreal">

                                </div>
                                <div class="col-11 col-m-10 info_adresse">
                                    <p><span class="quartier">Anjou</span>
                                    2569 D Jean-Talon Est
                                        <p>H2A 1T8 Montreal, Québec</p>
                                        <p><span>Tel.:</span> 514 723 0688</p>
                                </div><!--fin adresse-->
                            </div>
                    </div>
                </div><!--fin publi_annonce-->

<!--annonce 2-->
                <div class="row publi_annonce">
                    <div class="col-3 image-annonce">
                        <img src="images/fleuriste.jpg" alt="clic guide fleuriste">
                    </div>
                    <div class="col-9 info_annonce">
                        <div class="row">
                            <div class="col-3 logo_annonce">
                                <img src="images/logo_fleuriste2.jpg" alt="">
                            </div>
                            <div class="col-9 titre_info">
                                <h1>Photographie</h1>
                            </div>
                            <hr class="col-12 separeteur">
                        </div>

                        <p class="text_info">J'offre mes services : à la réalisation de vidéo corporatives,
                            télévisuelles et évenementielles etc, la réalisation et d'événements (mariage, maternité, ...</p>

                        <div class="row">
                            <div class="col-1 col-m-2 carte">
                                <img src="images/position-annonce.png" alt="position annonces clic guide montreal">
                            </div>
                            <div class="col-11 col-m-10 info_adresse">
                                <p><span>Quartier :</span>  <span class="quartier">Anjou</span>
                                    2569 D Jean-Talon Est
                                <p>H2A 1T8 Montreal, Québec</p>
                                <p><span>Tel.:</span> 514 723 0688</p>
                            </div><!--fin adresse-->
                        </div>
                    </div>
                </div><!--fin publi_annonce-->

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
                    <img src="images/pub-google_01.png" alt="">
                    <img src="images/pub-google_02.png" alt="">
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
