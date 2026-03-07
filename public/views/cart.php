<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier - LOKE</title>
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
                <li><a href="cart.php" class="active">Panier (2)</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        <header class="page-header">
            <h1>Votre Panier</h1>
        </header>

        <div class="cart-wrapper">
            <section class="cart-items">
                <article class="cart-item" data-price="850">
                    <div class="item-img"></div>
                    <div class="item-info">
                        <h3>Golden Retriever</h3>
                        <p class="unit-price">850 €</p>
                    </div>
                    <div class="item-qty">
                        <input type="number" value="1" min="1">
                    </div>
                    <button class="remove-btn">Supprimer</button>
                </article>

                <article class="cart-item" data-price="1200">
                    <div class="item-img"></div>
                    <div class="item-info">
                        <h3>Main Coon</h3>
                        <p class="unit-price">1 200 €</p>
                    </div>
                    <div class="item-qty">
                        <input type="number" value="1" min="1">
                    </div>
                    <button class="remove-btn">Supprimer</button>
                </article>
            </section>

            <aside class="cart-summary">
                <div class="summary-card">
                    <h3>Résumé</h3>
                    <div class="summary-line">
                        <span>Sous-total</span>
                        <span id="subtotal">2 050 €</span>
                    </div>
                    <div class="summary-line">
                        <span>Frais d'adoption</span>
                        <span>0 €</span>
                    </div>
                    <hr>
                    <div class="summary-line total">
                        <span>Total</span>
                        <span id="final-total">2 050 €</span>
                    </div>
                    <button class="btn btn-full">Passer la commande</button>
                    <a