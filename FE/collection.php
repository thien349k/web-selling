<?php
  include('parts/header.php');
?>
<?php
  $show_product = $productClass -> select_product_all();
?>
<link rel="stylesheet" href="asset/css/stylepro.css">

<main>
  <section class="product-list">
    <div class="container">
      <div class="row-flex">
        <div class="heading-items">
          <p class="heading-text">Chi tiết sản phẩm</p>
        </div>
        <div class="heading-items">
          <i class="ri-equalizer-fill"></i>
          <select>
            <option value="default">Sắp xếp</option>
            <option value="MTH">Từ thấp đến cao</option>
            <option value="HTM">Từ cao đến thấp</option>
            <option value="NEW">Mới nhất</option>
            <option value="OLD">Cũ nhất</option>
          </select>
          
        </div>
      </div>
      <div class="row-grid">
        <div class="row-grid row-grid-product">
          <?php
            while ($result = $show_product->fetch_assoc()) {  
              if($result['status']==1){
            ?>
            <div class="product-items">
              <div class="product-thumb">
                <a href="detail.php?id=<?php echo $result['id'];?>"><img src="<?php echo $result['image'];?>" alt=""></a>
                <p><?php echo $result['name'];?></p>
                <span><?php echo $result['material'];?></span>
                <div class="price">
                  <p><?php echo number_format($result['price_sale']);?><sup>đ</sup></p>
                  <span><?php echo number_format($result['price_normal']);?><sup>đ</sup></span>
                </div>
              </div>
          </div>
          <?php
              }
            }
          ?>
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
