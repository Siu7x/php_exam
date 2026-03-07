document.addEventListener('DOMContentLoaded', () => {
    
    // On cible le formulaire de connexion
    const loginForm = document.querySelector('.form-stack');

    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Simple vérification avant d'envoyer au PHP
            if (email === "" || password === "") {
                e.preventDefault(); // On bloque l'envoi
                alert("Veuillez remplir tous les champs !");
            } else {
                console.log("Tentative de connexion pour : " + email);
                // Ici, le formulaire partira vers auth_process.php
            }
        });
    }

    // Petit bonus : Animation des inputs au focus
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.style.borderColor = '#2563eb'; // Le bleu "main"
        });
        input.addEventListener('blur', () => {
            input.style.borderColor = '#e2e8f0'; // Retour au gris
        });
    });
});