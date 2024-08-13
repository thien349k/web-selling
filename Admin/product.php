<?php 
  include 'parts/header.php'; 
  include '../class/productClass.php';

  include ('../class/cartClass.php');
  $ct = new cart();
  $productClass = new productClass;


?>


<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST;
    $add_to_cart = $ct -> add_to_cart($data);
}
?>
  <body>
  <div>
    <div class="product-image">
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="product-info">
          <!-- <input type="text" name="cartId" placeholder="id"></input> -->
          <input type="text" name="name" placeholder="ten"></input>
          <input type="number" name="quantity" value="1">
          <input type="text" name="price_sale" placeholder="gia"></input>
          <input type="submit" name=submit value="Mua ngay"/>
        </div>
      </form>
  </div>
    <footer>
    <?php
      include 'parts/footer.php'
    ?>
    </footer>
    
  </body>
</html>
