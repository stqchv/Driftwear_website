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

    <div class="underbar"></div> <!-- place under navbar -->

    <!-- ---------------- REGISTRATION ---------------- -->

    <div class="bg_fade_blue_reg"></div>
    <div class="bg_fade_pink_reg"></div>

    <div class="register_container">
        
        <h3>Register</h3>
        <h5>Or 
            <a href="../src/login.php" class="login_link">log in</a>
            if you already have account
        </h5>
        <form action="register.php" method="post">
            <div class="form_group1">
                <input type="text" class="register_input" name="email" placeholder="Email">
            </div>
            <div class="form_group">
                <input type="text" class="register_input" name="password" placeholder="Password">
            </div>
            <div class="form_group">
                <input type="text" class="register_input" name="repeat_password" placeholder="Password repeat">
            </div>

            <?php 

            if (isset($_POST["submit"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                $passwordRepeat = $_POST["repeat_password"];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                $errors = array();

                if (empty($email) OR empty($password) OR empty($passwordRepeat)) {
                    array_push($errors, "All fields are required");
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                }
                if (strlen($password)<8) {
                    array_push($errors, "Password must be at least 8 letters long");
                }
                if ($password!==$passwordRepeat) {
                    array_push($errors, "Password does not match");
                }
                require_once "../php/connect.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount>0) {
                    array_push($errors, "Account with this email already exists");
                }
                if (count($errors)>0) {
                    foreach ($errors as $error) {
                        echo "<div class='login_error'>&times; $error</div>";
                    }
                } 
                else {
                    $sql = "INSERT INTO users (email, password) VALUES ( ?, ? )";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($prepareStmt) {
                        mysqli_stmt_bind_param($stmt,"ss",$email,$passwordHash);
                        mysqli_stmt_execute($stmt);
                        echo "<h5>&#10003;  Account created successfully</h5>";
                    } 
                    else {
                        die("Błąd: " . mysqli_stmt_error($stmt));
                    }
                }
            }

            ?>

            

            <div class="form_group">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>