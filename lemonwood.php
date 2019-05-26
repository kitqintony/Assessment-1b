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

     <h2 class="heading">Hedge</h2>

     <section class="container content-section">

             <div class="shop-items">
                 <div class="shop-item">
                     <span class="shop-item-title">Lemonwood</span>
                     <a href="#"><img class="shop-item-image" src="Images/Lemonwood.png"></a>

                     <form action="description.php" method="post">

                         <p>Description: </br></br>

                            Small-Medium shrub like plant. Wavy and finger-like leaves. Yellowish green in colour.
                        </br>
                    </p>
                    <p> Soil Drainage: Free Drained</p>
                    <p> Sun: Sunny or part shade </p>
                    <p> Maintenance requirements: Low </p>
                    <p> Max height of mature tree: 10-12m </p>
                    <p> Growth rate: slow </p>

                         </form>

                     <div class="shop-item-details">
                         <p>Price: </p>
                         <span class="shop-item-price">$20</span>
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
