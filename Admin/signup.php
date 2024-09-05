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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <form action="" method="post">
      <table>
        <tr>
          <td colspan="2"><h3>đăng ky admin</h3></td>
        </tr>
        <tr>
          <td>Họ và tên</td>
          <td><input type="text" size="50" name="name"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" size="50" name="email"></td>
        </tr>
        <tr>
          <td>Điện thoại</td>
          <td><input type="text" size="50" name="phone"></td>
        </tr>
        <tr>
          <td>Địa chỉ</td>
          <td><input type="text" size="50" name="address"></td>
        </tr>
        <tr>
          <td>mật khẩu</td>
          <td><input type="text" size="50" name="password"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="dangky" value="dang ky"></td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>