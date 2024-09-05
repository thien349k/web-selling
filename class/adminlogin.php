<?php
include '..\lib\dbad.php';

class adminlogin {
  public $dbbill;

  public function __construct() {
    $this->dbbill = new dbbill;

  }

  public function login_admin($taikhoan, $matkhau) {
    $taikhoan =$taikhoan;
    $matkhau = $matkhau;
    $sql = "SELECT * FROM admin WHERE username = '$taikhoan' AND password = '$matkhau' LIMIT 1";
    
    $result = $this->dbbill->select($sql);
    $row = $result->fetch_assoc();
    
    if ($row) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location: index.php");
    } else {
        echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu")</script>';

    }
}

}