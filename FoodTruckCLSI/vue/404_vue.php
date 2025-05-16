<?php
// Définir les variables spécifiques à cette vue
$title = " 404 - Page non trouvée";
$keywords = "404, erreur, page non trouvée";

// Capturer le contenu spécifique dans une variable
ob_start();
?>

<br>

<h1 align="center">Erreur 404</h1>
<p>La page que vous recherchez n'existe pas ou a été déplacée.</p>
<p>Veuillez vérifier l'URL ou retourner à la page d'accueil.</p>


<?php
$content = ob_get_clean(); // Stocker le contenu dans une variable
include 'layout.php'; // Inclure le layout