<?php
  include '../class/signupClass.php';
  

?>
<?php
  session_start();
  $signup = new signupClass;
  if(isset($_POST['dangky'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $signup_cus = $signup -> signup_cus($name, $email, $address, $password, $phone);
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
            <div class="col-12 text-login">Sign Up</div>

            <!-- Username Field -->
            <div class="col-12 form-group login-input">
              <label for="username"></label>
              <div class="custom-input-user">
                <input
                  type="text"
                  id="username"
                  class="form-control"
                  placeholder="Enter your username"
                  name="name"
                />
                <span><i class="fas fa-user"></i></span>
              </div>
            </div>

            <!-- Email Field -->
            <div class="col-12 form-group login-input">
              <label for="email"></label>
              <div class="custom-input-email">
                <input
                  type="email"
                  id="email"
                  class="form-control"
                  placeholder="Enter your email"
                  name="email"
                />
                <span><i class="fas fa-envelope"></i></span>
              </div>
            </div>

            <!-- Phone Field -->
            <div class="col-12 form-group login-input">
              <label for="phone"></label>
              <div class="custom-input-phone">
                <input
                  type="tel"
                  id="phone"
                  class="form-control"
                  placeholder="Enter your phone number"
                  name="phone"
                />
                <span><i class="fas fa-phone"></i></span>
              </div>
            </div>
            <!-- address Field -->
            <div class="col-12 form-group login-input">
              <label for="address"></label>
              <div class="custom-input-address">
                <input
                  type="tel"
                  id="address"
                  class="form-control"
                  placeholder="Enter your address number"
                  name="address"
                />
                <span><i class="far fa-address-card"></i></span>
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
                <span><i class="fas fa-lock"></i></span>
              </div>
            </div>

            <div class="col-12">
              <button type="submit" name="dangky" class="btn-login">Sign Up</button>
            </div>
            <div class="col-12 text-center mt-3">
              <a href="logins.php" class="text-other-login">Login</a>
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
