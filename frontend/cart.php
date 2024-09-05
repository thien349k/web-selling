<?php 
  include ('parts/header.php'); 
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
<style>

.containers {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.cart {
    margin: 20px 0;
}

.cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.item-details h3 {
    margin: 0;
    font-size: 18px;
    color: #555;
}

.item-details p {
    margin: 5px 0 0;
    color: #777;
}

.item-actions {
    display: flex;
    align-items: center;
}

.item-quantity {
    width: 50px;
    padding: 5px;
    margin-right: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
}

.remove-btn {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 3px;
}

.remove-btn:hover {
    background-color: #c0392b;
}

.total {
    text-align: right;
    margin-top: 20px;
}

.total h2 {
    margin: 0;
    color: #333;
}

.checkout-btn {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #27ae60;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 3px;
    text-align: center;
    font-size: 18px;
    margin-top: 20px;
}

.checkout-btn:hover {
    background-color: #2ecc71;
}
.item-image {
    width: 70px;
    object-fit: cover;
    margin-right: 20px;
}
.item-number {
    margin-right: -150px;
}
</style>
<section class="slider">
        <div class="slide-items">
            <div class="slide">
                <img src="asset/logo/Active_Wear_-_In_Motion_-_Deskto.png" alt="khong the mo anh">
            </div>
            <div class="slide">
                <img src="asset/logo/Coffee_Lovers_3_-_desktop_jpg.png" alt="khong the mo anh">
            </div>
            <div class="slide">
                <img src="asset/logo/Polo_Pemium__jpg.png" alt="khong the mo anh">
            </div>            
        </div>
        <div class="slide_arrow">
            <i class="ri-arrow-left-circle-line"></i>
            <i class="ri-arrow-right-circle-line"></i>
</section>
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
                <p>Price: <?php echo $tong = number_format($result['price_sale']*$result['quantity']);?><sup>đ</sup>
                <input type="hidden" value="<?php echo $tong = $result['price_sale']*$result['quantity'];?>">
            </div>
            <div class="item-actions">
                <input type="number" value="<?php echo $result['quantity'];?>" class="item-quantity">
                <a href="?id=<?php echo $result['id'];?>"><button class="remove-btn">Remove</button></a>
            </div>
          </div>


      <?php
        $s =$s+$tong;
        }
      }
      ?>
      </div>

      <div class="total">
          <h2>Total: <?php echo number_format($s);?></h2>
      </div>
      <a href="payment.php"><button class="checkout-btn">Checkout</button></a>
    </div>
  </section>
<?php
        include 'parts/footer.php'
?>