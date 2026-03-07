<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - LOKE</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/home.js" defer></script>
</head>
<body>

    <nav class="navbar">
        <div class="container flex-nav">
            <a href="home.php" class="logo">LOKE</a>
            <ul class="nav-links">
                <li><a href="home.php">Accueil</a></li>
                <li><a href="shop.php" class="active">Boutique</a></li>
                <li><a href="account.php">Mon Compte</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        <header class="page-header">
            <h1>Nos Animaux</h1>
            <p>Trouvez le compagnon idéal parmi nos catégories.</p>
        </header>

        <div class="filters">
            <button class="filter-btn active" data-type="all">Tous</button>
            <button class="filter-btn" data-type="chien">Chiens</button>
            <button class="filter-btn" data-type="chat">Chats</button>
        </div>

        <div class="grid" id="product-grid">
            <article class="card" data-category="chien">
                <div class="img-placeholder"></div>
                <div class="card-body">
                    <span class="category-tag">Chien</span>
                    <h3>Golden Retriever</h3>
                    <p class="price">850 €</p>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </article>

            <article class="card" data-category="chat">
                <div class="img-placeholder"></div>
                <div class="card-body">
                    <span class="category-tag">Chat</span>
                    <h3>Main Coon</h3>
                    <p class="price">1 200 €</p>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </article>

            <article class="card" data-category="chien">
                <div class="img-placeholder"></div>
                <div class="card-body">
                    <span class="category-tag">Chien</span>
                    <h3>Berger Australien</h3>
                    <p class="price">950 €</p>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </article>

            <article class="card" data-category="chat">
                <div class="img-placeholder"></div>
                <div class="card-body">
                    <span class="category-tag">Chat</span>
                    <h3>Siamois</h3>
                    <p class="price">700 €</p>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 LOKE - Boutique officielle</p>
    </footer>

</body>
</html>