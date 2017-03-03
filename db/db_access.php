<?php
/**
 *
 */
/*define('DB_HOST', '127.0.0.1'); // Host DB
define('DB_USERNAME', 'ma_boutique_user'); // Host DB
define('DB_PASSWORD', 'trn0lnMYmL2o8jcb'); // Host DB
define('DB_NAME', 'ma_boutique'); // Host DB*/

define('DB_HOST', '127.0.0.1'); // Host DB
define('DB_USERNAME', 'root'); // Host DB
define('DB_PASSWORD', ''); // Host DB
define('DB_NAME', 'clic-guide-montreal'); // Host DB

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}

// Rédaction de la requete sur les catégories
$query_str = 'SELECT * FROM `categorie`'; // Sélection de toutes les catégories

$res = $mysqli->query($query_str); // Exécution de la requête

// Chargement des données, ligne par ligne (boucle while)
$categories = array();
if ($res && ($res->num_rows > 0)) {
    while ($service_cat = $res->fetch_assoc()) {
        $categories[$service_cat['id']] = $service_cat;
    }
}
//var_dump($categories);
var_dump('clic-guide-montreal');

/**
 * Fournit un tableu d'article
 * @return array
 */
function get_services($where = '') {
    global $mysqli;
    // Rédaction de la requete sur les articles
    $query_str = 'SELECT * FROM `service` ' . $where; // Sélection de tous les articles

    $res = $mysqli->query($query_str); // xécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($service = $res->fetch_assoc()) {
            $data[$service['id']] = $service;
        }
    }
    return $data;
}

