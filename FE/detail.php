<?php
  include('parts/header.php');
?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $get_product = $productClass -> select_product($id);
  }
  echo $id;
?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_GET['id'];
    $data = $_POST;
    $add_to_cart = $cart -> add_to_cart($data, $id);
}
?>
<?php
  
?>
<link rel="stylesheet" href="asset/css/stylepro.css">
<link rel="stylesheet" href="asset/css/detail.css">
<section class="slider">
        <div class="slide-items">
            <div class="slide">
                <img src="asset/logo/BANNER1.png" alt="khong the mo anh">
            </div>
            <div class="slide">
                <img src="asset/logo/BANNER2.png" alt="khong the mo anh">
            </div>
            <div class="slide">
                <img src="asset/logo/BANNER3.png" alt="khong the mo anh">
            </div>            
        </div>
        <div class="slide_arrow">
            <i class="ri-arrow-left-circle-line"></i>
            <i class="ri-arrow-right-circle-line"></i>
        </div>
    </section>

<main>
  <section class="product-list">
    <div class="container">
      <div class="row-flex">
        <div class="heading-items">
          <p class="heading-text">Chi tiết sản phẩm</p>
        </div>
        <div class="heading-items">
          
        </div>
        

      </div>
    </div>
    <div class="product-detail">
        <div class="product-images">
            <img id="main-image" src="<?php echo $get_product['image']?>" alt="Sản phẩm chính">
            <?php
              $product_array = explode("*", $get_product['images']);
            ?>
            <div class="thumbnail-images">
              <?php
                foreach($product_array as $item){
              ?>
                <img src="<?php echo $item;?>" alt="Thumbnail 1" onclick="changeImage(this)">
              <?php
                }
              ?>
            </div>
        </div>
        <?php

?>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="product-info">
              <h1><?php echo $get_product['name'];?></h1>
              <p>Chất liệu: <?php echo $get_product['material']?></p>
              <p>Giá gốc: <span class="original-price"><?php echo number_format($get_product['price_normal']);?> VND</span></p>
              <p>Giá giảm: <span class="discounted-price"><?php echo number_format($get_product['price_sale']);?> VND</span></p>
              <p>Số lượng: <input type="number" name="quantity" min="1" value="1"></p>
              <p>Description: Đây là mô tả chi tiết sản phẩm.</p>
              <p>Content: Thông tin chi tiết về sản phẩm sẽ được cung cấp ở đây.</p>
              <input type="submit" class="add-to-cart" name="submit" value="Thêm vào giỏ hàng"/>
          </div>
          <?php
            if(isset($add_to_cart)){
                echo $add_to_cart;
            }
          ?>
        </form>

    </div>
  </section>
</main>
<!-- Modal Structure -->
<script>
  function changeImage(element) {
    document.getElementById('main-image').src = element.src;
  }
</script>

<!-- footer -->
<?php
    include ('parts/footer.php');
?>
