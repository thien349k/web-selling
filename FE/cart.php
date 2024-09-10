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
<?php
// Other PHP code...

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $quantity = intval($_POST['quantity']);
    
    $update_result = $cart->update_cart($id, $quantity);
    if ($update_result) {
        header('Location: cart.php');
        exit(); // Ensure the script stops executing after redirect
    } else {
        echo 'Update failed.';
    }
}

// Existing code to handle deletion and display...
?>
<link rel="stylesheet" href="asset/css/stylepro.css">
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
          <p class="heading-text">Giỏ hàng</p>
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
                            <h1></h1><br>
                            <div class="cart">
                  
                            <?php
                              $total=0;
                              if($get_product_to_cart){
                                while ($result = $get_product_to_cart->fetch_assoc()) {
                                    $price = number_format($result['price_sale']);
                                    $itemTotal = $result['price_sale'] * $result['quantity'];
                                    $total += $itemTotal;
                                ?>
                                    <div class="cart-item">
                                        <img src="<?php echo htmlspecialchars($result['image']); ?>" alt="Product Image" class="item-image">
                                        <div class="item-details">
                                            <h3><?php echo htmlspecialchars($result['name']); ?></h3>
                                            <p>Giá: <?php echo $price; ?><sup>đ</sup></p>
                                        </div>
                                        <form action="cart.php" method="POST" class="item-actions">
                                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($result['id']); ?>">
                                            <input type="number" name="quantity" min="1" value="<?php echo htmlspecialchars($result['quantity']); ?>" class="item-quantity">
                                            <button type="submit" name="update" class="edit-btn">Sửa</button>
                                            <a href="?id=<?php echo $result['id']; ?>"><button type="button" class="remove-btn">Xóa</button></a>
                                        </form>
                                    </div>
                               
                            <?php
                              }
                            }
                            ?>
                            </div>
                            
                          </section>
                          
                          
                        </div>
                        <div id="pay">
                        <div class="total">
                              <h2>Tổng: <?php echo number_format($total);?><sup>đ</sup></h2>
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
