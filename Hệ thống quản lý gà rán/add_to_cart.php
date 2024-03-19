<?php
// Kết nối tới cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "htqlfastfood");

// Lấy thông tin sản phẩm từ form
$name = $_POST['name'];
$price = $_POST['price'];


// Kiểm tra
$sql = "SELECT * FROM cart WHERE name = $name";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// Nếu sản phẩm đã tồn tại, cập nhật số lượng sản phẩm trong giỏ hàng
$row = mysqli_fetch_assoc($result);
$quantity += $row["quantity"];

$sql = "UPDATE cart SET quantity = $quantity WHERE id = " . $row["id"];
mysqli_query($conn, $sql);
} else {
// Nếu sản phẩm chưa tồn tại, thêm sản phẩm vào giỏ hàng
$sql = "INSERT INTO cart (name, quantity, price) VALUES ($name, $quantity, 10)";
mysqli_query($conn, $sql);
}

// Chuyển hướng khách hàng đến trang giỏ hàng
header("Location: dohang.php");
exit;
?>