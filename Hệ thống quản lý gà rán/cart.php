<?php
session_start();

// Thêm sản phẩm vào giỏ hàng
if (isset($_POST["name"]) && isset($_POST["price"])) {
  $product = array("name" => $_POST["name"], "price" => $_POST["price"]);
  $_SESSION["cart"][] = $product;
}

// Hiển thị thông tin giỏ hàng
if (isset($_SESSION["cart"])) {
  $total = 0;
  foreach ($_SESSION["cart"] as $product) {
    $total += $product["price"];
    echo $product["name"] . " - " . $product["price"] . "<br>";
  }
  echo "Tổng cộng: " . $total;
} else {
  echo "Giỏ hàng của bạn đang trống.";
}
?>

