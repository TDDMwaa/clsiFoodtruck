<?php
session_start();
include "configBdd.php"; // fichier de configuration de la base de données

// Définition des variables de métadonnées
$title = "FoodTruck";
$keywords = "";
$description = "";

// Fonction pour charger une vue
function chargerVue(array $response) {
    $vue = $response['view'];
    $data = $response['data'];

    if (!file_exists($vue)) {
        echo "Vue non trouvée.";
        return;
    }

    extract($data); // Rendre les données disponibles dans la vue
    include $vue;
}

// Table de routage
$routes = [
    // chaque route est associée à une fonction "anonyme" qui sera exécutée lorsque la route est appelée
    // Les fonctions anonymes sont des fonctions sans nom qui peuvent être définies à la volée et utilisées comme des variables. Elles sont souvent utilisées pour des callbacks ou des fonctions de traitement d'événements.
    'afficherAccueil' => function () {
        include "vue/accueil_vue.php";
    },
    'afficherMenu' => function () {
        include "vue/menu_vue.php";
    },
    'afficherProduit' => function () {
        include "vue/produit_vue.php";
    },
    'afficherCompte' => function () {
        include "vue/compte_vue.php";
    },
    'afficherInformation' => function () {
        include "vue/information_vue.php";
    },
    'afficherParametre' => function () {
        include "vue/parametre_vue.php";
    },
    'afficherDeconnexion' => function () {
        include "vue/404_vue.php";
    },
    'afficherConnexion' => function () {
        include "vue/connexion_vue.php";
    },
    '404' => function () {
        include "vue/404_vue.php";
    },
];

// Gestion des routes
if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'afficherAccueil'; // Route par défaut : accueil
}

if (array_key_exists($page, $routes)) {
    $routes[$page](); // Exécuter la fonction associée à la route
} else {
    $routes['404'](); // Exécuter la fonction de la page 404
}