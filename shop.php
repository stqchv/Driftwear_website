<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear - shop</title>

    <link rel="icon" href="images/browser_icon.png">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/section.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/shop.css">
</head>
<body>
    
    <!-- ---------------- UPHEADER ---------------- -->
    <div class="upheader">
        <a href="#"><p>GET EXTRA <strong>15%</strong> DISCOUNT</p></a>
    </div>
    <!-- ---------------- HEADER ---------------- -->
    <header>
        <a href="index.php" class="logo">
            <img src="images/logo.png" alt="Logo">
        </a>

        <div class="nav__links">
            <a href="#">Shop</a>
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



    <!-- ---------------- SHOP CONTENT ---------------- -->

    <div class="shop_content">
        <div class="shop_box">
            <div class="shop_image">
                <img src="images/hoodie_1.png" alt="">
            </div>
            <h6>Basic Driftwear Hoodie</h6>
            <h7>€150.00</h7><br>
            <h8>S M L XL</h8>
        </div>

        <div class="shop_box">
            <div class="shop_image">
                <img src="images/hoodie_1.png" alt="">
            </div>
            <h6>Basic Driftwear Hoodie</h6>
            <h7>€150.00</h7><br>
            <h8>S M L XL</h8>
        </div>
        <div class="shop_box">
            <div class="shop_image">
                <img src="images/hoodie_1.png" alt="">
            </div>
            <h6>Basic Driftwear Hoodie</h6>
            <h7>€150.00</h7><br>
            <h8>S M L XL</h8>
        </div>
        <div class="shop_box">
            <div class="shop_image">
                <img src="images/hoodie_1.png" alt="">
            </div>
            <h6>Basic Driftwear Hoodie</h6>
            <h7>€150.00</h7><br>
            <h8>S M L XL</h8>
        </div>
        <div class="shop_box">
            <div class="shop_image">
                <img src="images/hoodie_1.png" alt="">
            </div>
            <h6>Basic Driftwear Hoodie</h6>
            <h7>€150.00</h7><br>
            <h8>S M L XL</h8>
        </div>



    </div>


    <?php include('php/connect.php') ?>

    <div class="empty_space"></div>

    <footer>
        <div class="footer_content">
            <h3>Driftwear Footer</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus explicabo itaque eligendi inventore cumque.</p>
            <ul class="socials">
                <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-tiktok'></i></a></li>
                <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
            </ul>
        </div>
        <div class="footer_bottom">
            <p>copyright &copy;2023 Driftwear. designed by <span>stqchv</span></p>
        </div>
    </footer>

    <script src="scripts/script.js" async defender></script>
</body>
</html>