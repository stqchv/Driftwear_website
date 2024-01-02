
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
    <link rel="stylesheet" href="../styles/payment.css">

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

    <div class="container">
        <?php
        $discountCode = $_POST['discount-code'];
        $finalPrice = $_POST['final_price'];
        if ($discountCode == 'POLSL<3') {
            $discountPercentage = 15;
            $discountAmount = ($discountPercentage / 100) * $finalPrice;
        }
        else {
            $discountAmount = 0;
        }
        ?>
        <h3>Shipping Info</h3>
        <form action="idk.php" method="post" class="container_">
            <div id="left_right">
                <div id="address_">
                    <div id="name">
                        <p id="title">First Name</p>
                        <input type="text" id="input" name="first_name">
                    </div>
                    <div id="name">
                        <p id="title">Second Name</p>
                        <input type="text" id="input" name="second_name">
                    </div>
                </div>
                <div id="address">
                    <p id="title">Address</p>
                    <input type="text" id="input" name="address">
                </div>
                <div id="address">
                    <p id="title">Postal Code</p>
                    <input type="text" id="input" name="postal_code">
                </div>
                <div id="address">
                    <p id="title">City</p>
                    <input type="text" id="input" name="city">
                </div>
                <div id="address">
                    <p id="title">Country</p>
                    <input type="text" id="input" name="country">
                </div>
            </div>
            <div id="left_right">
                <div id="address">
                    <input type="submit" name="submit" value="Pay">
                </div>
            </div>
        </form>
    </div>

    

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