<main class="contact">
    <style>
        main.contact{
  width: 100%;
  padding: 3vmax;
  background-image: url(IMG/krisztian-tabori-KJ1ida5X2hg-unsplash.jpg);
  background-position: center center;
  background-size: cover;
}

main.contact form{
  background-color: rgba(245, 245, 245, 0.7);
  display: flex;
  flex-wrap: wrap;
  padding: 1vmax;
  padding-top: 3vmax;
  justify-content: space-between;
}

main.contact form h2{
  width: 100%;
  text-align: center;
  font-size: 1.5vmax;
  color: #df2e1b;
}

main.contact form>p{
  width: 100%;
  text-align: center;
  font-size: .9vmax;
  margin: .5vmax 0;
}

.gr-ip-cu-1{
  width: 30%;
}

.gr-ip-cu-2{
  width: 100%;
}

.ip-cu{
  width: 100%;
  border: none;
  outline: none;
  border: .15vmax solid #999;
  border-radius: .2vmax;
  padding: .3vmax;
  font-size: .8vmax;
}

.gr-ip-cu p{
  font-weight: 600;
  font-size: .9vmax;
  margin: .4vmax 0;
  margin-top: 1vmax;
}

.gr-ip-cu p span{
  color: #df2e1b;
}

.sub-cu{
  width: 100%;
  text-align: center;
  padding: 1vmax;
}

.sub-cu input[type="submit"]{
  padding: .4vmax 1vmax;
  font-size: .9vmax;
  font-weight: 600;
  color: white;
  background-color: #df2e1b;
  border: none;
  outline: none;
  border-radius: .2vmax;
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
        <div class="boxcenter">
            <form action="">
                <h2>LIÊN HỆ</h2>
                <p>
                    Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của quý vị
                    một cách nhanh chóng xin vui lòng liên hệ 
                </p>
                <div class="gr-ip-cu gr-ip-cu-1">
                    <p>Loại thông tin (<span>*</span>)</p>
                    <select name="" id="" class="ip-cu" required>
                        <option value="">Du lịch</option>
                        <option value="">Du lịch</option>
                    </select>
                </div>
                <div class="gr-ip-cu gr-ip-cu-1">
                    <p>Họ và tên (<span>*</span>)</p>
                    <input type="text" required class="ip-cu">
                </div>
                <div class="gr-ip-cu gr-ip-cu-1">
                    <p>Email (<span>*</span>)</p>
                    <input type="email" class="ip-cu" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <div class="gr-ip-cu gr-ip-cu-1">
                    <p>Điện thoại (<span>*</span>)</p>
                    <input type="tel" required pattern="((09|03|07|08|05)+([0-9]{8})\b)" class="ip-cu">
                </div>
                <div class="gr-ip-cu gr-ip-cu-1">
                    <p>Tên công ty</p>
                    <input type="text" required class="ip-cu">
                </div>
                <div class="gr-ip-cu gr-ip-cu-1">
                    <p>Số khách</p>
                    <input type="number" required class="ip-cu">
                </div>
                <div class="gr-ip-cu gr-ip-cu-2">
                    <p>Địa chỉ</p>
                    <input type="text" required class="ip-cu">
                </div>
                <div class="gr-ip-cu gr-ip-cu-2">
                    <p>Tiêu đề (<span>*</span>)</p>
                    <input type="text" required class="ip-cu">
                </div>
                <div class="gr-ip-cu gr-ip-cu-2">
                    <p>Nội dung (<span>*</span>)</p>
                    <textarea required class="ip-cu" cols="30" rows="10"></textarea>
                </div>
                <div class="sub-cu">
                    <input type="submit" value="Gửi đi">
                </div>
            </form>
        </div>
    </main>