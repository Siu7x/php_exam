<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - LOKE</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/home.js" defer></script>
</head>
<body>

    <nav class="navbar">
        <div class="container flex-nav">
            <a href="home.php" class="logo">LOKE</a>
            <ul class="nav-links">
                <li><a href="home.php">Accueil</a></li>
                <li><a href="shop.php">Boutique</a></li>
                <li><a href="login.php" class="active">Connexion</a></li>
            </ul>
        </div>
    </nav>

    <main class="container flex-center">
        <section class="login-card">
            <div class="card-header">
                <h2>Bon retour parmi nous</h2>
                <p>Connectez-vous pour gérer vos commandes.</p>
            </div>

            <form action="auth_process.php" method="POST" class="form-stack">
                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn btn-full">Se connecter</button>
            </form>

            <div class="card-footer">
                <p>Pas encore de compte ? <a href="register.php">Créer un compte</a></p>
                <a href="#" class="forgot-pass">Mot de passe oublié ?</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 LOKE - Animalerie en ligne</p>
    </footer>

</body>
</html>