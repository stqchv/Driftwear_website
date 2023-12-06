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
            <a href="#">Contact</a>
        </div>

        <div class="profile">
            <a href="#" class="user"><i class="fa-regular fa-user"></i></a>
            <a href="#" class="cart"><i class="ri-shopping-bag-fill"></i></a>
            <div id="menu-icon"></div>
        </div>
    </header>

    <!-- ---------------- place under navbar ---------------- -->

    <div class="underbar"></div>

    <!-- ---------------- REGISTRATION ---------------- -->

    <div class="register_container">
        <h3>Register</h3>
        <form action="../login.php" method="post">
            <div class="form_group">
                <input type="text" class="register_input" name="email" placeholder="Email">
            </div>
            <div class="form_group">
                <input type="text" class="register_input" name="password" placeholder="Password">
            </div>
            <div class="form_group">
                <input type="text" class="register_input" name="repeat_password" placeholder="Password repeat">
            </div>
            <div class="form_group">
                <input type="submit" class="register_button" name="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>