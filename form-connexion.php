<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
?>





<main>

    <div class="container">

        <div class="row">
            <div class="col-9  form_connexion"><!--annonces-->
                <div class="row">

                    <div class="container">
                        <h1>Ouvrir une session</h1>
                        <form action="<?= basename(__FILE__) ?>" method="post">
                            <div class="col-6 form-largueur">
                                <label for="mail">Adresse courriel</label>
                                <input type="text" name="mail" id="mail" placeholder="" class="<?= $username_valide ? '' : 'invalid' ?>"
                                       value="<?= array_key_exists('mail', $_POST) ? $_POST['mail'] : '' ?>"/>
                            </div>
                            <div class="col-6 form-largueur">
                                <label for="password ">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="" class="<?= $password_valide ? '' : 'invalid' ?>" value=""/>
                            </div>
                            <div class=" row ">
                                <div class="col-6 form_bouton">
                                    <input type="submit" name="login" value="Connexion">
                                </div>
                                <div class="col-6 oublie-mot-passe">
                                    <a href="#">Oublié votre mot de passe?</a>
                                </div>
                            </div>


                        </form>
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
