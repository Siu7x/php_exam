document.addEventListener('DOMContentLoaded', () => {
    const profileForm = document.getElementById('profile-form');

    profileForm.addEventListener('submit', (e) => {
        const name = document.getElementById('name').value;
        
        if (name.length < 3) {
            e.preventDefault();
            alert("Le nom doit comporter au moins 3 caractères.");
        } else {
            console.log("Formulaire prêt à être envoyé pour : " + name);
        }
    });
});