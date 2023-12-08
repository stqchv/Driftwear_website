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
    <link rel="stylesheet" href="../styles/contact.css">

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
                }
                else {
                    echo "<a href='../src/login.php' class='user'>Login</a>";
                }
            ?>
            <a href="#" class="cart"><i class="ri-shopping-bag-fill"></i></a>
            <div id="menu-icon"></div>
        </div>
    </header>

    <!-- ---------------- place under navbar ---------------- -->

    <div class="underbar"></div>

    <!-- ---------------- CONTACT ---------------- -->

    <div class="contact_info" id="first_section">
        <h2>Dane kontaktowe:</h2>
        <p><strong>Adres sklepu:</strong><br>
            Sklep z Bluzami Online<br>
            ul. Przykładowa 123<br>
            00-000 Miasto
        </p>
        <p><strong>Telefon:</strong><br>
            +48 123 456 789
        </p>
        <p><strong>E-mail:</strong><br>
            <a href="mailto:kontakt@sklepbluzowy.pl">kontakt@sklepbluzowy.pl</a>
        </p>
    </div>

    <div class="contact_info">
        <h2>Godziny otwarcia:</h2>
        <p><strong>Poniedziałek - Piątek:</strong> 9:00 - 18:00</p>
        <p><strong>Sobota:</strong> 10:00 - 15:00</p>
        <p><strong>Niedziela:</strong> Zamknięte</p>
    </div>

    <div class="contact_info">
        <h2>Formularz kontaktowy:</h2>
        <!-- Tutaj dodaj formularz kontaktowy -->
    </div>

    <div class="contact_info">
        <h2>Media społecznościowe:</h2>
        <p>Dołącz do naszych społecznościowych mediów, aby być na bieżąco z nowościami, promocjami i stylowymi inspiracjami:</p>
        <ul>
          <li><a href="#" target="_blank">Facebook</a></li>
          <li><a href="#" target="_blank">Instagram</a></li>
          <li><a href="#" target="_blank">Twitter</a></li>
        </ul>
    </div>

    <p>Dziękujemy za zainteresowanie naszym sklepem z bluzami online! Jesteśmy tu dla Ciebie.</p>

</body>
</html>