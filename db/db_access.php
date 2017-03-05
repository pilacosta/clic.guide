<?php
/**
 *
 */
/*define('DB_HOST', '127.0.0.1'); // Host DB
define('DB_USERNAME', 'root'); // Host DB
define('DB_PASSWORD', ''); // Host DB
define('DB_NAME', 'clic-guide-montreal'); // Host DB*/


//local
define('DB_HOST', 'localhost:8889'); // Host DB
define('DB_USERNAME', 'toto'); // Host DB
define('DB_PASSWORD', ''); // Host DB
define('DB_NAME', 'clic-guide-montreal'); // Host DB

//sentora
/*define('DB_HOST', 'localhost'); // Host DB
define('DB_USERNAME', 'clicguide'); // Host DB
define('DB_PASSWORD', 'qu9ebu3u6'); // Host DB
define('DB_NAME', 'pacosta_clicguide'); // Host DB*/




$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}



//var_dump($mysqli);

/**
 * Fournit un tableu d'article
 * @return array
 */


function get_services($where = '') {
    global $mysqli;
    // Rédaction de la requete sur les articles
//    $query_str = 'SELECT * FROM `service` ' . $where; // Sélection de tous les articles
    $query_str = 'SELECT * FROM `service`' . $where; // Sélection de tous les articles


    $res = $mysqli->query($query_str); // xécution de la requête

//    var_dump($query_str);

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($service = $res->fetch_assoc()) {
            $data[$service['id']] = $service;
        }
    }
//    var_dump($data);

    return $data;
}

// Requete : sélectionner 1 user par son id
function get_user_by_id($id) {
    global $mysqli;
    $query_str = 'SELECT * FROM `service` ORDER BY `service`.`id`' . $id;


    $res = $mysqli->query($query_str);  // execution de la requete

    // chargement des données de la ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        $data = $res->fetch_assoc();
    }
    return $data;
}

//login
// Requete : sélectionner 1 user par son mail
function get_user_by_mail($mail) {
    global $mysqli;
    $query_str = 'SELECT * FROM `users` WHERE email="' . $mail . '"';
    $res = $mysqli->query($query_str);  // execution de la requete

    // chargement des données de la ligne
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        $data = $res->fetch_assoc();
    }
    return $data;
}



