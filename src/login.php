<?php
    session_start();
    if (isset($_SESSION["user"])) {
        header("Location: ../src/index.php");
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
    <link rel="stylesheet" href="../styles/register.css">

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
            <a href="../src/login.php" class="user">Login</a>
        </div>
    </header>

    <!-- ---------------- place under navbar ---------------- -->

    <div class="underbar"></div>

    <!-- ---------------- REGISTRATION ---------------- -->

    <div class="bg_fade_blue_reg"></div>
    <div class="bg_fade_pink_reg"></div>

    <div class="register_container">
        
        <h3>Login</h3>
        <h5>Or 
            <a href="../src/register.php" class="login_link">register</a>
            if you do not have an account yet
        </h5>

        <form action="login.php" method="post">
            <div class="form_group1">
                <input type="text" class="register_input" name="email" placeholder="Email">
            </div>
            <div class="form_group">
                <input type="text" class="register_input" name="password" placeholder="Password">
            </div>

            <?php 
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "../php/connect.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $users = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if ($users) {
                    if (password_verify($password, $users["password"])) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        $_SESSION["user_id"] = $users["id"];
                        header("Location: ../src/index.php");
                        die();
                    }
                    else {
                        echo "<div class='login_error'>&times; Password does not match</div>";
                    }
                }
                else {
                    echo "<div class='login_error'>&times; Email does not match</div>";
                }
            }
            ?>

            <div class="form_group">
                <input type="submit" class="buttonnn" name="login" value="Login">
            </div>



        </form>
    </div>
</body>
</html>