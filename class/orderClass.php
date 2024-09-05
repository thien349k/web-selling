<?php
include '..\lib\dborder.php';

class orderClass {
  public $dborder;
  public function __construct() {
    $this->dborder = new Database;
  }

  public function get_order(){
    $sql = "SELECT * FROM orders";
    $result = $this -> dborder -> select($sql);
    return $result;
  }
  public function calculate_total_order() {
    $sql = "SELECT SUM(quantity * price_sale) AS total_order FROM carts";
    $result = $this->dborder->select($sql);
    $row = $result->fetch_assoc();
    
    if ($row) {
      return $row['total_order'];
    } else {
      return 0; // Trường hợp giỏ hàng trống
    }
  }

  public function createOrder($orderName, $phone, $email, $address, $note, $total){
    $sql = "INSERT INTO orders (orderName, phone, email, address, note, total) VALUES ('$orderName', '$phone', '$email', '$address', '$note', '$total')";
    $result = $this -> dborder -> select($sql);
    return $result;
  }
  public function show_info(){
    $sql = "SELECT * FROM orders";
    $result = $this -> dborder -> selectAll($sql);
    return $result;
  }
}