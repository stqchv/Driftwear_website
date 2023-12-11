<?php
session_start();    

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity']++;
    } else {
        $_SESSION['cart'][$productId] = array(
            'name' => $_POST['product_name'],
            'price' => $_POST['product_price'],
            'quantity' => 1,
        );
    }
    header("Location: ../src/shop.php");
    exit();
}

?>


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
    <link rel="stylesheet" href="../styles/product.css">

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

    <!-- ---------------- place under navbar ---------------- -->

    <div class="underbar"></div>

    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'driftwear_shop') or die($mysqli->connect_error);

    if (isset($_GET['id'])) {
        $productId = $_GET['id'];

        $result = $mysqli->query("SELECT * FROM products WHERE id = $productId") or die($mysqli->error);
        
        if ($result->num_rows > 0) {
            $productData = $result->fetch_assoc();
    ?>
    
    <div class="product_container">
        <div class="product_image">
            <img src="<?php echo $productData['image_front']; ?>">
            <img src="<?php echo $productData['image_back']; ?>">
        </div>
        <div class="product_info" id="productInfo">
            <div class="product_name"><p><?php echo $productData['name']; ?></p></div>
            <div class="product_price"><p>€<?php echo $productData['price']; ?>.00</p></p></div>
            <div class="product_size">
                <div class="size_button" id="size-S"><p>S</p></div>
                <div class="size_button" id="size-M"><p>M</p></div>
                <div class="size_button" id="size-L"><p>L</p></div>
                <div class="size_button" id="size-XL"><p>XL</p></div>
            </div>
            <div class="product_shipping"><p>Free shipping over €200.00</p></div>
            <div class="product_details">Info</div>
            <div class="product_informations">
            The <?php echo $productData['name']; ?> is a statement in understated elegance. The classic black canvas provides a timeless backdrop for the iconic Driftwear emblem on the chest. No frills, just the pure essence of urban cool.
            </div>
            <div class="product_details">Size Details</div>
            <div class="product_informations">Our hoodies are unisex and oversize. We recommend choosing smaller size.</div>
            <div class="product_details">Shipping</div>
            <div class="product_informations">Predicted shipping time is 3-7 business days</div>
            <div class="product_buttons">
                <form method="post" action="product.php">
                    <input type="hidden" name="product_id" value="<?php echo $productData['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $productData['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $productData['price']; ?>">
                    <input type="submit" name="add_to_cart" class="addCart" value="Add to Cart">
                </form>
            </div>
        </div>
    </div>

    <?php
        }
    }
    ?>
    
    <!-- ---------------- FOOTER ---------------- -->

    <footer>
        <div class="footer_content">
            <h3>Driftwear&trade;</h3>
            <div class="content">
                <a href="../src/shop.php">Shop</a>
                <a href="../src/contact.php">Contact</a>
                <a href="">Website Terms</a>
                <a href="">Privacy Policy</a>
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