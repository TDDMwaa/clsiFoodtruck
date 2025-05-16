<?php
// Définir les variables spécifiques à cette vue
$title = "";
$keywords = "";
$description = "";

// Capturer le contenu spécifique dans une variable
ob_start();
?>





<?php
$content = ob_get_clean(); // Stocker le contenu dans une variable
include 'layout.php'; // Inclure le layout