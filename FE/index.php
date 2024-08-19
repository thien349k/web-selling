<?php
    include('parts/header.php');
?>
<link rel="stylesheet" href="asset/css/style.css">
<!-- slide -->
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
    <!-- best seller -->
    <section class="best-seller">
        <div class="container">
            <div class="row-grid">
                <p class="heading-text">BEST SELLER</p>
            </div>
            <div class="row-grid row-grid-best-seller">
                <div class="best-seller-items">
                    <img src="asset/logo/product.png" alt="">
                    <p>Áo tank top xanh dương</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div> 
                <div class="best-seller-items">    
                    <img src="asset/logo/product2.png" alt="">
                    <p>T-shirt black</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>    
                <div class="best-seller-items">
                    <img src="asset/logo/product3.png" alt="">
                    <p>Áo tank top</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>
                <div class="best-seller-items">
                    <img src="asset/logo/product4.png" alt="">
                    <p>Polo zip</p>
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
                    <img src="asset/logo/product.png" alt="">
                    <p>Áo tank top xanh dương</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div> 
                <div class="collection-items">    
                    <img src="asset/logo/product2.png" alt="">
                    <p>T-shirt black</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>    
                <div class="collection-items">
                    <img src="asset/logo/product3.png" alt="">
                    <p>Áo tank top</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>
                <div class="collection-items">
                    <img src="asset/logo/product4.png" alt="">
                    <p>Polo zip</p>
                    <span>100% cotton</span>
                    <div class="price">
                        <p>99.000<sup>đ</sup></p><span>149.000<sup>đ</sup></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Modal Structure -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modalImage" src="" alt="Product Image">
            <p id="modalName"></p>
            <span id="modalDescription"></span>
            <div class="price">
                <p id="modalPrice"></p><span id="modalOldPrice"></span>
            </div>
            <div class="quantity">
                <label for="modalQuantity">Choose quantity:</label>
                <input type="number" id="modalQuantity" name="quantity" min="1" value="1">
            </div>
            <div class="buy"><button style=" padding: 25px; background-color: black; color: white;" class="add-to-cart">Thêm vào giỏ hàng</button></div>
        </div>
    </div>
    <!-- footer -->
<?php
    include('parts/footer.php')
?>