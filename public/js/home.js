document.addEventListener('DOMContentLoaded', () => {
    console.log("LOKE chargé.");

    // Simple message quand on clique sur un bouton
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            console.log("Ouverture de la fiche animal...");
        });
    });
});