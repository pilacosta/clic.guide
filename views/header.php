<?php
//require '../check_connect.php';
$quartiers = get_quartier();
//$catagories = get_categorie();

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
                <a href=""><span>ES</span></a>
            </div>

        </div>
    </div><!--fin container-->

    <div class="filtres_top">
        <div class="container">
            <div class="row ">
                <form id="form_recherche" method="post" >
                    <div class="col-4">
                        <select name="catid" id="categorie">
                            <option value="-1">Categorie...</option>
                            <option value="">Artistes</option>
                            <option value="3">Photographes</option>
                            <option value="4">Peintres</option>
                            <option value="">Juridique</option>
                            <option value="">Beauté</option>
                            <option value="">Construction et décoration</option>
                            <option value="">Divertissement</option>
                            <option value="">Écoles</option>
                            <option value="6">Restaurants Asiatiques</option>
                            <option value="7">Restaurants Italiens</option>
                            <option value="8">Restaurants Mexicains</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <select name="quartier" id="quartier">
                            <option value="-1">Quartier...</option>
                            <?php
                            //var_dump($quartiers);
                            foreach ($quartiers as $id => $quartier) {
                                echo "<option value=\"$id\">" . utf8_encode($quartier['nom']) . '</option>';
                            }
                            ?>
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