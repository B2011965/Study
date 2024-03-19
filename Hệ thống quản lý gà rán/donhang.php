<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FAST FOOD </title>
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
    <!-- Tài liệu tham khảo -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Passion+One&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/cart.css">
</head>

<body>
    <!-- Loading animation -->
    <div class="preload-bg w-100 h-100 bg-white">
        <div class="spinner"></div>
    </div>

    <!-- Top header -->
    <header class="container-fluid m-0" id="scrollHome">
        <div class="top-head position-fixed w-100 text-light row px-4">
            <div class="col-0 col-sm-6">
                <a href="#" class="text-decoration-none text-light d-none d-sm-block"><i class="fa-solid fa-location-crosshairs"></i> Phường An Bình, quận Ninh Kiều, thành phố Cần Thơ </a>
            </div>
            <div class="col-12 col-sm-6 text-end">
                <a href="donhang.php" id="signinlink" class="text-decoration-none text-light ps-5"><i class="fa-solid fa-cart-shopping"></i>Giỏ hàng</a>
                <a href="#" class="text-decoration-none text-light ps-5 d-none d-sm-inline-block"><i class="fa-solid fa-globe"></i>Tiếng Việt</a>
            </div>
        </div>

        <!-- Navigation -->
        <nav
            class="navbar position-fixed navbar-expand-lg container-fluid navbar-light shadow-sm bg-white justify-content-center">
            <div class="container-fluid row">
                <!-- Brand -->
                <a class="navbar-brand col-3 col-sm-8 col-md-2 order-2 order-lg-1" href="thucdon.php"> FAST FOOD </a>

                <!-- Search form -->
                <form action="#" class="searchform order-3 m-0 col-2 col-lg-3">
                    <div class="form-group mx-auto d-flex">
                        <input type="text" class="search-input pl-3 d-none d-lg-block" placeholder="Tìm kiếm">
                        <button type="submit" class="search-icon mx-1"><span class="fa fa-search"></span></button>
                    </div>
                </form>

                <!-- Responsive menu -->
                <button class="navbar-toggler search-icon" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse collapse col-7 row order-lg-1 text-center m-0" id="ftco-nav">
                    <ul class="navbar-nav m-auto justify-content-center">
                        <li class="nav-item active" style="border-radius: .3rem; background-color: #555;"><a href="#scrollIntroduction" class="nav-link text-light">Giới thiệu</a></li>
                        <li class="nav-item active dropdown" style="border-radius: .3rem; background-color: #555;">
                            <a class="nav-link text-light" href="thucdon.php" id="dropdownMenuLink"> Thực Đơn </a>
                            <ul class="dropdown-menu shadow p-0 mb-2" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item py-2 rounded-top" href="thucdon.php#scrollForNew"> Món Mới </a></li>
                                <li><a class="dropdown-item py-2 rounded-circle" href="thucdon.php#scrollForCombo"> Combo </a></li>
                                <li><a class="dropdown-item py-2 rounded-circle" href="thucdon.php#scrollForChicken"> Gà Rán </a></li>
                                <li><a class="dropdown-item py-2 rounded-circle" href="thucdon.php#scrollForBurger"> Burger - Cơm </a></li>
                                <li><a class="dropdown-item py-2 rounded-circle" href="thucdon.php#scrollForSnack"> Thức Ăn Nhẹ </a></li>
                                <li><a class="dropdown-item py-2 rounded-bottom" href="thucdon.php#scrollForDrinks"> Thức Uống & Tráng Miệng </a></li>
                            </ul>
                        </li>
                        <li class="nav-item active" style="border-radius: .3rem; background-color: #555;"><a href="dangnhap.php" class="nav-link text-light"> Đăng Nhập</a></li>
                        <li class="nav-item active" style="border-radius: .3rem; background-color: #555;"><a href="dangky.php" class="nav-link text-light"> Đăng Ký </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        
        <!-- Handle navigation override hot-news -->
        <div class="pushdown"></div> 

        <div class="row container-fluid justify-content-center pe-0">
            <div class="basket col-9">
                <div class="basket-module">
                    <label for="promo-code">Nhập mã giảm giá của bạn</label>
                    <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field rounded">
                    <button class="promo-code-cta btn bg-dark text-light">Áp dụng</button>
                </div>
                <?php
                // Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htqlfastfood";

// Kết nối đến MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Lấy thông tin sản phẩm vừa được thêm vào giỏ hàng
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];

// Thực thi truy vấn INSERT để lưu sản phẩm vào cơ sở dữ liệu
$sql = "INSERT INTO cart (image, name, price) VALUES ('$image','$name', $price)";
if (mysqli_query($conn, $sql)) {
    echo "Thêm món thành công";
  } else {
    echo "Lỗi: " . mysqli_error($conn);
  }
// Đóng kết nối đến MySQL
mysqli_close($conn);
?>

                <?php
                

// Kiểm tra xem session giỏ hàng đã được khởi tạo chưa, nếu chưa thì khởi tạo
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Tìm sản phẩm trong giỏ hàng, nếu đã có thì tăng số lượng lên 1
$found = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['name'] === $name) {
        $item['quantity'] += 1;
        $found = true;
        break;
    }
}

// Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng
if (!$found) {
    array_push($_SESSION['cart'], array('name' => $name, 'price' => $price, 'image' => $image, 'quantity' => 1));
}

// Tính tổng tiền và số lượng sản phẩm trong giỏ hàng
$total = 0;
$count = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
    $count += $item['quantity'];
}
                ?>
                <div class="basket">
  <div class="basket-labels">
    <ul>
      <li class="item item-heading">Sản phẩm</li>
      <li class="price">Đơn giá</li>
      <li class="quantity">Số lượng</li>
      <li class="subtotal">Số tiền</li>
    </ul>
  </div>
  
  <?php 
  foreach ($_SESSION['cart'] as &$item) {
    $item['subtotal'] = $item['price'] * $item['quantity'];
  }
  foreach ($_SESSION['cart'] as $item): ?>
    <div class="basket-product">
      <div class="item">
        <div class="product-image">
          <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" class="product-frame">
        </div>
        <div class="product-details">
          <h1><?php echo $item['name']; ?></h1>
        </div>
      </div>
      <div class="price"><?php echo $item['price']; ?>đ</div>
      <div class="quantity">
        <input type="number" value="<?php echo $item['quantity']; ?>" min="1" max='10'>
      </div>
      <div class="subtotal"><?php echo $item['subtotal']; ?>đ</div>
    </div>
  <?php endforeach; ?>
  
</div>

            </div>
            <div class="popup" id="popup">
                <img src="./img/404-tick.png">
                <h2>Thank you</h2>
                <p>Cảm ơn vì đã đặt hàng</p>
                
                <button type="button" onclick="closePopup()">Đóng</button>
            </div>
            <aside class="col-12 col-md-3">
                <div class="summary">
                    <div class="summary-total-items"><span>Có tất cả </span><span class="total-items"></span> sản phẩm
                    </div>
                    <div class="summary-subtotal">
                        <form action="xacnhandonhang.php" method="post" enctype="multipart/form-data">
                        <label for="ten">Tên khách hàng:</label>
    <input type="text" name="ten" id="ten" required><br>
    <div class="subtotal-title w-100"><label for="email">Email:</label></div>
    <input type="email" name="email" id="email" required><br>
    <div class="subtotal-title w-100"><label for="sdt">Số điện thoại:</label></div>
    <input type="tel" name="sdt" id="sdt" required><br>
    <div class="subtotal-title w-100"><label for="diachi">Địa chỉ:</label></div>
    <input type="text" name="diachi" id="diachi" required><br>
    <div class="subtotal-title w-100"><label for="ghichu">Ghi chú:</label><br></div>
    <textarea name="ghichu" id="ghichu"></textarea><br>
    <input type="submit" value="Xong">
  </form>
                    </div>

</div>


                    <div class="summary-checkout">
                        
                        <button class="checkout-cta text-uppercase fw-bold"  onclick="checkout() " >Đặt hàng</button>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white" id="scrollContact">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-secondary btn-floating m-1" href="https://www.facebook.com/" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Google -->
                <a class="btn btn-secondary btn-floating m-1" href="https://www.google.com/" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-secondary btn-floating m-1" href="https://www.instagram.com/" role="button"><i
                        class="fab fa-instagram"></i></a>

            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="mb-4">
                <form action="#">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2"><strong>Đăng ký để nhận được thông tin mới nhất</strong></p>
                        </div>

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control email-input"
                                    placeholder="Địa chỉ email">
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-2 email-input-submit"> Đăng ký </button>
                        </div>
                    </div>
                    <!--Grid column-->
                </form>
            </section>

            <!-- Section: Links -->
            <section class="mb-4">
                <!--Grid row-->
                <div class="row">
                    
                    <!--Grid column-->
                    <div class="col">
                        <h5 class="text-uppercase contacting-ways mt-4">Địa chỉ</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">
                                    <i class="bi bi-shop"></i> Phường An Bình, quận Ninh Kiều, thành phố Cần Thơ. </a>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col">
                        <h5 class="text-uppercase contacting-ways mt-4">Hotline</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white"> <i class="bi bi-telephone"></i> 0123456789 </a>
                            </li>
                            <li>
                                <a href="#!" class="text-white"> <i class="bi bi-telephone"></i> 0987654321 </a>
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col">
                        <h5 class="text-uppercase contacting-ways mt-4">Email</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white"> <i class="bi bi-envelope"></i> fastfood@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="http://127.0.0.1:5500/index.php?#!">FASTFOOD.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Embedded script -->
    <script src="./scripts.js"></script>
</body>

</php>