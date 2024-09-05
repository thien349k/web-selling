<?php
    // include ('lib\connect.php');
    include_once ('../class/productClass.php');
    include_once ('../class/cartClass.php');
    include_once ('../class/orderClass.php');
    include_once ('../class/detailClass.php');
    include_once ('../class/signupClass.php');




    $productClass = new productClass;
    $cart = new cart();
    $order = new orderClass();
    $detail = new detail();
    $signup = new signupClass;
    session_start();
    $cart->saveCartIdsToSession();




?>
<?php
    $cusId = $_SESSION['cusId'];
?>

<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>TwoT | Thời trang</title>
</head>
<body>
    <header>
        <div class="header" id="myHeader">
            <div class="container">
                <div class="row-flex">
                    <div class="header-logo">
                        <a href="index.php" class="href"><img src="asset/logo/logo.png" alt="Không thể tải ảnh"></a>
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
                                <li><a href="product.php">SẢN PHẨM</a></li>
                                <li><a href="collection.php">BỘ SƯU TẬP</a></li>
                                <li><a href="sale_off.php">SALE OFF</a></li>
                                <li><a href="contact.php">LIÊN HỆ</a></li>
                                
                                <?php
                                    if(isset($_SESSION['dangnhap']) == false){
                                        echo '';
                                    }else echo '<li><a href="order.php">ĐƠN HÀNG</a></li>';
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-search">
                            <input class="header-search-input" type="text" placeholder="Tìm kiếm">
                            <i class="ri-search-line"></i>
                    </div>
                    <div class="user">
                       
                        <?php
                            if(isset($_SESSION['dangnhap'])){
                        ?>
                        <a href="index.php?dangxuat=1">Đăng xuất</a>
                        
                        <?php        
                            }else{
                        ?>
                         <a href="logins.php?dangnhap">Đăng nhap</a>
                        <?php
                        }
                        ?>
                    </div>
                        <div class="header-cart">
                            <a href="cart.php"><i class="ri-shopping-cart-2-fill" number="0"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> 