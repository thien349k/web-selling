<?php
    // include ('lib\connect.php');
    include_once '../class/productClass.php';
    include_once ('../class/cartClass.php');

    $productClass = new productClass;
    $cart = new cart();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/add.css">
    <link rel="stylesheet" href="asset/css/stylecart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>TwoT | Thời trang</title>
</head>
<body>
<header>
  <div class="container">
      <div class="row-flex">
          <div class="header-logo">
              <a href="./index.php"><img src="asset/logo/logo.png" alt="Không thể tải ảnh"></a>
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
                  <a href="./cart.php"><i class="ri-shopping-cart-2-fill" number="0"></i></a>
              </div>
          </div>
      </div>
  </div>
  
</header> 