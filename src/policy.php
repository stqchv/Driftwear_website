<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear</title>

    <link rel="icon" href="../images/browser_icon.png">

    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/policy.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/section.css">

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

    <div class="bg_fade_blue"></div>
    <div class="bg_fade_pink"></div>

    <div class="container">
        <h3>Privacy Policy for Driftwear</h3>

        <p>Last updated: 02.01.2024</p>

        <h4>1. Introduction</h4>
        <p>Welcome to Driftwear. This Privacy Policy outlines how we collect, use, disclose, and safeguard your personal information when you visit our website.</p>

        <h4>2. Information We Collect</h4>
        <p>We collect personal information that you voluntarily provide to us, including but not limited to your name, email address, and any other information you choose to share.</p>

        <h4>3. How We Use Your Information</h4>
        <p>We may use the collected information for various purposes, such as providing and maintaining our website, improving our services, sending periodic emails, and responding to your comments and inquiries.</p>

        <h4>4. Data Security</h4>
        <p>We take the security of your personal information seriously and implement reasonable measures to protect it from unauthorized access, disclosure, alteration, and destruction.</p>

        <h4>5. Cookies</h4>
        <p>We may use cookies to enhance your experience on our website. You have the option to accept or decline these cookies. Please note that declining cookies may limit some features of the site.</p>

        <h4>6. Third-Party Links</h4>
        <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>

        <h4>7. Your Rights</h4>
        <p>You have the right to access, correct, update, or delete your personal information. If you would like to exercise any of these rights, please contact us at [your email address].</p>

        <h4>8. Changes to This Privacy Policy</h4>
        <p>We reserve the right to update or modify this Privacy Policy at any time. Any changes will be effective immediately upon posting the updated policy on our website.</p>

        <br><br>
        <p>By using our website, you agree to the terms of this Privacy Policy.</p>

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