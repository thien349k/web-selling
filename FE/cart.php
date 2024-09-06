<?php
  include('parts/header.php');
?>
<?php

$cartIds = $_SESSION['cartIds'];
?>
<?php
  if(!isset($_GET['id']) || ($_GET['id'] == NULL)){

  } else {
    $id = $_GET['id'];
    $del_product_to_cart = $cart ->del_product_to_cart($id);
  }
?>

<?php

  $get_product_to_cart = $cart -> get_product_to_cart();
?>

<link rel="stylesheet" href="asset/css/stylepro.css">

<main>
  <section class="product-list">
    <div class="container">
      <div class="row-flex">
        <div class="heading-items">
          <p class="heading-text">Chi tiết sản phẩm</p>
        </div>
        
          
        </div>
      </div>
      <div class="row-grid">
                      <div class="cart-left row-grid">
                          <h2 class="main-h2"></h2><br>
                          <?php
                          ?>
                          <section class="best-seller">
                          
                          <div class="containers ">
                            <h1>Shopping Cart</h1><br>
                            <div class="cart">
                  
                            <?php
        $s=0;
        if($get_product_to_cart){
          while ($result = $get_product_to_cart -> fetch_assoc()) {
            
        
      ?>
                                <div class="cart-item">
                                  <img src="<?php echo $result['image'];?>" alt="Product Image" class="item-image">
                                  <div class="item-details">
                                      <h3><?php echo $result['name'];?></h3>
                                      <p>Giá: <?php echo $tong = number_format($result['price_sale']*$result['quantity']);?><sup>đ</sup>
                                      <input type="hidden" value="<?php echo $tong = $result['price_sale']*$result['quantity'];?>">
                                  </div>
                                  <div class="item-actions">
                                      <input type="number" value="<?php echo $result['quantity'];?>" class="item-quantity">
                                      <a href="?id=<?php echo $result['id'];?>"><button class="remove-btn">Xóa</button></a>
                                  </div>
                                </div>


                            <?php
                              $s =$s+$tong;
                              }
                            }
                            ?>
                            </div>
                            
                          </section>
                          
                          
                        </div>
                        <div id="pay">
                        <div class="total">
                              <h2>Tổng: <?php echo number_format($s);?><sup>đ</sup></h2>
                          </div> <br>
                        <div style="clear: both;"></div>
                            <?php
                              if(isset($_SESSION['dangnhap'])){
                            ?>
                              <a href="payment.php"><input class="checkout-btn" name="submit" value="thanh toán"></input></a>
                            <?php  
                              }else{
                            ?>
                              <a href="logins.php"><input class="checkout-btn" name="submit" value="Bạn chưa đăng ký"></input></a>
                            <?php
                              }
                            ?>
                          </div>
                        </div>
                  </div>
    </div>
  </section>
</main>
<!-- Modal Structure -->

<!-- footer -->
<?php
    include ('parts/footer.php');
?>
