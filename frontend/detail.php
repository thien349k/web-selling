<?php 
    include ('parts/header.php'); 
?>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $get_product = $productClass -> select_product($id);
  }
?>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_GET['id'];
    $data = $_POST;
    $add_to_cart = $cart -> add_to_cart($data, $id);
}
?>

    <!-- slide -->
     <head>
      <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container1 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
        }

        .product-info {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }

        .product-info h1 {
            margin-top: 0;
        }

        .product-info p {
            margin-bottom: 10px;
        }

        .product-info input {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }
      </style>
     </head>
    <section class="slider">
        
    </section>
    <section class="best-seller">
        <div class="container1">
            <div class="product-image">
            <img src="<?php echo $get_product['image']?>" width="100px" alt="">
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="product-info">
                
                <h1><?php echo $get_product['name']?></h1>
                <p><?php echo $get_product['material']?></p>
                <p><?php echo number_format($get_product['price_sale']);?></p>
                <input type="number" name="quantity" value="1">
                <input type="submit" name="submit" value="Mua ngay"/>
            </div>
            <?php
                if(isset($add_to_cart)){
                    echo $add_to_cart;
                }
            ?>
        </form>
    </section>
<?php
        include 'parts/footer.php'
?>