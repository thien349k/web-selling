<?php
    include('parts/header.php');

  
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


<link rel="stylesheet" href="asset/css/stylecarts.css">
<main>
        <section class="cart p-to-top">
          <div class="container">
            <div class="row-flex">
              <div class="cart-items">
                <p class="heading-text">Giỏ Hàng</p>
                
              </div>
              <form action="" method="POST" enctype="multipart/form-data">
                </div>
                  <div class="row-grid">
                      <div class="cart-left row-grid">
                          <h2 class="main-h2">Giỏ hàng</h2><br>
                          <?php
                          ?>
                          <section class="best-seller">
                          
                          <div class="containers ">
                            <h1>Shopping Cart</h1>
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
                            <div class="total">
                                <h2>Tổng: <?php echo number_format($s);?><sup>đ</sup></h2>
                            </div>
                            <div style="clear: both;"></div>
                            <?php
                              if(isset($_SESSION['dangnhap'])){
                            ?>
                              <a href="payment.php?detailId=cart_detail"><input class="checkout-btn" name="submit" value="thanh toán"></input></a>
                            <?php  
                              }else{
                            ?>
                              <a href="logins.php"><input class="checkout-btn" name="submit" value="Bạn chưa đăng ký"></input></a>
                            <?php
                              }
                            ?>
                          </div>
                        </form>
                        </section>
                      </div>
                  </div>
            </div>
        </section>
    </main>
<?php
    include('parts/footer.php')
?>