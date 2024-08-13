<?php 
  include ('parts/header.php'); 
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

h1, h2 {
    text-align: center;
    color: #333;
}

.order-summary {
    margin-bottom: 20px;
}

.summary-item, .summary-total {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.summary-total {
    font-weight: bold;
}

.checkout-form {
    display: flex;
    flex-direction: column;
}

.checkout-form label {
    margin-top: 10px;
    font-weight: bold;
}

.checkout-form input {
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 3px;
    width: 100%;
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
  <div class="containers">
        <h1>Checkout</h1>
        
        <div class="order-summary">
            <h2>Order Summary</h2>
            <div class="summary-item">
                <span>Product Name</span>
                <span>$10.00</span>
            </div>
            <div class="summary-item">
                <span>Another Product</span>
                <span>$15.00</span>
            </div>
            <div class="summary-total">
                <span>Total</span>
                <span>$25.00</span>
            </div>
        </div>

        <form class="checkout-form">
            <h2>Billing Details</h2>
            
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Shipping Address</label>
            <input type="text" id="address" name="address" required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" required>

            <label for="zip">ZIP Code</label>
            <input type="text" id="zip" name="zip" required>

            <label for="card">Credit Card Number</label>
            <input type="text" id="card" name="card" required>

            <label for="exp-date">Expiration Date</label>
            <input type="text" id="exp-date" name="exp-date" placeholder="MM/YY" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" required>

            <button type="submit" class="checkout-btn">Place Order</button>
        </form>
    </div>
</section>
<?php
    include 'parts/footer.php'
?>