<?php 
    include ('parts/header.php'); 
  
?>
<?php
    $show_product = $productClass -> select_product_all();
?>

    <!-- slide -->
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
        </div>
    </section>
    <!-- best seller -->
    <div>
    <section class="best-seller">
        <div class="container">
            <div class="row-grid">
                <p class="heading-text">BEST SELLER</p>
            </div>
            <div class="row-grid row-grid-best-seller">
            <!-- du lieu o day -->
            <?php
                while ($row = $show_product->fetch_assoc()) {
            ?>
            <div class="best-seller-items"">
                
                <a href="detail.php?id=<?php echo $row['id'];?>"><img src="<?php echo $row['image'];?>" alt=""></a>
                <p><?php echo $row['name'];?></p>

                <span><?php echo $row['material'];?></span>
                <div class="price"> 
                    <p><?php echo number_format($row['price_sale']);?><sup>đ</sup></p><span><?php echo number_format($row['price_normal']);?><sup>đ</sup></span>
                </div>
                
            </div> 
            <?php
                }
            ?>
            
            </div>
        </div>
    </section>
    <!-- bo suu tap -->
    <section class="collection">
        <div class="container">
            <div class="row-grid">
                <p class="heading-text">NEW COLLECTION</p>
            </div>
            <div class="row-grid row-grid-collection">
                <div class="collection-items">
                    <img src="asset/logo/10f22ttoa002_blue-ao-tanktop_1.png" alt="">
                    <p>Áo tank top xanh dương</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div> 
                <div class="collection-items">    
                    <img src="asset/logo/10f22tss018_black_1__1.png" alt="">
                    <p>T-shirt black</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>    
                <div class="collection-items">
                    <img src="asset/logo/10s23tto001_oxford_tan-ao-thun-b.png" alt="">
                    <p>Áo tank top</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>
                <div class="collection-items">
                    <img src="asset/logo/ao_polo_nam__10s23pol012.png" alt="">
                    <p>Polo zip</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
<?php
    include 'parts/footer.php'
?>
