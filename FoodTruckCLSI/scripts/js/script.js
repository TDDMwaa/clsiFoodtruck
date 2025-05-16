    // script.js


    // Menu burger
    const toggleBtn = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    // Toggle menu et bouton
    toggleBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    sidebar.classList.toggle('open');

    // Masquer le bouton si menu ouvert
    if (sidebar.classList.contains('open')) {
        toggleBtn.classList.add('hidden');
    }
    });

    // Fermer le menu si clic en dehors
    document.addEventListener('click', (e) => {
    const isClickInsideMenu = sidebar.contains(e.target);
    const isClickOnButton = toggleBtn.contains(e.target);

    if (!isClickInsideMenu && !isClickOnButton) {
        if (sidebar.classList.contains('open')) {
        sidebar.classList.remove('open');
        toggleBtn.classList.remove('hidden'); // réafficher le bouton
        }
    }
    });


