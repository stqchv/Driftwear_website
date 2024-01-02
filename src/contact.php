<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear</title>

    <link rel="icon" href="../images/browser_icon.png">

    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <link rel="stylesheet" href="../styles/footer.css">

    <script src="https://kit.fontawesome.com/2bd77566a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
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
                    echo "<a href='../src/cart.php' class='cart'><i class='ri-shopping-bag-fill'></i></a>";
                }
                else {
                    echo "<a href='../src/login.php' class='user'>Login</a>";
                }
            ?>
        </div>
    </header>

    <div class="underbar"></div> <!-- place under navbar -->
    
    <!-- ---------------- CONTACT ---------------- -->

    <div class="contact_section">

        <div class="contact_info" id="first_section">
            <h2>Contact Information:</h2>
            <p><strong>Store Address:</strong><br>
                Driftwear<br>
                ul. Wolności 123<br>
                41-800 Zabrze
            </p>
            <p><strong>Phone:</strong><br>
                +48 123 456 789
            </p>
            <p><strong>Email:</strong><br>
                <a href="mailto:kontakt@sklepbluzowy.pl">kontakt@sklepbluzowy.pl</a>
            </p>
        </div>

        <div class="contact_info">
            <h2>Opening Hours:</h2>
            <p><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</p>
            <p><strong>Saturday:</strong> 10:00 AM - 3:00 PM</p>
            <p><strong>Sunday:</strong> Closed</p>
        </div>

        <div class="contact_info">
            <h2>Contact Form:</h2>
        </div>

        <div class="contact_info">
            <h2>Social Media:</h2>
            <p>Join our social media to stay updated with news, promotions, and stylish inspirations:</p>
            <ul>
                <li><a href="#" target="_blank">Facebook</a></li>
                <li><a href="#" target="_blank">Instagram</a></li>
                <li><a href="#" target="_blank">Twitter</a></li>
            </ul>
        </div>

        <p>Thank you for your interest in our online hoodie store! We are here for you.</p>

    </div>

    <!-- ---------------- FOOTER ---------------- -->

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