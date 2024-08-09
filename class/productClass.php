<?php
include 'lib\database.php';


class productClass {
  public $Database;
  public function __construct() {
    $this->Database = new Database;
  }

  public function insert_product($data) {
    $name = $data['name'];
    $material = $data['material'];
    $price_normal = $data['price_normal'];
    $price_sale = $data['price_sale'];
    $description = $data['description'];
    $content = $data['content'];
    $image = $data['image'];
    $images = $data['images'];
    $images_str = implode("*", $images);
    
    $sql = "INSERT INTO products (name, material, price_normal, price_sale, description, content, image, images)
    VALUES ('$name ', '$material', '$price_normal', '$price_sale', '$description', '$content', '$image', '$images_str')";
    $result = $this -> Database -> insert($sql);
    header('location:' . 'product_list.php');
    return $result;
  }
  public function select_product_all(){
    $sql = "SELECT * FROM products";
    $result = $this -> Database -> selectAll($sql);
    return $result;
  }
  public function select_product($id){
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = $this -> Database -> select($sql) ->fetch_assoc();
    return $result;
  }
  public function update_product($data, $id){
    $name = $data['name'];
    $material = $data['material'];
    $price_normal = $data['price_normal'];
    $price_sale = $data['price_sale'];
    $description = $data['description'];
    $content = $data['content'];
    $image = $data['image'];
    $images = $data['images'];
    $images_str = implode("*", $images);
    $sql = "UPDATE products SET 
    name='$name',
    material='$material', 
    price_normal='$price_normal', 
    price_sale='$price_sale', 
    description='$description', 
    content='$content', 
    image='$image',
    images='$images_str'
    WHERE id=$id";
    $result = $this -> Database -> update($sql);
    header('location:' . 'product_list.php');
  }
  public function delete_product($id){
    $sql = "DELETE FROM products WHERE id=$id";
    $result = $this -> Database -> delete($sql);
    return $result;
  }
  
}