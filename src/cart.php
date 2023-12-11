<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear - shop</title>

    <link rel="icon" href="../images/browser_icon.png">

    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/cart.css">

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

    <!-- <div class="cart">
        <h2>Your Cart</h2>

        <div class="cart_product">
            <div class="cart_image">
                <img src="../images/products/hoodie_black_front.png" alt="">
            </div>
            <div class="product_info">$150.00</div>
            <div class="product_remove"></div>
        </div>

        <div class="shop_summary">

        </div>
    </div> -->



    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'driftwear_shop') or die($mysqli->connect_error);

    if (isset($_SESSION["user"])) {
        $userId = $_SESSION["user_id"];
        $result = $mysqli->query("SELECT c.product_id, p.name, p.price, p.image_front, c.quantity FROM carts c
                                INNER JOIN products p ON c.product_id = p.id
                                WHERE c.user_id = $userId");
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<h2>Your Cart:</h2>";
                echo "<div class='cart'>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>{$row['name']} <img class='hoodie_icon' src='{$row['image_front']}' alt=''>";
                    echo "- Price: €{$row['price']}, Quantity: {$row['quantity']}</li>";
                }
                echo "</div>";
            } else {
                echo "<p>Your cart is empty</p>";
            }
        }
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