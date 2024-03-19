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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"> </script>
    
    <!-- Tài liệu tham khảo -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Passion+One&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
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
        <nav class="navbar position-fixed navbar-expand-lg container-fluid navbar-light shadow-sm bg-white justify-content-center">
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
                <button class="navbar-toggler search-icon" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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

    <main class="main">
        <!-- Handle navigation override hot-news -->
        <div class="pushdown"></div>
        <div class="">
            <form action="log.php" method="POST" class="form2" id="form-1">
                <h3 class="heading">Đăng Nhập</h3>
                <p class="desc"></p>
                <div class="spacer"></div>
                <label for="fullname" class="form-label" size="30">Tên Đăng Nhập </label>
                <input id="fullname" name="fullname" type="text" placeholder="vui lòng nhập vào đây" class="form-control">
                <span class="form-message"></span>
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
                <button class="form-submit">Đăng Nhập</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white" id="scrollContact">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-secondary btn-floating m-1" href="https://www.facebook.com/" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Google -->
                <a class="btn btn-secondary btn-floating m-1" href="https://www.google.com/" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-secondary btn-floating m-1" href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a>
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