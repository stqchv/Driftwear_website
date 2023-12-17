<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear</title>

    <link rel="icon" href="../images/browser_icon.png">

    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/section.css">
    <link rel="stylesheet" href="../styles/footer.css">

    <script src="https://kit.fontawesome.com/2bd77566a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
</head>
<body>
    

    <!-- ---------------- UPHEADER ---------------- -->
    <div class="upheader">
        <a href="#"><p>GET EXTRA <strong>15%</strong> DISCOUNT</p></a>
    </div>
    <!-- ---------------- HEADER ---------------- -->
    <header>
        <a href="index.php" class="logo">
            <img src="../images/logo.png" alt="Logo">
        </a>

        <div class="nav__links">
            <a href="../src/shop.php">Shop</a>
            <a href="../src/contact.php">Contact</a>
        </div>

        <div class="profile">
            <?php
                session_start();
                if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes") {
                    echo "<a href='../src/logout.php' class='user'>Logout</a>";
                    echo "<a href='../src/cart.php' class='cart'><i class='ri-shopping-bag-fill'></i></a>";
                }
                else {
                    echo "<a href='../src/login.php' class='user'>Login</a>";
                }
            ?>
        </div>
    </header>

    <div class="underbar"></div> <!-- place under navbar -->

    <!-- ---------------- SECTIONS ---------------- -->
    <div class="section">
        <!-- ---------------- SECTION 1 ---------------- -->

        <div class="section1">
            <div class="bg_fade_blue"></div>
            <div class="bg_fade_pink"></div>
            <div class="section1_left">
                <h2>Welcome to</h2>
                <h1>DRIFT</h1>
                <h1>WEAR</h1>
                <div class="section1_buttons">
                    <a href="../src/shop.php">
                        <button class="shop-now">Shop Now</button>
                    </a>
                    <button onclick="scrollToSection('section2')" class="find-more">Find Out More</button>
                </div>
            </div>
            <div class="section1_right">
                <img class="hoodie_1" src="../images/hoodie_1.png" alt="">
            </div>
        </div>

        
        
        <!-- ---------------- SECTION 2 ---------------- -->
        <div id="section2" class="section2">
            <div class="bg_fade_blue_2"></div>
            <div class="bg_fade_pink_2"></div>
            <div class="section2_left">
                <img class="hoodie_2 reveal" src="../images/hoodie_2.png" alt="">
            </div>
            <div class="section2_right">
                <h3>Who We Are</h3>
                <h4><br>
                    Embrace comfort in style with our signature line of hoodies, where quality meets creativity. 
                    Each stitch is woven with passion, reflecting a blend of urban edge and timeless sophistication. 
                    Our hoodies aren't just garments; they're a statement of individuality and cozy expression. 
                    Designed for those who seek warmth without compromising on fashion, our collection brings together 
                    innovation, comfort, and the allure of distinctive designs. Wrap yourself in our hoodies and step 
                    into a world where comfort meets chic.
                </h4>
            </div>
        </div>

        <!-- ---------------- SECTION 3 ---------------- -->
        <div class="section3">
            <div class="section3_container">
                <div class="section3_left">
                    <h3>Discover Our Collection</h3>
                    <h4><br>
                    Elevate your love for automotive with our unique collections. Whether you prefer the classic look of '70s cars or 
                    you're a fan of modern technology, we have something special for you. Explore our collections and choose a hoodie 
                    that best reflects your passion.<br><br>
                    DriftWear is where the passion for automobiles meets aesthetics. We are a team of enthusiasts who love the freedom 
                    of the road and stylish fashion. Our collection of automotive-inspired aesthetic hoodies is a blend of comfort, quality, 
                    and unique design. We're not just a store; we're a community of like-minded automotive aficionados.
                    </h4>
                </div>
                <div class="section3_right">
                    <img class="hoodie_3 reveal" src="../images/hoodies.png" alt="">
                </div>
            </div>

            <!-- ---------------- SECTION 4 ---------------- -->
            <div class="section3_container">
                <div class="wrapper reveal">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <div class="carousel">
                        <img src="../images/slider/1.png" alt="img" draggable="false">
                        <img src="../images/slider/2.png" alt="img" draggable="false">
                        <img src="../images/slider/3.png" alt="img" draggable="false">
                        <img src="../images/slider/4.png" alt="img" draggable="false">
                        <img src="../images/slider/1.png" alt="img" draggable="false">
                        <img src="../images/slider/2.png" alt="img" draggable="false">
                        <img src="../images/slider/3.png" alt="img" draggable="false">
                        <img src="../images/slider/4.png" alt="img" draggable="false">
                    </div>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
                <div class="section4_left">
                    <h3>Quality Fabrics</h3>
                    <h4><br>
                    At DriftWear, we understand that the right material is the foundation of exceptional apparel. That's why we take pride in sourcing and using 
                    premium materials to create hoodies that not only look good but also feel amazing to wear.<br><br>
                    Our commitment to quality begins with the selection of fabrics. We carefully choose materials that are soft to the touch, 
                    durable, and provide the perfect blend of comfort and style. You'll notice the difference from the moment you put on one of our hoodies.<br><br>
                    The stitching and construction of our hoodies are designed with your comfort in mind. We pay meticulous attention to detail to ensure that each 
                    hoodie is not only a fashionable statement but also a pleasure to wear, whether you're cruising down the road or relaxing at home.
                    </h4>
                </div>
            </div>

        </div>

        



    </div>
    <!-- ---------------- FOOTER ---------------- -->

    <footer>
        <div class="footer_content">
            <h3>Driftwear&trade;</h3>
            <div class="content">
                <a href="#">Shop</a>
                <a href="#">Contact</a>
                <a href="#">Website Terms</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="footer_bottom">
                <p>&copy; 2023 Made by <span>Tomasz Stasiński & Jakub Pytlarz</span></p>
            </div>
        </div>
    </footer>

    <script src="../scripts/script.js" async defender></script>
    <script src="../scripts/cart.js" async defender></script>
</body>
</html>