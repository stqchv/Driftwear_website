<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear</title>

    <link rel="icon" href="images/browser_icon.png">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/section.css">
    <link rel="stylesheet" href="styles/footer.css">

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
            <img src="./images/logo.png" alt="Logo">
        </a>

        <div class="nav__links">
            <a href="shop.php">Shop</a>
            <a href="#">Contact</a>
        </div>

        <div class="profile">
            <a href="#" class="user"><i class="fa-regular fa-user"></i></a>
            <a href="#" class="cart"><i class="ri-shopping-bag-fill"></i></a>
            <div id="menu-icon"></div>
        </div>
    </header>

    <!-- ---------------- place under navbar ---------------- -->

    <div class="underbar"></div>

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
                    <a href="shop.php">
                        <button class="shop-now">Shop Now</button>
                    </a>
                    <button onclick="scrollToSection('section2')" class="find-more">Find Out More</button>
                </div>
            </div>
            <div class="section1_right">
                <img class="hoodie_1" src="./images/hoodie_1.png" alt="">
            </div>
        </div>

        
        
        <!-- ---------------- SECTION 2 ---------------- -->
        <div id="section2" class="section2">
            <div class="bg_fade_blue_2"></div>
            <div class="bg_fade_pink_2"></div>
            <div class="section2_left">
                <img class="hoodie_2 reveal" src="images/hoodie_2.png" alt="">
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
                <h3>Follow Us</h3>
                <h4>
                    Embrace comfort in style with our signature line of hoodies, where quality meets creativity. 
                    Each stitch is woven with passion.
                </h4>
                <ul class="section3_socials">
                    <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#"><i class='bx bxl-tiktok'></i></a></li>
                    <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
            <img class="section3_image reveal2" src="images/hoodie_section3.png">
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
                <p>&copy; 2023 Made by <span>stqchv</span></p>
            </div>
        </div>
    </footer>

    <script src="scripts/script.js" async defender></script>
</body>
</html>