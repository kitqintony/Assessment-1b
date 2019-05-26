<!DOCTYPE html>
<html>
<head>
    <title>PlantATree</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="styles.css" />
    <script src="store.js" async></script>


</head>
<body>
    <header class="main-header">
        <nav class="main-nav nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="category.php">CATEGORY</a></li>
                <li><a href="tool.php">Gardening tools</a></li>
                <li><a href="service.php">Extra Service</a></li>
                <li><a href="about.php">ABOUT US</a></li>
            </ul>
        </nav>
        <h1 class="band-name band-name-large">TreeCo</h1>
    </header>
    <section class="container content-section">
        <h2 class="heading">NZ Native</h2>
        <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">Lacebark</span>
                <a href="./lacebark.php"><img class="shop-item-image" src="Images/Lacebark.png" alt="NZ native plants" width="300" height="300"></a>

                <div class="shop-item-details">
                    <span class="shop-item-price">$15</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <span class="shop-item-title">Rewarewa</span>
                <a href="./rewarewa.php"><img class="shop-item-image" src="Images/Rewarewa.png" alt="NZ native plants" width="300" height="300"></a>
                <div class="shop-item-details">
                    <span class="shop-item-price">$30</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Maori Princess Pohutukawa</span>
                <a href="./maoriprincesspohutukawa.php"><img class="shop-item-image" src="Images/Pohutukawa.png" alt="NZ native plants" width="300" height="300"></a>
                <div class="shop-item-details">
                    <span class="shop-item-price">$15</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
        </div>
    </section>


    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
    </section>
    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">TreeCo</h3>
        </div>
    </footer>
</body>
</html>
