<?php
ob_start();
if (session_id() == true) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPT Travel</title>
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="JS/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="JS/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="JS/rateyo/rateyo.css">
    <link rel="stylesheet" href="JS/rateyo/rateyo.min.css">
    <link rel="stylesheet" href="JS/splide-2.4.18/dist/css/splide.min.css">
    <link rel="stylesheet" href="CSS/jquery.nice-number.css">
    <link rel="stylesheet" href="CSS/index.css">
    <script src="JS/jquery-3.5.0.min.js"></script>
    <script src="JS/rateyo/rateyo.min.js"></script>
    <script src="JS/jquery.nice-number.js"></script>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v9.0'
    });
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
</head>

<body>

    <button id="topbt"><i class="fas fa-arrow-up"></i></button>
    <header>
        <div class="menu">
            <input type="checkbox" name="" id="check">

            <div class="logo-menu">
                <a href="index.php">
                    <img src="IMG/logo.png" alt="">
                </a>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="index.php?Controller=tour">Đặt vé</a>
                            <!-- <div class="dropdown">
                                <i class="fas fa-caret-down"></i>
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="index.php?Controller=tour&Show=tourmienbac">Miền Bắc</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="index.php?Controller=tour&Show=tourmientrung">Miền Trung</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="index.php?Controller=tour&Show=tourmiennam">Miền Nam</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <!-- <li class="nav-link" style="--i: 1.1s">
                            <a href="index.php?Controller=datve">Đặt vé</a>
                        </li> -->
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="index.php?Controller=canhdep">Top cảnh đẹp trong tuần</a>
                        </li>
                        <li class="nav-link" style="--i: 1.6s">
                            <a href="index.php?Controller=lienhe">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <div class="log-sign" style="--i: 1.8s">
                    <ul>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                    <a href="index.php?Controller=login" class="btn transparent">Log in</a>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <?php
        $Controller="main";
        if (isset($_GET['Controller'])) {
            $Controller=$_GET['Controller'];
            
        }
        include "Controller/".$Controller.".php";
    ?>
    <footer>
        <div class="l-footer">
            <div class="footer-logo">
                <img src="IMG/logo-w.png" alt="">
            </div>
            <p>

            </p>
        </div>
            <ul class="r-footer">
            <li>
                <h2>Mạng xã hội</h2>
                <ul class="box">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </li>
            <li class="features">
                <h2>Thông tin</h2>
                <ul class="box h-box">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Số điện thoại</a></li>
                    <li><a href="#">Vị trí</a></li>
                    <li><a href="#">Vé</a></li>
                    <li><a href="#">Chứng chỉ</a></li>
                    <li><a href="#">Dịch vụ khách hàng</a></li>
                </ul>
            </li>
            <li>
                <h2>Hợp pháp</h2>
                <ul class="box">
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Điều khoản sử dụng</a></li>
                    <li><a href="#">Hợp đồng</a></li>
                </ul>
            </li>
        </ul>
        <div class="b-footer">
            <p>@Designed by everyone in <span>group 6</span></p>
        </div>
    </footer>
    <script src="JS/swiper/swiper-bundle.js"></script>
    <script src="JS/swiper/swiper-bundle.min.js"></script>
    <script src="JS/splide-2.4.18/dist/js/splide.min.js"></script>
    <script src="JS/textyle.js"></script>
    <script src="JS/nouislider.js"></script>
    <script src="JS/main.js">
        
    </script>
    <script src="JS/API/login_facebook.js"></script>
    
</body>
</html>