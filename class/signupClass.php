<?php
include '..\lib\dbsign.php';

class signupClass {
  public $dbsign;
  public function __construct() {
    $this->dbsign = new dbsign;
  }
  public function signup_cus($name, $email, $address, $password, $phone) {
    $sql = "INSERT INTO signup(name, email, address, password, phone) VALUE ('$name', '$email', '$address', '$password', '$phone')";
    $result = $this -> dbsign -> insert($sql);
    if($result){
      echo '<script>
      alert("Bạn đã đăng ký thành công");
    </script>';
    $_SESSION['dangky'] = $email;
    $_SESSION['cusId'] = mysqli_insert_id($this->dbsign->conn);

    header('Location:cart.php');
    }
  }
  public function login_user($email, $matkhau) {
    $email =$email;
    $matkhau = $matkhau;
    $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$matkhau' LIMIT 1";
    
    $result = $this->dbsign->select($sql);
    $row = $result->fetch_assoc();
    
    if ($row) {
        $_SESSION['dangnhap'] = $email;
        $_SESSION['cusId'] = $row['cusId'];

        
        header("Location: index.php");
    } else {
        echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu")</script>';

    }
  }
  public function select_info_all($cusId){
    $sql = "SELECT * FROM signup WHERE cusId='$cusId'";
    $result = $this->dbsign->select($sql);
    return $result;
  }
  
}