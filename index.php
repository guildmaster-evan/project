<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Guild Coffee Company</title>
</head>

<body>

    <!-- Include the header -->
    <?php include 'header.php'; ?>

    <div class="page-container">
        <div id="home" class="section">
            <!-- Home Section Content -->
            <main>
                <div class="title-heavy-container">
                    <div class="welcome-container">
                        <h1 class="main-title">Welcome to</h1>
                    </div>
                    <div class="heavy-guild-container">
                        <h1 class="heavy-guild">GUILD</h1>
                    </div>
                    <p class="slogan">Elevate your sip, join the Guild of Flavor.</p>
                </div>
                <img class="img-a" src="index\img\DSC08837 (1).png" alt="Home 1">

                <!--                 Add more content 
                <section>
                    <h2>Our Story</h2>
                    <p>Guild Coffee was born out of a love for coffee and the desire to share the joy of a perfectly brewed cup with the world. Our journey began in 2020, and since then, we've been dedicated to sourcing the finest beans, perfecting our roasting process, and bringing the best flavors to our customers.</p>
                </section>

                <section>
                    <h2>Our Coffee</h2>
                    <p>We believe that every cup of coffee tells a story. That's why we source our beans from the best coffee-growing regions around the world. Each of our blends has its own unique flavor profile, from the robust, dark notes of our Espresso Roast to the smooth, light flavor of our Morning Blend.</p>
                </section>

                <section>
                    <h2>Visit Us</h2>
                    <p>Experience the magic of Guild Coffee for yourself. Visit our coffee shop located at 123 Coffee Lane, Coffee City. We're open from Monday to Friday, 7am to 7pm, and on weekends from 8am to 3pm. We can't wait to serve you!</p>
                </section> -->
            </main>
        </div>

        <div id="about" class="section">
            <!-- About Section Content -->
            <section class="container-about">
                <div class="container-about-text">
                    <h1>Brewing Quality, Pouring Art</h1>
                    <p>Welcome to Guild Coffee, where the art of coffee is a passion, a journey, and a commitment to excellence. Established with a shared love for exceptional coffee experiences, Guild Coffee is more than a brand; it’s a community of enthusiasts, roasters, and artisans dedicated to crafting moments that elevate the everyday.</p>
                </div>
                <div class="container-about-img">
                    <div class="container-about-img-box1">
                        <div><img class="img-a" src="about\img\20230910_091808.jpg" alt="Coffee 1"></div>
                        <div><img class="img-b" src="about\img\20230912_093007.jpg" alt="Coffee 2"></div>
                    </div>
                    <div class="container-about-img-box2">
                        <div><img class="img-c" src="about\img\20230915_070820.jpeg" alt="Coffee 3"></div>
                        <div><img class="img-d" src="about\img\20230917_101237.jpeg" alt="Coffee 4"></div>
                    </div>
                </div>
            </section>
        </div>

        <div id="store" class="section">
            <!-- Store Section Content -->
            <section class="store">
                <h1 class="store-feature">Featured Coffee</h1>
                <div class="container">
                    <div class="product">
                        <img src="store\img\10-01-2023-el-salv-santa-isabel-washed_1024x.jpg" alt="Coffee 1">
                        <p class="product-price">$22</p>
                        <p class="product-description">Santa Isabel - El Salvador (Washed)</p>
                    </div>
                    <div class="product">
                        <img src="store\img\Orangeimage.png" alt="Coffee 2">
                        <p class="product-price">$23</p>
                        <p class="product-description">Santa Isabel - El Salvador (Natural Process)</p>
                    </div>
                    <div class="product">
                        <img src="store\img\Grayimage.png" alt="Coffee 3">
                        <p class="product-price">$18</p>
                        <p class="product-description">Roaster’s Choice</p>
                    </div>
                    <div class="product">
                        <img src="store\img\Trashimage.png" alt="Coffee 4">
                        <p class="product-price">$18</p>
                        <p class="product-description">Esmeralda Decaf – Mexico</p>
                    </div>
                    <!-- Repeat for other products -->
                </div>
            </section>
        </div>

        <div id="contact" class="section">
            <!-- Contact Section Content -->
            <section>
                <div class="contact-container">
                    <div class="left">
                        <h2>Visit us</h2>
                        <p>123 Midview St</p>
                        <p>San Antonio, TX 12345</p>

                        <h2 class="hours">Hours</h2>
                        <p>Monday—Friday</p>
                        <p>7am—7pm</p>
                        <p>Saturday—Sunday</p>
                        <p>8am—3pm</p>

                        <h2>Contact</h2>
                        <p>(123) 456-7890</p>
                    </div>

                    <div class="right">
                        <h2>Guild Coffee</h2>
                        <p>Thank you for being a part of our coffee community. At Guild Coffee, every cup is a shared moment, a celebration of craftsmanship, and a journey into the world of exceptional flavors. Whether you’re a seasoned coffee aficionado or just beginning your exploration, we’re honored to have you with us. Sip, savor, and join us in the delightful symphony of coffee experiences. Cheers to many more flavorful moments!</p>
                        <p>Warm regards, The Guild Coffee Team</p>

                        <h2>Contact</h2>
                        <p>123 Midview St</p>
                        <p>San Antonio, TX 12345</p>
                        <p>(123) 456-7890</p>

                        <h2 class="hours">Hours</h2>
                        <p>Monday—Friday</p>
                        <p>7am—7pm</p>
                        <p>Saturday—Sunday</p>
                        <p>8am—3pm</p>

                        <h2>Menu</h2>
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="store\store.php">Store</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <script src="script.js"></script>
    </div>



</body>

</html>