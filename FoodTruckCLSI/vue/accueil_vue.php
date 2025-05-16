<?php
// Définir les variables spécifiques à cette vue
$title = "Accueil";

// Capturer le contenu spécifique dans une variable
ob_start();
?>
<br>
<head>
    
    <link rel="stylesheet" href="./css/accueil/actualites.css">
    <link rel="stylesheet" href="./css/accueil/menu.css">
    <script src="./scripts/js/accueil/actualites.js"></script>
    <script src="./scripts/js/accueil/menu.js"></script>

  
</head>

<body>

    <!-- Menu actualités -->
    <div class="accueilActu">
    <h2>Actualités</h2>

    <div class="accueilCarActu-wrapper"> <!-- conteneur fixe -->
        <!-- Flèches à l'extérieur du track -->
        <button class="accueilCarActu-btn left" id="btn-prev-actu">←</button>

        <div class="accueilCarActu-track" id="accueilCarActu-track">
        <div class="accueilCarActu-item">
            <a href="#1"><img src="./images/clsi.png" alt="actu1"></a>
            <h3>Promo spéciale !</h3>
        </div>
        <div class="accueilCarActu-item">
            <a href="#2"><img src="./images/clsi.png" alt="actu2"></a>
            <h3>Nouveau partenaire</h3>
        </div>
        <div class="accueilCarActu-item">
            <a href="#3"><img src="./images/clsi.png" alt="actu3"></a>
            <h3>Événement à venir</h3>
        </div>
        <div class="accueilCarActu-item">
            <a href="#4"><img src="./images/clsi.png" alt="actu4"></a>
            <h3>Ouverture d'un nouveau point de vente</h3>
        </div>
        <div class="accueilCarActu-item">
            <a href="#5"><img src="./images/clsi.png" alt="actu5"></a>
            <h3>Concours en cours</h3>
        </div>
        </div>

        <button class="accueilCarActu-btn right" id="btn-next-actu">→</button>
    </div>
    </div>

    <br>

    <!-- Menu menu -->
    <div class="accueilMenu">
        <h2>Menus</h2>

        <div class="accueilCarMenu-wrapper"> <!-- conteneur fixe -->
        <!-- Flèches à l'extérieur du track -->
        <button class="accueilCarMenu-btn left" id="btn-prev-menu">←</button>

        <div class="accueilCarMenu-track" id="accueilCarMenu-track">
            <div class="accueilCarMenu-item">
            <a href="#1"><img src="./images/produits/boisson/coca.jpg" alt="menu1"></a>
            <h3>Promo spéciale !</h3>
            </div>
            <div class="accueilCarMenu-item">
            <a href="#2"><img src="./images/clsi.png" alt="menu2"></a>
            <h3>Nouveau partenaire</h3>
            </div>
            <div class="accueilCarMenu-item">
            <a href="#3"><img src="./images/clsi.png" alt="menu3"></a>
            <h3>Événement à venir</h3>
            </div>
            <div class="accueilCarMenu-item">
            <a href="#4"><img src="./images/clsi.png" alt="menu4"></a>
            <h3>Ouverture d'un nouveau point de vente</h3>
            </div>
            <div class="accueilCarMenu-item">
            <a href="#5"><img src="./images/clsi.png" alt="menu5"></a>
            <h3>Concours en cours</h3>
            </div>
        </div>

        <button class="accueilCarMenu-btn right" id="btn-next-menu">→</button>
        </div>
    </div>
</body>

<?php
$content = ob_get_clean(); // Stocker le contenu dans une variable
include 'layout.php'; // Inclure le layout