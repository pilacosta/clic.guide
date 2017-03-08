<?php
require_once 'check_connect.php';
require_once 'views/page_head.php';
require_once 'views/header.php';

// POURQUOI REDETRUIRE LA SESSION ICI?
$_SESSION = array();
session_destroy();

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
                                <label for="email">Adresse courriel</label>
                                <input type="text" name="email" id="email" placeholder="" class="<?= $username_valide ? '' : 'invalid' ?>"
                                       value="<?= array_key_exists('email', $_POST) ? $_POST['email'] : '' ?>">
                            </div>
                            <div class="col-6 form-largueur">
                                <label for="password ">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="" class="<?= $password_valide ? '' : 'invalid' ?>" value="">
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

                        <div id="msg_erreur">
                            <div class="col-6 form-largueur">
                                <!-- messages d'erreur si mail et password non reconnus -->
                                <?php if (is_logged_in()) {  ?>

                                    <p>vous êtes connecté</p>
                                    <a href="">Deconnexion</a>
                                <?php } else if (!empty($_POST)) { ?>
                                    <p>L'adresse courriel ou le mot de passe n'est pas valide</p>
                                <?php }?>

                                <!-- messages d'erreur si mail et password pas au bon format -->
                                <!-- <?php /*if (!$username_valide && !empty($_POST)) { */?>
                                <p>Format de courriel non valide</p>
                            --><?php /*}*/?>
                            </div>

                            <div class="col-6 form-largueur">
                                <?php if (!$password_valide && !empty($_POST)) { ?>
                                    <p>Le mot de passe doit contenir au moins 6 caractères</p>
                                <?php } ?>
                            </div>
                        </div>

                    </div><!--fin container-->
                </div>
            </div><!--fin annonces-->
            <?php
        require_once 'views/col-droite.php';
        ?>
        </div><!--fin row-->
    </div><!--fin container-->
</main>

<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>

</html>
