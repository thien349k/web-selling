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
    return $result;
  }
}