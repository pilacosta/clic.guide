<?php
//var_dump($page_title);

?>

<header>
    <div class="sec_login">
        <div class="container">
<!--            <div class="logo-test">-->
                <a href="../index.php"><img id="logo" src="images/clip-guide-montreal-logo280px.png" alt="clic guide montreal logo"></a>
<!--            </div>-->


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
                        <select name="categorie" id="categorie">
                            <option value="-1">Choisir...</option>
                            <option value="">Montréal</option>
                            <option value="">Québec</option>
                            <option value="">Gâtineau</option>
                            <option value="">Sherbrooke</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <select name="quartier" id="quartier">
                            <option value="-1">Choisir...</option>
                            <option value="">Montréal</option>
                            <option value="">Québec</option>
                            <option value="">Gâtineau</option>
                            <option value="">Sherbrooke</option>
                        </select>
                    </div>
                    <div class="col-1 bouton-submit">
                        <input type="submit" name="search" id="search_submit" value="">
                        <div><a href="" class="fa fa-search"></a></div>

                    </div>
                    <div class="col-3 text_carte_affaires">
                        <h2>Votre carte d'affaires interactive !</h2>
                    </div>
                </form>

            </div>
        </div><!--fin container-->
    </div>
</header>