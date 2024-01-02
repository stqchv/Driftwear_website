<?php
session_start();

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
    <link rel="stylesheet" href="../styles/newsletter.css">
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

    <!-- ---------------- NEWSLETTER ---------------- -->

    <div class="bg_fade_blue"></div>
    <div class="bg_fade_pink"></div>
    
    <form id="newsletterForm" action="" method="post">
        <label for="email"><h3>Insert your email:</h3></label>
        <div class="insert_box">
            <input type="text" id="email" name="email" placeholder="Email" required>
            <input type="submit" class="buttonnn" name="join" value="Join">
        </div>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
    
        $conn = new mysqli('localhost','root','','driftwear_shop');
        if ($conn->connect_error) {
            die("Error: " . $conn->connect_error);
        }

        $checkEmailQuery = "SELECT * FROM newsletter WHERE email = '$email'";
        $result = $conn->query($checkEmailQuery);
    
        if ($result->num_rows > 0) {
            echo "You email already exists in our newsletter";
        } else {
            $insertQuery = "INSERT INTO newsletter (email) VALUES ('$email')";
            if ($conn->query($insertQuery) === TRUE) {
                echo "<div class='code_info'>Thank you, your email has been added to our newsletter.<br>Use code 'POLSL<3' to get 15% off</div>";
            } else {
                echo "<div class='code_info'>There was a problem, reload the page</div>" . $conn->error;
            }
        }
        $conn->close();
    }
    
    ?>

    </form>

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