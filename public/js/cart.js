document.addEventListener('DOMContentLoaded', () => {
    // Gestion de la suppression d'un article
    const removeButtons = document.querySelectorAll('.remove-btn');

    removeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.cart-item');
            if (confirm("Voulez-vous retirer cet animal du panier ?")) {
                item.style.opacity = '0';
                setTimeout(() => {
                    item.remove();
                    // Ici tu pourrais recalculer le total si besoin
                    console.log("Article supprimé.");
                }, 300);
            }
        });
    });

    // Message de succès pour la commande
    const checkoutBtn = document.querySelector('.summary-card .btn');
    if (checkoutBtn) {
        checkoutBtn.addEventListener('click', () => {
            alert("Commande enregistrée ! Merci de votre confiance chez LOKE.");
        });
    }
});