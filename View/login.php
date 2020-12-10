<style>
/* form */
main.form{
  width: 100%;
  height: calc(100vh - 5vmax);
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url(IMG/dac-duy-dbm6qjNeFo8-unsplash.jpg);
  background-position: center center;
  background-size: cover;
}

main.form form{
  width: 50vmax;
  background-color: white;
  padding: 1vmax;
  display: flex;
  flex-wrap: wrap;
}

.form-title{
  width: 100%;
  margin-bottom: 1vmax;
}

.form-title h2{
  font-size: 1.5vmax;
}

.form-left{
  width: 35%;
  height: 100%;
}

.form-right{
  width: 65%;
  height: 100%;
  padding: 1vmax;
  padding-top: 2.1vmax;
}

.form-right a{
  display: block;
  font-size: 1vmax;
  font-weight: 700;
  text-align: right;
  color: #999;
}

.form-left p{
  font-size: 1vmax;
  font-weight: 500;
  margin-bottom: 1vmax;
}

.form-left button{
  width: 100%;
  border: none;
  outline: none;
  cursor: pointer;
}

.form-left a,
.form-left button{
  text-align: center;
  display: block;
  padding: .8vmax;
  color: white;
  font-size: 1.2vmax;
  font-weight: 700;
  border-radius: .2vmax;
  margin-bottom: 1vmax;
}

.form-left a i,
.form-left button i{
  margin-right: 1vmax;
}

.form-left a:first-of-type,
.form-left button:first-of-type{
  background-color: #44619D;
}

.form-left a:last-of-type,
.form-left button:last-of-type{
  background-color: #EA4235;
}

.textb{
  margin-bottom: 1vmax;
  position: relative;
}

.textb input{
  width: 100%;
  height: 3vmax;
  border: none;
  background-color: #ededed;
  border-radius: .2vmax;
  color: #333;
  font-size: 1vmax;
  font-weight: 700;
  padding: 1vmax 1vmax .5vmax .5vmax;
  outline: none;
}

.placeholder{
  text-transform: uppercase;
  font-size: .8vmax;
  font-weight: 700;
  position: absolute;
  line-height: 3vmax;
  top: 0;
  left: 1vmax;
  color: #9d9d9d;
  user-select: none;
  pointer-events: none;
}

.show-password{
  position: absolute;
  right: 1vmax;
  line-height: 3vmax;
  color: #9d9d9d;
  font-size: 1vmax;
  cursor: pointer;
}

.textb input:focus ~ .placeholder,
.textb input:valid ~ .placeholder{
  left: .8vmax;
  top: -.8vmax;
}

.form-end{
  width: 100%;
  min-height: 2vmax;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.form-end p{
  font-size: .9vmax;
  font-weight: 700;
  color: #999;
}

.form-end a{
  color: #F47540;
}

.form-end input{
  border: none;
  outline: none;
  width: 60%;
  height: 100%;
  font-size: 1vmax;
  color: white;
  font-weight: 700;
  background-color: #F47540;
  padding: 1vmax;
  margin: 0 1vmax;
  cursor: pointer;
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
<main class="form">
        <form action="">
            <div class="form-title">
                <h2>Đăng nhập</h2>
            </div>
            <div class="form-left">
                <p>Đăng nhập với</p>
                <!-- <button type="submit" onclick="checkLoginState();"><i class="fab fa-facebook-f"></i>Facebook</button>
                <button type="submit"><i class="fab fa-google"></i>Google</button> -->
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-google"></i>Google</a>
            </div>
            <div class="form-right">
                <div class="textb">
                    <input type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <div class="placeholder">Email</div>
                  </div>
                  <div class="textb">
                    <input type="password" required>
                    <div class="placeholder">Password</div>
                    <div class="show-password fas fa-eye-slash"></div>
                  </div>
                  <a href="">Quên mật khẩu</a>
            </div>
            <div class="form-end">
                <p>Bạn chưa có tài khoản?<a href="">Đăng ký</a></p>
                <input type="submit" value="Đăng nhập">
            </div>
            <script>
                var fields = document.querySelectorAll(".textb input");
                    fields[0].addEventListener("keyup", check);
                    fields[1].addEventListener("keyup", check);
                    document.querySelector(".show-password").addEventListener("click", function () {
                        if (this.classList[2] == "fa-eye-slash") {
                            this.classList.remove("fa-eye-slash");
                            this.classList.add("fa-eye");
                            fields[1].type = "text";
                        } else {
                            this.classList.remove("fa-eye");
                            this.classList.add("fa-eye-slash");
                            fields[1].type = "password";
                        }
                    });
            </script>
        </form>
    </main>