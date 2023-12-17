<?php
$mysqli = new mysqli('localhost', 'root', '', 'driftwear_shop') or die($mysqli->connect_error);

if (isset($_POST['remove_from_cart'])) {
    $cartId = $_POST['cart_id'];
    $mysqli->query("DELETE FROM carts WHERE id = $cartId");
    header('Location: ../src/cart.php');
    exit();
}
?>