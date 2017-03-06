<?php
//require '../check_connect.php';
?>

<header>
    <div class="sec_login">
        <div class="container">
            <div class="logo-xl-sm">

                <a href="../index.php">
                    <img id="logo" src="../upload_images/clip-guide-montreal-logo280px.png" alt="clic guide montreal logo">
                    <img id="logo-small" src="../upload_images/g.png" alt="">
                </a>
            </div>


         <div class="connexion">
                <a href="../form-connexion.php">connexion</a>
                <a href="../form-inscription.php">inscription</a>
<!--             <input type="submit" name="deconnect" value="deconnexion">-->



                <a href=""><span>ES</span></a>
            </div>






        </div>
    </div><!--fin container-->



    <div class="filtres_top">
        <div class="container">
            <div class="row ">

                <form id="form_recherche" method="post" >

                    <div class="col-4">
                        <select name="categorie" id="categorie">
                            <option value="-1">Categorie...</option>
                            <option value="">Artistes</option>
                            <option value="">Photographes</option>
                            <option value="">Peintres</option>
                            <option value="">Juridique</option>
                            <option value="">Beauté</option>
                            <option value="">Construction et décoration</option>
                            <option value="">Divertissement</option>
                            <option value="">Écoles</option>
                            <option value="">Restaurants Asiatiques</option>
                            <option value="">Restaurants Italiens</option>
                            <option value="">Restaurants Mexicains</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <select name="quartier" id="quartier">
                            <option value="-1">Quartier...</option>
                            <option value="">Anjou</option>
                            <option value="">Côte-des-Neiges</option>
                            <option value="">Lachine</option>
                            <option value="">LaSalle</option>
                            <option value="">Plateau-Mont-Royal</option>
                            <option value="">Le Sud-Ouest</option>
                            <option value="">L'Île-Bizard</option>
                            <option value="">Hochelaga</option>
                            <option value="">Montréal-Nord</option>
                            <option value="">Outremont</option>
                            <option value="">Pierrefonds</option>
                            <option value="">Rivière-des-Prairies</option>
                            <option value="">Rosemont</option>
                            <option value="">Saint-Laurent</option>
                            <option value="">Saint-Léonard</option>
                            <option value="">Verdun</option>
                            <option value="">Ville-Marie</option>
                            <option value="">Villeray</option>

                        </select>


                    </div>
                    <div class="col-1 bouton-submit">
                        <input type="submit" name="search" id="search_submit" value="">
                        <div><a href="../test-form-inscription.php" class="fa fa-search"></a></div>

                    </div>
                    <div class="col-3 text_carte_affaires">
                        <h2>Votre carte d'affaires interactive !</h2>
                    </div>
                </form>

            </div>
        </div><!--fin container-->
    </div>
</header>