

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
                    echo "<a href='#' class='cart'><i class='ri-shopping-bag-fill'></i></a>";
                }
                else {
                    echo "<a href='../src/login.php' class='user'>Login</a>";
                }
            ?>
        </div>
    </header>
    <!-- ---------------- place under navbar ---------------- -->
    <div class="underbar"></div>

    <!-- ---------------- Cart Section ---------------- -->

    <div class="empty_space"></div>

    <?php

    // Usuwanie produktu z koszyka
    if (isset($_POST['remove_from_cart'])) {
        $productIdToRemove = $_POST['product_id'];

        // Usuń produkt z koszyka
        unset($_SESSION['cart'][$productIdToRemove]);
    }

    // Wyświetl zawartość koszyka
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productId => $product) {
            echo "Product ID: $productId, Name: {$product['name']}, Price: {$product['price']}, Quantity: {$product['quantity']}";

            // Dodaj formularz do usuwania produktu
            echo "<form method='post'>";
            echo "<input type='hidden' name='product_id' value='$productId'>";
            echo "<input type='submit' name='remove_from_cart' value='Remove'>";
            echo "</form>";

            echo "<br>";
        }
    } else {
        echo "Twój koszyk jest pusty.";
    }
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
                <p>&copy; 2023 Made by <span>Tomasz Stasiński & Jakub Pytlarz</span></p>
            </div>
        </div>
    </footer>

    <script src="../scripts/script.js" async defender></script>
    <script src="../scripts/cart.js" async defender></script>
</body>
</html>