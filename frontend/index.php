<?php 
  include 'parts/header.php'; 
  include '..\class\productClass.php';
  $productClass = new productClass;

?>

<?php
  $selectAll = $productClass -> select_product_all();
?>
<body>
    <header>
        <div class="container">
            <div class="row-flex">
                <div class="header-logo">
                    <img src="asset/logo/logo.png" alt="Không thể tải ảnh">
                </div>
                <div class="menu-mobile">
                    <i class="ri-menu-line"></i>
                </div>
                <div class="header-logo-mobile">
                    <img src="asset/logo/logo - Copy.png" alt="Không thể tải ảnh">
                </div>
                <div class="header-nav">
                    <nav>
                        <ul>
                            <li><a href="source/product.html">SẢN PHẨM</a></li>
                            <li><a href="source/collection.html">BỘ SƯU TẬP</a></li>
                            <li><a href="source/sale_off.html">SALE OFF</a></li>
                            <li><a href="source/about_us.html">ABOUT US</a></li>
                            <li><a href="source/contact.html">LIÊN HỆ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-search">
                        <input class="header-search-input" type="text" placeholder="Tìm kiếm">
                        <i class="ri-search-line"></i>
                </div>
                <div class="user">
                    <i class="ri-user-line" name="user"></i>
                </div>
                    <div class="header-cart">
                        <i class="ri-shopping-cart-2-fill" number="0"></i>
                    </div>
                </div>
            </div>
        </div>
    </header> 
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
            <div class="best-seller-items">
                <img src="logo/10f22ttoa002_blue-ao-tanktop_1.png" alt="">
                <p>Áo tank top xanh dương</p>
                <span>100% cotton</span>
                <div class="price">
                    <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                </div>
            </div> 
            
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
     <footer>
        <?php
        include 'parts/footer.php'
        ?>
     </footer>
</body>
</html>
