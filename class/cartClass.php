<?php
include '..\lib\dbcart.php';

class cart {
  public $dbcart;
  public function __construct() {
    $this->dbcart = new dbcart;
  }


  public function add_to_cart($data, $id){
    $id = $id;
    $quantity = $data['quantity'];
    $sql_select = "SELECT * FROM products WHERE id = '$id'";
    $result_select = $this -> dbcart -> select($sql_select)->fetch_assoc();
    $name = $result_select['name'];
    $price_sale = $result_select['price_sale'];
    $image = $result_select['image'];
    $sql = "INSERT INTO carts SET
    id = '$id',
    name = '$name',
    quantity = '$quantity',
    price_sale = '$price_sale',
    image = '$image'";

    $result = $this -> dbcart -> insert($sql);
    if($result){
      header('location:' . 'cart.php');
    } else {
      $alert = 'không thành công';
    }
    return $result;
  }
  public function get_product_to_cart(){
    $sql = "SELECT * FROM carts";
    $result = $this -> dbcart -> select($sql);
    return $result;
  }
  
  public function del_product_to_cart($id){
    $sql = "DELETE FROM carts WHERE id = '$id'";
    $result = $this -> dbcart -> delete($sql);
    if($result){
      header('location:' . 'cart.php');
    } else {
      $alert = 'không thành công';
    }
    return $alert;
  }
  public function saveCartIdsToSession() {
    $sql = "SELECT cartId FROM carts";
    $result = $this->dbcart->select($sql);

    $cartIds = [];
    while ($row = $result->fetch_assoc()) {
        $cartIds[] = $row['cartId'];
    }

    $_SESSION['cartIds'] = $cartIds;
}

public function get_info_detail($cusId, $cartIds) {
  // Chuyển đổi mảng cartIds thành chuỗi
  $cartIdsString = implode(',', array_map('intval', $cartIds));

  // Lấy thông tin từ bảng carts
  $sql_select = "SELECT * FROM carts WHERE cartId IN ($cartIdsString)";
  $result_select = $this->dbcart->select($sql_select);

  // Kiểm tra nếu có kết quả
  if ($result_select) {
      while ($row = $result_select->fetch_assoc()) {
          $name = $row['name'];
          $price_sale = $row['price_sale'];
          $quantity = $row['quantity'];
          $tong = $price_sale* $quantity;
      
          // Chèn thông tin vào bảng cart_detail
          $sql = "INSERT INTO cart_detail (name, price_sale, quantity, cusId, status) VALUES ('$name', '$tong', '$quantity', '$cusId', '1')";
          $result = $this->dbcart->insert($sql);
      
          if ($result) {
              $alert = "Đặt hàng thành công";
          } else {
              $alert = "Đặt hàng không thành công";
          }
      }
  } else {
      $alert = "Không tìm thấy sản phẩm nào";
  }

  return $alert;
} 
    public function del_all_info_detail($cartIds){
      $cartIdsString = implode(',', array_map('intval', $cartIds));
      $sql = "DELETE FROM carts WHERE cartId IN ($cartIdsString)";
      $result = $this->dbcart->delete($sql);
      return $result;

    }

    public function get_info_detail_admin(){
      $sql = "SELECT * FROM cart_detail";
      $result = $this -> dbcart -> select($sql);
      return $result;
    }
    public function get_info_detail_cus($cusId){
      $sql = "SELECT * FROM cart_detail  WHERE cusId = '$cusId'";
      $result = $this -> dbcart -> select($sql);
      return $result;
    }

}