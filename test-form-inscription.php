<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
?>

<?php
//$page_title = 'formulaire inscription';
//require_once 'defines.php';


//var_dump($_POST);

$liste_horaire = array('Choisir...', 'Temps partiel', 'Temps plein', 'Occasionnel', 'Le matin', 'Après midi');


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

// Réception du nom
$nom = '';
$nom_valide = true;
if (array_key_exists('saisie_nom', $_POST)) {
    // PHP assure le filtrage de la chaîne d'entrée
    $nom = filter_input(INPUT_POST, 'saisie_nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/[a-z]\w{1,}/', $nom));
}
//[A-Za-z ]*$



// Réception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('saisie_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisie_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}
//telephone
$phone = '';
$telephone_valide = true;
if(array_key_exists('saisie_telephone', $_POST)){
    $phone = filter_input(INPUT_POST, 'saisie_telephone' , FILTER_SANITIZE_STRING);
    $telephone_valide = (1 === preg_match('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $phone));
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

$password = '';
$password_valide = true;
if(array_key_exists('saisie_password', $_POST)){
    $password = filter_input(INPUT_POST, 'saisie_password' , FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/^[a-zA-Z0-9_]{6}$/', $password));
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

?>
<div id="form_inscripion">

    <form id="formulaire" action="<?= basename(__FILE__) ?>" method="post">

        <!--    Description d l'emploi -->
        <div>
            <label for="saisie_description">Description de l'emploi</label>
            <textarea name="textarea" placeholder="Description..." id="saisie_description"
                      class="<?= $description_valide ? '' : 'invalid' ?>" rows="5" cols="68" ></textarea>
            <?php if ( ! $description_valide) { ?>
                <p>Vous devez écrire une description</p>
            <?php } ?>
        </div>

        <div>
            <input type="submit" value="Inscription"/>
        </div>
    </form>

</div>


<?php
require_once 'views/javascript.php';
?>
</html>


</main>


<?php
require_once 'views/footer.php';
require_once 'views/javascript.php';
?>

</html>
