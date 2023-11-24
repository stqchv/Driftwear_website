<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driftwear</title>

    <link rel="icon" href="images/browser_icon.png">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/section.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/product.css">

    <script src="https://kit.fontawesome.com/2bd77566a6.js" crossorigin="anonymous"></script>
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
            <img src="./images/logo.png" alt="Logo">
        </a>

        <div class="nav__links">
            <a href="shop.php">Shop</a>
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

    <div class="product_container">
        <div class="product_image">
            <img src="images/products/hoodie_black_front.png">
        </div>
        <div class="product_info">
            <div class="product_name"><p>Basic Black Driftwear Hoodie</p></div>
            <div class="product_price"><p>€150.00</p></div>
            <div class="product_size">
                <div class="size_button" id="size-S"><p>S</p></div>
                <div class="size_button" id="size-M"><p>M</p></div>
                <div class="size_button" id="size-L"><p>L</p></div>
                <div class="size_button" id="size-XL"><p>XL</p></div>
            </div>
            <div class="product_shipping"><p>Free shipping over €200.00</p></div>
            <div class="product_details">Details</div>
            <div class="product_informations">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae sapiente consequatur alias enim architecto blanditiis officia totam aspernatur exercitationem mollitia autem labore tenetur soluta quod veniam, nesciunt perferendis magni ullam?
            </div>
            <div class="product_details">Size Details</div>
            <div class="product_informations">Our hoodies are unisex and oversize. We recommend chosing smaller size.</div>
            <div class="product_details">Shipping</div>
            <div class="product_informations">Predicted shipping time is 3-7 business days</div>
            <div class="product_buttons">
                <a href="shop.php">
                    <button class="addCart">Add To Cart</button>
                </a>
                <a href="shop.php">
                    <button class="checkout">Checkout</button>
                </a>
            </div>
        </div>
    </div>


    <div class="empty_space"></div>


    
    <!-- ---------------- FOOTER ---------------- -->

    <footer>
        <div class="footer_content">
            <h3>Driftwear Footer</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus explicabo itaque eligendi inventore cumque.</p>
            <ul class="socials">
                <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-tiktok'></i></a></li>
                <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
            </ul>
        </div>
        <div class="footer_bottom">
            <p>copyright &copy;2023 Driftwear. designed by <span>stqchv</span></p>
        </div>
    </footer>

    <script src="scripts/script.js" async defender></script>
</body>
</html>