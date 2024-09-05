<?php
include '..\lib\dbdetail.php';

class detail {
  public $dbdetail;
  public function __construct() {
    $this->dbdetail = new dbdetail;
  }
  public function detailId_for_cus($detailId, $name, $cusId, $date, $quantity){
    $sql = "UPDATE cart_detail SET status = '2' 
            WHERE detailId = '$detailId' 
            AND name = '$name' 
            AND cusId = '$cusId' 
            AND date = '$date' 
            AND quantity = '$quantity'";
    
    $result = $this->dbdetail->update($sql);
    
    header("Location: order_list.php");
    return $result;
  }
  public function getedId_for_cus($getedId, $name, $cusId, $date, $quantity){
    $sql = "UPDATE cart_detail SET status = '3' 
            WHERE detailId = '$getedId' 
            AND name = '$name' 
            AND cusId = '$cusId' 
            AND date = '$date' 
            AND quantity = '$quantity'";
    
    $result = $this->dbdetail->update($sql);
    
    header("Location: order.php");
    return $result;
  }
  // public function del_for_cus($delId, $name, $cusId, $date, $quantity){
  //   $sql = "DELETE FROM cart_detail 
  //       WHERE detailId = '$delId' 
  //       AND name = '$name' 
  //       AND cusId = '$cusId' 
  //       AND date = '$date' 
  //       AND quantity = '$quantity'";
    
  //   $result = $this->dbdetail->delete($sql);
  //   if ($result) {
  //     echo "Đặt hàng thành công";
  //     header("Location: order_list.php");
  //   } else {
  //       echo "Đặt hàng không thành công";
  //   }
    
  // }
  public function del_for_cus($delId, $name, $cusId, $date, $quantity) {
    $sql = "DELETE FROM cart_detail 
            WHERE detailId = '$delId' 
            AND name = '$name' 
            AND cusId = '$cusId' 
            AND date = '$date' 
            AND quantity = '$quantity'";
    
    $result = $this->dbdetail->delete($sql);

    if ($result) {
        // In ra mã JavaScript để hiển thị alert và sau đó chuyển hướng
        echo "<script type='text/javascript'>
                alert('Xóa thành công');
                window.location.href = 'order_list.php';
              </script>";
    } else {
        // Nếu xóa không thành công, thông báo lỗi
        echo "<script type='text/javascript'>
                alert('Xóa không thành công');
              </script>";
    }
}
public function successId_for_cus($successId, $name, $cusId, $date, $quantity){
  $sql = "UPDATE cart_detail SET status = '3' 
          WHERE detailId = '$successId' 
          AND name = '$name' 
          AND cusId = '$cusId' 
          AND date = '$date' 
          AND quantity = '$quantity'";
  
  $result = $this->dbdetail->update($sql);
  
  header("Location: order.php");
  return $result;
}
}