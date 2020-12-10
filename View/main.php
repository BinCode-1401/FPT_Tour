<main>
    <style>
        view-book{
            background-color: rgb(235, 252, 255) !important;
        }
    </style>
    <div class="slogan">
        <div class="boxcenter">
            <div class="slogan-content">
                <h1 class="slogan-h1">FPT Travel</h1>
                <h2>Không có mảnh đất nào là <span>xa lạ</span></h2>
                <h2>Chỉ có những kẻ lữ hành là <span>người lạ</span></h2>
            </div>
            <script>
                $(function() {
                    $('.slogan-h1').textyle();
                    $('.slogan-content h2').textyle();
                })
            </script>
            <div class="slogan-link">
                <a href="index.php?Controller=login">Đặt vé ngay</a>
            </div>
        </div>
    </div>
    <div class="slide-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="IMG/my-nguyen-_Urhnvu18yk-unsplash.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="IMG/krisztian-tabori-KJ1ida5X2hg-unsplash.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="IMG/giuliano-gabella-QQ9vWTP3eGo-unsplash (1).jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="IMG/dac-duy-dbm6qjNeFo8-unsplash.jpg" alt="">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination slide swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="form-tour">
        <div class="boxcenter">
            <form action="" method="post">
                <h2>Bạn muốn đi đâu?</h2>
                <!-- <input type="text" placeholder="Điểm đến..." class="ip"> -->
                <select name="" id="" class="ip">
                    <option value="">Điểm đến ...</option>
                    <option value="">Miền Bắc</option>
                    <option value="">Miền Trang</option>
                    <option value="">Miền Nam</option>
                </select>
                <input type="date" name="" id="" class="ip">
                <select name="" id="" class="ip">
                    <option value="">Loại hình du lịch</option>
                    <option value="">Du lịch tham quan</option>
                    <option value="">Du lịch văn hóa</option>
                    <option value="">Du lịch ấm thực</option>
                </select>
                <input type="submit" value="Check tour" class="ip ipsub">
            </form>
        </div>
    </div>
    <div class="top-review">
        <i class="fad fa-plane-alt flane flane1"></i>
        <i class="fad fa-plane-alt flane flane2"></i>
        <div class="boxcenter">
            <div class="top-review-content">
                <h2>Review top 10 địa điểm du lịch hè 2020 chắc chắc "không thể bỏ qua"</h2>
            </div>
            <div class="swiper-container swiper-container-top">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($showTour as $row) {
                        echo '
                                <div class="swiper-slide review">
                            <img src="Update/IMG_Travel/' . $row['tour_images'] . '" alt="">
                            <div class="swiper-slide-h2">
                                <h2>' . $row['diadiem'] . '</h2>
                            </div>
                            <div class="swiper-slide-btn">
                                <a href="">Còn '.$row['vetrong'].' vé</a>
                            </div>
                        </div>
                                ';
                    }
                    ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-top"></div>
            </div>
        </div>
    </div>
    <div class="form-email">
        <div class="boxcenter">
            <form action="index.php?Controller=login" method="post">
                <div class="form-emai-content">
                    <h2>Đăng kí ngay với chúng tôi</h2>
                    <h3>Để nhận được nhiều ưu đãi hấp dẫn cùng các thông tin các địa điểm du lịch nổi tiếng</h3>
                </div>
                <input type="email" class="ip ipemail" placeholder="Hãy nhập email của bạn..." value="">
                <input type="submit" value="Đăng kí" class="ip ipsub ipsubemail">
            </form>
        </div>
    </div>
    <div class="view-book">
        <div class="boxcenter">
            <div class="view-book-content">
                <h2>Book tour ngay săn vé liền tay</h2>
                <h3>Đăng ký và đặt vé nhanh chóng, các bạn có cơ hội
                    nhận được những tấm vé trọn gói với mức giá khuyễn mãi
                </h3>
                <h3>Hãy cùng chúng tôi tham quan những danh lam thắng cảnh
                    đẹp nhất chỉ tại Việt Nam
                </h3>
            </div>
            <div class="swiper-container book">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($showBookTour as $row) {
                        echo '<div class="swiper-slide">
                            <img src="Update/IMG_Travel/' . $row['tour_images'] . '" alt="">
                            <div class="swiper-slide-bg">
                                <a href="index.php?Controller=datve&Action=booking&id='.$row['tour_id'].'">' . $row['diadiem'] . '</a>
                                <h4>' . $row['tour_name'] . '</h4>
                                <div class="bg-ft">
                                    <div class="star1">
                                    </div>
                                    <script>
                                        $(".star1").rateYo({
                                            rating: '.$row['star'].',
                                            starWidth: "25px",
                                            readOnly: true
                                        });
                                    </script>
                                    <div class="bg-ft-p">
                                        <p>( Còn '.$row['vetrong'].' vé )</p>
                                    </div>
                                    <div class="bg-ft-day">
                                        <i class="fal fa-clock"></i>
                                        <p>' . $row['lichtrinh'] . '</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

                    ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination book"></div>
            </div>
            <div class="view-book-link">
                <a href="index.php?Controller=tour">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="video">
        <video src="Welcome to Vietnam_Trim.mp4" autoplay muted loop></video>
    </div>
    <div class="vehicle">
        <div class="boxcenter flex">
            <div class="vehicle-train">
                <div class="vehicle-box">
                    <i class="fal fa-subway"></i>
                    <p>Phương tiện tham quan an toàn sang trọng</p>
                </div>
            </div>
            <div class="vehicle-hotel">
                <div class="vehicle-box">
                    <i class="fal fa-hotel"></i>
                    <p>Khách sạn đạt chuẩn 5 sao phục vụ chu đóa tận tình</p>
                </div>
            </div>
            <div class="vehicle-guide">
                <div class="vehicle-box">
                    <i class="fal fa-person-sign"></i>
                    <p>Đội ngũ hướng dấn viên trẻ trung vui tính và giàu kinh nghiệm</p>
                </div>
            </div>
        </div>
    </div>
    <div class="comment">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide comment">
                        <div class="comment-avatar">
                            <div class="avatar">
                                <img src="IMG/avt.jpg" alt="">
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>
                                "Vì cuộc đời là những chuyến đi để chạm - đi để cảm nhận - đi để trải nghiệm"
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide comment">
                        <div class="comment-avatar">
                            <div class="avatar">
                                <img src="IMG/avt.jpg" alt="">
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>"Vì cuộc đời là những chuyến đi để chạm - đi để cảm nhận - đi để trải nghiệm"</p>
                        </div>
                    </li>
                    <li class="splide__slide comment">
                        <div class="comment-avatar">
                            <div class="avatar">
                                <img src="IMG/avt.jpg" alt="">
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>"Vì cuộc đời là những chuyến đi để chạm - đi để cảm nhận - đi để trải nghiệm"</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="scene" id="scene">
        <div class="boxcenter">
            <div class="scene-content">
                <h2>Top cảnh đẹp trong tuần</h2>
            </div>
            <div class="swiper-container img">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($showCanhDep as $row) {
                        echo '
                            <div class="swiper-slide">
                            
                            <img src="Update/IMG_Travel/' . $row['tour_images'] . '" alt="">
                            <div class="scene-bg">
                                <h3>' . $row['lichtrinh'] . '</h3>
                                <h2>' . $row['diadiem'] . '</h2>
                            </div>
                        </div>
                            ';
                    }

                    ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination sp-img"></div>
            </div>
        </div>
    </div>
    <div class="lienhe" id="lh">
        <div class="boxcenter flex">
            <div class="boxlh">
                <i class="fas fa-envelope"></i>
                <div class="ndlh">
                    <p>Email</p>
                    <span>email@gmail.com</span>
                </div>
            </div>
            <div class="boxlh">
                <i class="fas fa-phone"></i>
                <div class="ndlh">
                    <p>SĐT</p>
                    <span>0123456789</span>
                </div>
            </div>
            <div class="boxlh">
                <i class="fas fa-map-marker-alt"></i>
                <div class="ndlh">
                    <p>Vị trí</p>
                    <span>Việt Nam</span>
                </div>
            </div>
        </div>
    </div>
</main>