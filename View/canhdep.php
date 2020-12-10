<style>
    /* Tin tức */

main.new {
  width: 100%;
  padding: 3vmax;
  background-color: #d5f9fc;
}

.box-new {
  padding: 1vmax;
  background-color: white;
  margin-bottom: 2vmax;
}

.new-img {
  width: 100%;
  height: 25vmax;
  position: relative;
}

.new-hl{
  position: absolute;
  top: 1vmax;
  left: 1vmax;
  background-color: #538DF3;
  color: white;
  padding: .5vmax .7vmax;
  font-weight: 600;
  border-radius: .3vmax;
}

.new-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.new-title {
  width: 100%;
  padding: 1vmax 0;
}

.new-title h2 {
  color: #293967;
  font-size: 1.5vmax;
}

.new-note {
  width: 100%;
  display: flex;
  align-items: center;
  margin-bottom: 2vmax;
}

.new-avt {
  width: 2vmax;
  height: 2vmax;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 1vmax;
}

.new-avt img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.new-note p {
  text-transform: uppercase;
  font-size: 0.8vmax;
  font-weight: 600;
  color: #c2c2c2;
}

.new-note p span {
  color: #293967;
}

.new-note p span:first-of-type {
  margin: 0 1vmax 0 0.2vmax;
}

.new-note p span:last-of-type {
  margin: 0 1vmax;
}

.new-content {
  width: 100%;
  margin-bottom: 1vmax;
}

.new-content p {
  font-size: 0.8vmax;
  font-weight: 600;
  color: #9d9d9d;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  text-overflow: ellipse;
  overflow: hidden;
}

.new-link{
  width: 20%;
}

.box-new a{
  display: block;
  font-size: 1vmax;
  text-transform: uppercase;
  font-weight: 900;
  color: #538DF3;
  transition: .5s;
}

.box-new a:hover{
  color: #293967;
  transform: rotateX(360deg);
}

@media screen and (min-width: 600px) {
  .r-footer > * {
    flex: 1;
  }

  .features {
    flex-grow: 2;
  }

  .l-footer {
    flex: 1 0px;
  }

  .r-footer {
    flex: 2 0px;
  }
}

@media (max-width: 920px) {
  .hamburger-menu-container {
    display: flex;
  }

  #check {
    display: block;
  }

  .nav-btn {
    position: fixed;
    height: calc(100vh - 5vmax);
    top: 5vmax;
    left: 0;
    width: 100%;
    background-color: rgb(240, 240, 240);
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    overflow-x: hidden;
    overflow-y: auto;
    transform: translateX(100%);
    transition: 0.65s;
  }

  #check:checked ~ .nav-btn {
    transform: translateX(0);
  }

  #check:checked ~ .nav-btn .nav-link,
  #check:checked ~ .nav-btn .log-sign {
    animation: animation 0.5s ease forwards var(--i);
  }

  .nav-links {
    flex: initial;
    width: 100%;
  }

  .nav-links > ul {
    flex-direction: column;
  }

  .nav-link {
    width: 100%;
    opacity: 0;
    transform: translateY(0.5vmax);
  }

  .nav-link > a {
    font-size: 2vmax;
    line-height: 1;
    padding: 1.6vmax 2vmax;
  }

  .nav-link:hover > a {
    transform: scale(1);
    background-color: rgb(219, 219, 219);
  }

  .dropdown {
    position: initial;
    top: initial;
    left: initial;
    transform: initial;
    opacity: 1;
    pointer-events: auto;
    width: 100%;
    padding: 0;
    background-color: #3183ac;
    display: none;
  }

  .nav-link:hover > .dropdown {
    display: block;
  }

  .nav-link:hover > a > i {
    transform: rotate(360deg);
  }

  .dropdown-link > a {
    background-color: white;
    color: black;
    /* font-weight: bold; */
    font-size: 2vmax;
    padding: 1.2vmax 2vmax;
    line-height: 1;
    padding: 1.2vmax 2vmax 1.2vmax 4vmax;
  }

  .dropdown-link:hover > a {
    background-color: black;
  }

  .nav-link > a > i {
    font-size: 1.5vmax;
    transform: rotate(-90deg);
    transition: 0.7s;
  }

  .btn {
    font-size: 2vmax;
  }

  .log-sign {
    flex: initial;
    width: 100%;
    padding: 4vmax 2vmax;
    justify-content: flex-start;
    opacity: 0;
    transform: translateY(0.5vmax);
  }
  .log-sign ul {
    margin: 0;
  }

  .log-sign ul li a i {
    font-size: 3vmax;
  }

  .log-sign a {
    font-size: 2vmax;
  }
}

</style>
<main class="new">
        <div class="boxcenter">
          <?php
            foreach ($ShowCheckTour as $row) {
              echo '
              <div class="box-new">
              <div class="new-img">
                  <img src="Update/IMG_Travel/'.$row['tour_images']
                  .'" alt="">
                  <div class="new-hl">
                      <p>'.$row['lichtrinh']
                      .'</p>
                  </div>
              </div>
              <div class="new-title">
                  <h2>'.$row['tour_name'].'</h2>
              </div>
              <div class="new-note">
                  <div class="new-avt">
                      <img src="Update/IMG_Travel/'.$row['tour_images']
                      .'" alt="">
                  </div>    
                  <p>
                      Địa điểm <span>'.$row['diadiem'].'</span> '.$row['ngaykhoihanh'].' <span>'.$row['tour_price'].'</span> 
                  </p>
              </div>
              <div class="new-content">
                  <p>
                     '.$row['tieude'].'
                  </p>
              </div>
              <div class="new-link">
                  <a href="index.php?Controller=datve&Action=booking&id='.$row['tour_id'].'">Đặt Vé</a>
              </div>
          </div>
              
              ';
            }
          
          ?>
        </div>
    </main>