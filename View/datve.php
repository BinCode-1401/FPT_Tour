<main class="datve">
    <style>
        .time-day-p1{
  color: #df2e1b;
  font-size: 1.7vmax;
  font-weight: bold;
  margin-top: 0vmax;

  
}
.timeline-item::after{
  content: '';
  width: 1vmax;
  height: 1vmax;
  border-radius: 50%;
  background-color: #df2e1b;
  position: absolute;
  top: 11%;
  transform: translateY(-50%);
  left: -2vmax;
  z-index: 10;
  box-shadow: 0 0 .5vmax yellow;
}
    </style>
    <div class="boxcenter">
        <div class="datve-title">
            <?php
            foreach ($bookingve as $row) {
                echo '
                        <p>' . $row['tour_name'] . '</p>
            </div>
            <div class="datve-main">
                <div class="datve-img">
                <img src="Update/IMG_Travel/'.$row['tour_images'].'" alt="">
                </div>
                <div class="datve-content">
                            <form action="index.php?Controller=datve&Action=addve" method="post">
                            <h2>' . $row['tour_name'] . '</h2>
                        <div class="evaluate">
                            <div class="star1">
                            </div>
                            <script>
                                $(".star1").rateYo({
                                    rating: '.$row['star'].',
                                    starWidth: "25px",
                                    readOnly: true
                                });
                            </script>
                            <p>( '.$row['danhgia'].' người đã đánh giá )</p>
                        </div>
                      <hr>  
                        <div class="datve-content-p flex">
                            <p>Chương trình sẽ bắt đầu vào ngày :</p>
                            <p>' . $row['ngaykhoihanh'] . '</p>
                        </div>
                        
                        <div class="datve-content-p flex">
                            <p>Chương trình kéo dài trong:</p>
                            <p>' . $row['lichtrinh'] . '</p>
                        </div>
                        <div class="datve-content-p flex">
                            <p>Địa điểm:</p>
                            <p>' . $row['diadiem'] . '</p>
                        </div>
                        <hr>
                        <div class="datve-content-p flex">
                            <div class="datve-content-l">
                                <p class="price">' . $row['tour_price'] . '</p>
                                <p>Còn: <span>'.$row['vetrong'].' vé</span></p>
                            </div>
                            ';
            }
            ?>
            <!-- <div class="datve-content-p flex">
                            <p>Chọn ngày khác:</p>
                            <input type="date" name="" id="" class="ip">
                        </div> -->
            <div class="datve-content-r">
                <script>
                    $(function() {
                        $('.datve-content-r input[type="number"]').niceNumber();
                    });
                </script>
                <input type="number" value="1" min="1" readonly id="show_count">
                <script>
                    var aa = document.querySelector('input[type="number"]').value;
                    console.log(aa);
                </script>
            </div>
        </div>
        <hr>
        <div class="datve-sub">
            <input type="submit" value="Đặt vé">
        </div>
        </form>

    </div>
    </div>
    <div class="datve-detail">
        <div class="datve-left">
            <div class="datve-left-menu">
                <h2><i class="fas fa-spinner"></i>Chương trình tour</h2>
                <ul>
                    <li><a href=""><i class="far fa-info-square"></i>Chi tiết tour</a></li>
                    <li><a href=""><i class="fas fa-exclamation-triangle"></i>Lưu ý</a></li>
                    <li><a href=""><i class="fal fa-calendar-alt"></i>Ngày khác</a></li>
                    <li><a href=""><i class="fad fa-comments"></i>Ý kiến khách hàng</a></li>
                    <li><a href=""><i class="fas fa-headset"></i>Liên hệ</a></li>
                    <li><a href=""><i class="fas fa-map"></i>Bản đồ</a></li>
                </ul>
            </div>
            <div class="datve-left-service">
                <h2>Dịch vụ đi kèm</h2>
                <ul>
                    <li><i class="fas fa-check-circle"></i>Bữa ăn theo chương trình</li>
                    <li><i class="fas fa-check-circle"></i>Bảo hiểm</li>
                    <li><i class="fas fa-check-circle"></i>Hướng dẫn viên</li>
                    <li><i class="fas fa-check-circle"></i>Vé tham quan</li>
                    <li><i class="fas fa-check-circle"></i>Vận chuyển</li>
                </ul>
            </div>
        </div>
        <div class="datve-timeline">
            <h2>Chương trình tour</h2>
                    <?php
                        foreach ($showChuongTrinh as $row) {
                            echo $row['schedule'];
                        }
                    ?>
            
        </div>
    </div>
    <div class="datve-refer">
        <h2>Các tour tương tự</h2>
        <div class="datve-refer-slide">
            <div class="swiper-container swiper-container-refer">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($showBookTour as $row) {
                        echo '<div class="swiper-slide">
                                    <div class="refer-img">
                                    <a href="index.php?Controller=datve&Action=booking&id='.$row['tour_id'].'"><img src="Update/IMG_Travel/' . $row['tour_images'] . '" alt=""></a>
                                        
                                        <div class="refer-day">
                                            <p><i class="far fa-calendar-alt"></i>' . $row['ngaykhoihanh'] . ' - ' . $row['lichtrinh'] . ' - 3 chỗ</p>
                                        </div>
                                    </div>
                                    <div class="refer-detail">
                                        <p class="refer-detail-p">
                                            ' . $row['tour_name'] . '
                                        </p>
                                        <p class="refer-price">
                                            <i class="fas fa-usd-circle"></i>' . $row['tour_price'] . '
                                        </p>
                                    </div>
                                </div>';
                    }

                    ?>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-refer"></div>
            </div>
        </div>
    </div>
    </div>
</main>