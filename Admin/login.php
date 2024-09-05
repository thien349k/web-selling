<?php
 session_start();
 include '../class/adminlogin.php';
 $admin = new adminlogin;

 if(isset($_POST['dangnhap'])){
  $taikhoan = $_POST['username'];
  $matkhau = $_POST['password'];
  $login_admin = $admin -> login_admin($taikhoan, $matkhau);
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
          <td colspan="2"><h3>đăng nhập admin</h3></td>
        </tr>
        <tr>
          <td>tài khoản</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>mật khẩu</td>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>