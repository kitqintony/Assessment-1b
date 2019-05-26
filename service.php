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
            <h2 class="heading">Additional Service</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Pruning</span>
                    <img class="shop-item-image" src="Images/pruning.png" width="600px">

                    <form action="description.php" method="post">

                        <p>We offer a range of lawn mowing solutuions to every garden. We mow all sized alwns using top tier equipment. We will
                                also provide mulch mowingand will clear any sorts of trimmed grass out of drive ways with 100% care.
                        </p>

                        </form>

                    <div class="shop-item-details">
                        <p>Price: </p>
                        <span class="shop-item-price">$30</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Lawnmowing</span>
                    <img class="shop-item-image" src="Images/lawnmowing.png" width="600px" >

                    <form action="description.php" method="post">

                        <p>We offer a range of lawn mowing solutuions to every garden. We mow all sized alwns using top tier equipment. We will also provide mulch mowingand will clear any sorts of trimmed grass out of drive ways with 100% care. </p>

                        </form>

                    <div class="shop-item-details">
                        <p>Price: </p>
                        <span class="shop-item-price">$15</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Hedge Trimming</span>
                    <img class="shop-item-image" src="Images/hedgetrimming.png" width="600px">

                    <form action="description.php" method="post">

                        <p>We can trim all types of hedges with care and respect. Out trimmers are all experts to ensure your hedges are visually appealing
                                and will add definition to your house. We will clear any cut branches and leaves that are cut off.</p>

                        </form>

                    <div class="shop-item-details">
                        <p>Price: </p>
                        <span class="shop-item-price">$25</span>
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
            <span class="cart-quantity cart-header cart-column">METER(S)</span>
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
