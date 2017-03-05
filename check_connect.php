<?php
session_start();
//session_unset();
//session_destroy();
//require_once 'donnees.php';
require_once 'defines.php';
require_once 'db/db_access.php';
//var_dump($_SESSION);

// verifie si le username et le password correspondent à un utilisateur valide
function user_authenticated($username, $password) {
    $user_mail = get_user_by_mail($username);
    return $user_mail['password'] === $password;
};

// utilisateur connecté si la donnée de session username n'est pas vide
function is_logged_in() {
    return (array_key_exists(PS_EMAIL, $_SESSION) && (!empty($_SESSION[PS_EMAIL])));
}




$username = '';
$username_valide = true;
$password = '';
$password_valide = true;

// reception des données du formulaire de connexion
if (is_logged_in() && array_key_exists('deconnect', $_POST)) {
    $_SESSION = array(); // deconnexion
    session_destroy();
} else if (! is_logged_in()
    && array_key_exists('email', $_POST)
    && array_key_exists('password', $_POST)
    && array_key_exists('login', $_POST)) {
    // filtrage et validation
    $username = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $username_valide = (false !== filter_var($username, FILTER_VALIDATE_EMAIL));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1 === preg_match('/\w{6,}/', $password));
    // connexion
    if ($username_valide
        && $password_valide
        && user_authenticated($username, $password)) {
        $_SESSION[PS_EMAIL] = $username;
        header('location:profil.php');
        exit;
    }
}
