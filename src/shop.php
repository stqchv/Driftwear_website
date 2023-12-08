<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear - shop</title>

    <link rel="icon" href="../images/browser_icon.png">

    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/section.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/shop.css">

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
        <a href="../src/index.php" class="logo">
            <img src="../images/logo.png" alt="Logo">
        </a>

        <div class="nav__links">
            <a href="">Shop</a>
            <a href="../src/contact.php">Contact</a>
        </div>

        <div class="profile">
            <a href="../src/register.php" class="user"><i class="fa-regular fa-user"></i></a>
            <a href="#" class="cart"><i class="ri-shopping-bag-fill"></i></a>
            <div id="menu-icon"></div>
        </div>
    </header>
    <!-- ---------------- place under navbar ---------------- -->
    <div class="underbar"></div>



    <!-- ---------------- SHOP CONTENT ---------------- -->


    <?php include('../php/connect.php') ?>


    <?php
    $mysqli = new mysqli('localhost','root','','driftwear_shop') or die($mysqli->connect_error);
    $table = 'products';

    $result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);
    ?>

    <div class="shop_content">
        <?php
        while ($data = $result->fetch_assoc()){
            echo "<div class='shop_box'>";
                echo "<div class='shop_image'>";
                    echo "<img src='{$data['image_front']}' class='img_front'>";
                    echo "<a href='product.php?id={$data['id']}'>";
                        echo "<img src='{$data['image_back']}' class='img_back'>";
                    echo "</a>";
                echo "</div>";
                echo "<h6>{$data['name']}</h6>";
                echo "<h7>€{$data['price']}.00</h7><br>";
                echo "<h8 class='shop_size'>S M L XL</h8>";
            echo "</div>";
        }
        ?>

    </div>

    <?php

    // $products = fetchProductsFromDatabase();

    // foreach ($products as $product) {
    //     echo "<a href='product.php?id={$product['id']}'>{$product['name']}</a><br>";
    // }
    ?>


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

    <script src="../scripts/script.js" async defender></script>
    <script src="../scripts/cart.js" async defender></script>
</body>
</html>