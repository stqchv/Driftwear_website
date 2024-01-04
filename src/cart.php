

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-" crossorigin="anonymous" />
</head>
<body>
    
    <!-- ---------------- UPHEADER ---------------- -->
    <div class="upheader">
        <a href="../src/newsletter.php"><p>GET EXTRA <strong>15%</strong> DISCOUNT</p></a>
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
    
    <div class="underbar"></div> <!-- place under navbar -->

    <!-- ---------------- Cart Section ---------------- -->

    <div class="cart_">

        <div class="cart_section">

        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'driftwear_shop') or die($mysqli->connect_error);

        if (isset($_SESSION["user"])) {
            $userId = $_SESSION["user_id"];
            $result = $mysqli->query("  SELECT c.id as cart_id, c.product_id, p.name, p.price, p.image_front, c.quantity, c.product_size FROM carts c
                                        INNER JOIN products p ON c.product_id = p.id
                                        WHERE c.user_id = $userId");
            $totalPrice = 0;
            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $totalPrice += $row['price'] * $row['quantity'];
                        // ---------------- Cart ----------------
                        echo "<div class='cart_product'>";
                        echo "    <div class='product_image'>";
                        echo "        <a href='../src/product.php?id={$row['product_id']}'>";
                        echo "            <img src='{$row['image_front']}' alt=''>";
                        echo "        </a>";
                        echo "    </div>";
                        echo "    <div class='product_info'>";
                        echo "        <div class='product_info1'>";
                        echo "            <h3><a href='../src/product.php?id={$row['product_id']}'>{$row['name']}</a></h3>";
                        echo "            <h4>Size: {$row['product_size']}</h4>";
                        echo "            <h4>Quantity: {$row['quantity']}</h4>";
                        echo "        </div>";
                        echo "        <div class='product_info2'>";
                        echo "            <h4>€{$row['price']}.00</h4>";
                        echo "            <form method='POST' action='../php/remove_from_cart.php'>";
                        echo "                <input type='hidden' name='cart_id' value='{$row['cart_id']}'>";
                        echo "                <button type='submit' name='remove_from_cart' class='trash_logo'><i class='fas fa-trash-alt'></i></button>";
                        echo "            </form>";
                        echo "        </div>";
                        echo "    </div>";
                        echo "</div>";
                    }
                    if ($totalPrice > 200) {
                        $shippingCost = 0;
                    } else {
                        $shippingCost = 20;
                    }
                    ?>
                    <form action="../src/payment.php" method="post">
                    <?php
                    // ---------------- Summary ----------------
                    echo "<div class='summary'>";
                    echo "    <h2>Order Summary</h2>";
                    echo "    <div class='summary_info'>";
                    echo "        <h4><span class='span_price'>Order:</span> €".$totalPrice.".00</h4>";
                                  if ($shippingCost == 0) {
                    echo "           <h4><span class='span_price'>Shipping cost:</span> free</h4>";
                                  } else {
                    echo "           <h4><span class='span_price'>Shipping cost:</span> €".$shippingCost.".00</h4>";
                                  }
                    echo "    </div>";
                    echo "    <div class='discount_code'>";
                    echo "        <h4><span class='span_price'>Discount code:</span></h4>";
                    echo "        <div class='discount_code_bracket'>";
                    echo "            <input type='text' id='discount-code' name='discount-code' placeholder='Insert your code'>";
                    echo "            <button type='button' onclick='checkDiscoundCode()' class='discount_button'>Save</button>";
                    echo "            <p id='result-message'></p>";
                    echo "        </div>";
                    echo "    </div>";
                    echo "    <div class='summary_info2'>";
                    echo "        <div class='summary_info2_'>";
                    echo "            <h4><span class='span_price' id='total-price'>Total order:</span> €".($totalPrice + $shippingCost).".00</h4>";
                    echo "        </div>";
                    $finalPrice = $totalPrice + $shippingCost;
                    echo "        <input type='hidden' name='final_price' value=". $finalPrice .">";
                    echo "        <div class='summary_button'>";
                    echo "            <input type='submit' value='Checkout'>";
                    echo "        </div>";
                    echo "    </div>";
                    echo "</div>";
                    ?>
                    </form>
                    <?php
                } else {
                    echo "<div class='summary'>";
                    echo "  <p>Your cart is empty</p>";
                    echo "</div>";
                }
            }
        }
        ?>

        </div>
    </div>


    <footer>
        <div class="footer_content">
            <h3>Driftwear&trade;</h3>
            <div class="content">
                <a href="../src/shop.php">Shop</a>
                <a href="../src/contact.php">Contact</a>
                <a href="../src/policy.php">Privacy Policy</a>
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