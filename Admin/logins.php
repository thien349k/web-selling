<?php
  include '../class/adminlogin.php';
  
?>
<?php
 session_start();
 $admin = new adminlogin;

 if(isset($_POST['dangnhap'])){
  $taikhoan = $_POST['username'];
  $matkhau = $_POST['password'];
  $login_admin = $admin -> login_admin($taikhoan, $matkhau);
 }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="asset/css/Login.css" />
    <title>Login Page</title>
  </head>
  <body>
    <form action="" method="post">
      <div class="login-background">
        <div class="login-container">
          <div class="login-content row">
            <div class="col-12 text-login">Login</div>

            <!-- Username Field -->
            <div class="col-12 form-group login-input">
              <label for="username"></label>
              <div class="custom-input-user">
                <input
                  type="text"
                  id="username"
                  class="form-control"
                  placeholder="Enter your username"
                  name="username"
                />
                <span>
                  <i class="fas fa-user"></i>
                </span>
              </div>
            </div>

            <!-- Password Field -->
            <div class="col-12 form-group login-input">
              <label for="password"></label>
              <div class="custom-input-password">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  placeholder="Enter your password"
                  name="password"
                />
                <span>
                  <i class="fas fa-lock"></i>
                </span>
              </div>
            </div>

            <div class="col-12">
              <button class="btn-login" name="dangnhap">Login</button>
            </div>

            <div class="col-12">
              <span class="forgot-password">Forgot your password?</span>
            </div>

            <div class="col-12 text-center mt-3">
              <span class="text-other-login">Or login with</span>
            </div>

            <div class="col-12 social-login">
              <i class="fab fa-google-plus-g google"></i>
              <i class="fab fa-facebook-f facebook"></i>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
