<?php
require_once  'defines.php';
require_once 'db/db_access.php';
require_once 'views/page_head.php';
require_once 'views/header.php';

$quartiers = get_quartier();
$catagories = get_categorie();

var_dump($quartiers);

/*$id = $_GET['id'];
$categories = get_user_by_cat($id);
//var_dump($categories);

$id = $_GET['$id'];
$quartiers = get_user_by_quartier($id)  ;
var_dump($quartiers);*/

//$qua = $_GET['quartier'];
//$quartiers = get_last_3users() ;
//var_dump($quartiers);



?>




<?php
//$page_title = 'formulaire inscription';


//require_once 'defines.php';



//var_dump($_POST);



function retire_accents($str) {
    $resultat = strtolower(str_replace(array('é','ï'),array('e','i'),$str));
    return $resultat;
}

// Affichage initial du formulaire ? ou bien réception des données ?
$en_reception = array_key_exists('saisie_nom', $_POST)
    && array_key_exists('saisie_prenom', $_POST)
    && array_key_exists('saisie_email', $_POST)
    && array_key_exists('saisie_telephone', $_POST)
    && array_key_exists('saisie_adresse', $_POST)
    && array_key_exists('saisie_cod_postal', $_POST)
    && array_key_exists('saisie_password', $_POST)
    && array_key_exists('horaire', $_POST)
    && array_key_exists('datepicker', $_POST)
    && array_key_exists('textarea', $_POST);

// Réception du nom enterprise ou service
$nom = '';
$nom_valide = true;
if (array_key_exists('saisie_nom', $_POST)) {
    // PHP assure le filtrage de la chaîne d'entrée
    $nom = filter_input(INPUT_POST, 'saisie_nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/[a-z]\w{1,}/', $nom));
}

// mot de passe
$password = '';
$password_valide = true;
if(array_key_exists('saisie_password', $_POST)){
    $password = filter_input(INPUT_POST, 'saisie_password' , FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/^[a-zA-Z0-9_]{6}$/', $password));
}

// Réception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('saisie_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisie_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

// confirmation mot de passe
$password = '';
$password_valide = true;
if(array_key_exists('saisie_password', $_POST)){
    $password = filter_input(INPUT_POST, 'saisie_password' , FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/^[a-zA-Z0-9_]{6}$/', $password));
}

// Réception du courriel (visiteurs contactent)
$email = '';
$email_valide = true;
if (array_key_exists('saisie_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisie_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}


// Réception service categorie
$categories_valides = true;
$cat = array(); // categorie sélectionné par l'utilisateur
if (array_key_exists('categorie', $_POST)) {
    $cat = $_POST['categorie'];
}
// Categorie est valide si on est affichage initial ou bien si on a au moins un item sélectionné
if ($en_reception && empty($cat)) {
    $categories_valides = false;
}


// Réception service quartier
$quartiers_valides = true;
$quartier = array(); // quartier sélectionné par l'utilisateur
if (array_key_exists('quartier', $_POST)) {
    $quartier = $_POST['quartier'];
}
// Categorie est valide si on est affichage initial ou bien si on a au moins un item sélectionné
if ($en_reception && empty($quartier)) {
    $quartiers_valides = false;
}


//adresse
$adresse = '';
$adresse_valide = true;
if(array_key_exists('saisie_adresse', $_POST)){
    $adresse = filter_input(INPUT_POST, 'saisie_adresse' , FILTER_SANITIZE_STRING);
    $adresse_valide = (1 === preg_match('/[a-z]\w{1,}/', $adresse));//
}

// Code postal
$cdpostal = '';
$cdPostal_valide = true;
if (array_key_exists('saisie_cod_postal', $_POST)) {
    $cdpostal = filter_input(INPUT_POST, 'saisie_cod_postal', FILTER_SANITIZE_STRING);
    $cdPostal_valide = (1 === preg_match('/^[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}(\-| |){1}[0-9]{1}[a-zA-Z]{1}[0-9]{1}$/', $cdpostal));
}

//telephone
$phone = '';
$telephone_valide = true;
if(array_key_exists('saisie_telephone', $_POST)){
    $phone = filter_input(INPUT_POST, 'saisie_telephone' , FILTER_SANITIZE_STRING);
    $telephone_valide = (1 === preg_match('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $phone));
}

// Réception des textarea
$description_valide = true;
$description = '';
if (array_key_exists('textarea', $_POST)) {
    $description = $_POST['textarea'];
}
if ($en_reception && empty($description)) {
    $description_valide = false;
}


if ($en_reception && $nom_valide
    && $prenom_valide
    && $email_valide
    && $telephone_valide
    && $adresse_valide
    && $cdPostal_valide
    && $password_valide
    && $horaire_valides
    && $calendrier_valide
    && $description_valide) {
    // Les données de formulaire sont valides
    header('Location:index.php');
    exit;
}

require_once 'views/page_head.php';


?>

<!---->

<main>

    <div class="container">

        <div class="row section_form">
            <div class="col-9  form_inscripion"><!--form inscription-->
                <div class="row">

                    <div class="container">
                        <h1>Inscrire mon enterprise ou service</h1>
<!--                        <form id="formulaire" action="profil.php" method="post">-->
                        <form id="formulaire" action="<?= basename(__FILE__) ?>" method="post">

                            <!--nom compagnie ou service-->
                            <div class="col-6  form-largueur">
                                <label for="saisie_nom"><span>*</span> Nom enterprise ou service : <?= $cat['nom'] ?></label>
                                <input type="text" placeholder="votre nom" id="saisie_nom"
                                       name="saisie_nom" class="<?= $nom_valide ? '' : 'invalid' ?>" value="<?= $nom ?>"/>
                                <?php if ( ! $nom_valide) { ?>
                                    <p>Le nom n'est pas valide. Le nom doit contenir au moins deux caractères</p>
                                <?php } ?>
                            </div>

                            <!--mot de passe-->
                            <div class="col-6  form-largueur">
                                <label for="saisie_password"><span>*</span> Mot de passe : </label>
                                <input type="password" placeholder="minimum six caractères" id="saisie_password"
                                       name="saisie_password" class="<?= $password_valide ? '' : 'invalid' ?>" value="<?= $password ?>"/>
                                <?php if ( ! $password_valide) { ?>
                                    <p>Le password n'est pas valide. <br>Vous devez écrire au moins six caractères</p>
                                <?php } ?>
                            </div>

                            <!--courriel-->
                            <div class="col-6 form-largueur">
                                <label for="saisie_email"><span>*</span> Courriel : </label>
                                <input type="text" placeholder=" exemple@domaine.com" id="saisie_email"
                                       name="saisie_email" class="<?= $email_valide ? '' : 'invalid' ?>" value="<?= $email ?>"/>
                                <?php if ( ! $email_valide) { ?>
                                    <p>L'adresse courriel n'est pas valide.</p>
                                <?php } ?>
                            </div>


                            <div class="row">
                                <div class=" col-12 subtitres-form">
                                    <h3 >Mon enterprise ou service</h3>
                                    <p>Cette information apparaîtra sur votre profil</p>
                                </div>
                            </div>


                            <!--courriel (visiteurs contacter)-->
                            <div class="col-6  form-largueur">
                                <label for="saisie_email"><span>*</span> Courriel : </label>
                                <input type="text" placeholder=" exemple@domaine.com" id="saisie_email"
                                       name="saisie_email" class="<?= $email_valide ? '' : 'invalid' ?>" value="<?= $email ?>"/>
                                <?php if ( ! $email_valide) { ?>
                                    <p>L'adresse courriel n'est pas valide.</p>
                                <?php } ?>
                            </div>

                            <!--Adresse-->
                            <div class="col-6  form-largueur">
                                <label for="saisie_adresse"><span>*</span> Adresse : </label>
                                <input type="text" placeholder="votre adresse" id="saisie_adresse"
                                       name="saisie_adresse" class="<?= $adresse_valide ? '' : 'invalid' ?>" value="<?= $adresse ?>"/>
                                <?php if ( ! $adresse_valide) { ?>
                                    <p>L'adresse n'est pas valide. L'adresse doit contenir au moins deux caractères</p>
                                <?php } ?>
                            </div>

                            <!--code postal-->
                            <div class="col-6  form-largueur">
                                <label for="saisie_cod_postal"><span>*</span> Code postal : </label>
                                <input type="text" placeholder="h1t 1m4 / H1T 1M4" id="saisie_cod_postal"
                                       name="saisie_cod_postal" class="<?= $cdPostal_valide ? '' : 'invalid' ?>" value="<?= $cdpostal ?>"/>
                                <?php if ( ! $cdPostal_valide) { ?>
                                    <p>Le code postal n'est pas valide.</p>
                                <?php } ?>
                            </div>

                            <!--    telephone -->
                            <div class="col-6 form-largueur">
                                <label for="saisie_telephone"><span>*</span> Téléphone : </label>
                                <input type="tel" placeholder="(000) 000-0000" id="saisie_telephone"
                                       name="saisie_telephone" class="<?=$telephone_valide  ? '' : 'invalid'?>" value="<?=$phone?>"/>

                                <?php if(!$telephone_valide){ ?>
                                    <p>Le numero téléphone n'est pas valide.</p>
                                <?php } ?>
                            </div>


                            <!-- Select liste de categories -->
                            <div class="col-6 form-largueur">
                                <label for="categorie">Categorie : </label>
                                <select class="<?= $categories_valides ? '' : 'invalid' ?>" name="categorie[]" id="categorie" ><!-- multiple="multiple"-->
                                    <?php foreach ($catagories as $cat) {
                                        $option_value = retire_accents($cat);
                                        ?>
                                        <option value="<?= $option_value ?>"
                                            <?= array_key_exists('categorie', $_POST) && in_array($option_value,$_POST['categorie']) ? 'selected="selected"' : '' ?>
                                        ><?= $cat['nom'] ?></option>

                                    <?php } ?>
                                </select>
                                <?php if ( ! $categories_valides) { ?>
                                    <p>Au moins un horaire doit être sélectionné.</p>
                                <?php } ?>
                            </div>

                            <!-- Select liste de quartier -->
                            <div class="col-6 form-largueur">
                                <label for="quartier">Quartier : </label>
                                <select class="<?= $quartiers_valides ? '' : 'invalid' ?>" name="quartier[]" id="quartier" ><!-- multiple="multiple"-->
                                    <?php foreach ($quartiers as $quartier) {
                                        $option_value = retire_accents($quartier);
                                        ?>
                                        <option value="<?= $option_value ?>"
                                            <?= array_key_exists('$quartier', $_POST) && in_array($option_value,$_POST['$quartier']) ? 'selected="selected"' : '' ?>
                                        ><?= utf8_encode($quartier['nom'])?></option>
                                    <?php } ?>
                                </select>
                                <?php if ( ! $quartiers_valides) { ?>
                                    <p>Au moins un horaire doit être sélectionné.</p>
                                <?php } ?>
                            </div>

<!--



                            <!--    Description d l'emploi -->
                            <div class="row">
                                <div class="col-12  area-description">
                                    <label for="saisie_description">Description de service (max 250 mots)</label>
                                    <textarea name="textarea" placeholder="Description..." id="saisie_description"
                                              class="<?= $description_valide ? '' : 'invalid' ?>" rows="5" cols="68" ></textarea>
                                    <?php if ( ! $description_valide) { ?>
                                        <p>Vous devez écrire une description</p>
                                    <?php } ?>
                                </div>
                            </div>



                            <div class=" row sec-enregistrer">
                                <div class="col-2 col-m-3  form_bouton">
                                    <input type="submit" name="login" value="Enregistrer">
                                </div>
                                <div class="col-10 col-m-9 form-annuler">
                                    <a href="profil.php">Annuler</a>
                                </div>
                            </div>


                        </form>
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
