
    <main class="tour">
    <style>
        main.tour{
        background-color: #e9ffff !important;
        }
    </style>
        <div class="boxcenter">
            <div class="tour-main">
                <div class="tour-container">
                    <form action="">
                        <h2>Bạn muốn tham gia chương trình với tầm giá ?</h2>
                        <select name="" id="" class="ip-tour">
                            <option value="">Điểm đến ...</option>
                            <option value="">Miền Bắc</option>
                            <option value="">Miền Trung</option>
                            <option value="">Miền Nam</option>
                        </select>
                        <select name="" id="" class="ip-tour">
                            <option value="">Loại hình du lịch</option>
                            <option value="">Du lịch tham quan</option>
                            <option value="">Du lịch văn hóa</option>
                            <option value="">Du lịch ấm thực</option>
                        </select>
                        <h3>Mức giá hợp lý</h3>
                        <div id="slider-range"></div>
                        <div class="slider-labels">
                            <span id="slider-range-value1"></span><span> - </span><span id="slider-range-value2"></span>
                        </div>
                        <input type="hidden" name="min-value" value="">
                        <input type="hidden" name="max-value" value="">
                        <input type="submit" value="Đăng ký" class="ip-tour ip-tour-sub">
                    </form>
                    <script>
                        $(document).ready(function () {
                              $('.noUi-handle').on('click', function () {
                                  $(this).width(50);
                              });
                              var rangeSlider = document.getElementById('slider-range');
                              var moneyFormat = wNumb({
                                  decimals: 0,
                                  thousand: '.',
                                  prefix: ''
                              });
                              noUiSlider.create(rangeSlider, {
                                //   thế giá tiền nhỏ nhất vào 0 và lớn nhất vào 100
                                  start: [100, 10000],
                                  step: 1,
                                  range: {
                                      'min': [100], //   thế giá tiền nhỏ nhất vào min
                                      'max': [10000]//   thế giá tiền lớn nhất vào max
                                  },
                                  format: moneyFormat,
                                  connect: true
                              });
  
                              // Set visual min and max values and also update value hidden form inputs
                              rangeSlider.noUiSlider.on('update', function (values, handle) {
                                  document.getElementById('slider-range-value1').innerHTML = values[0];
                                  document.getElementById('slider-range-value2').innerHTML = values[1];
                                  document.getElementsByName('min-value').value = moneyFormat.from(
                                      values[0]);
                                  document.getElementsByName('max-value').value = moneyFormat.from(
                                      values[1]);
                              });
                          });
                    </script>
                  </div>
                  <div class="swiper-container swiper-container-tour">
                    <div class="swiper-wrapper">
                    <?php
                        foreach ($showBookTour as $row) {
                            echo '<div class="swiper-slide">
                            <img src="Update/IMG_Travel/'.$row['tour_images'].'" alt="">
                            <div class="swiper-slide-bg">
                                <a href="index.php?Controller=datve&Action=booking&id='.$row['tour_id'].'">'.$row['diadiem'].'</a>
                                <h4>'.$row['tour_name'].'</h4>
                                <div class="bg-ft">
                                    <div class="star1">
                                    </div>
                                    <script>
                                        $(".star1").rateYo({
                                            rating: 3,
                                            starWidth: "25px",
                                            readOnly: true
                                        });
                                    </script>
                                    <div class="bg-ft-p">
                                        <p>( Còn 20 vé )</p>
                                    </div>
                                    <div class="bg-ft-day">
                                        <i class="fal fa-clock"></i>
                                        <p>'.$row['lichtrinh'].'</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }?>
                        
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-tour"></div>
                </div>  
            </div>
        </div>
    </main>
