<?php
//Simulation de seson (à remplacer par ton sytème d'authentification)
session_start();
//Si l'utilisateur nest pas connecté, redirection (exemple
//if (!isset($_SESSION['user'])) { header('Location: login.php'); exit(); }

$user = [
    'nom' => 'Jean Dupont',
    'email' => 'jean.dupont@email.com',
    'role' => 'Client', 
    'agence' => 'Aix-en-Provence'
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="../js/account.js"></script>
    <link rel="stylesheet" href="../css/account.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte - Ymmo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header role="banner">
        <nav role="navigation" aria-label="Menu principal">
            <div class="logo">Loke</div>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="biens.php">Biens</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <main id="main-content" class="container">
        <h1>Mon Espace Personnel</h1>
        
        <section class="profile-card" aria-labelledby="profile-info">
            <h2 id="profile-info">Informations du profil</h2>
            <form id="profile-form" action="update_profile.php" method="POST">
                <div class="form-group">
                    <label for="name">Nom complet :</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['nom']) ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                </div>

                <div class="form-group">
                    <p><strong>Rôle :</strong> <?= $user['role'] ?></p>
                    <?php if ($user['role'] === 'Agent'): ?>
                        <p><strong>Rattaché à :</strong> Agence de <?= $user['agence'] ?></p>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn-save">Enregistrer les modifications</button>
            </form>
        </section>

        <section class="actions">
            <h2>Mes activités</h2>
            <div class="grid-actions">
                <div class="card">
                    <h3>Mes Favoris</h3>
                    <p>Retrouvez les biens qui vous intéressent.</p>
                    <a href="#" class="link">Voir mes favoris</a>
                </div>
                <div class="card">
                    <h3>Mes Documents</h3>
                    <p>Accédez à vos compromis et factures.</p>
                    <a href="#" class="link">Gérer les documents</a>
                </div>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>