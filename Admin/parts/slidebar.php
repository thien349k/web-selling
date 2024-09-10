<?php

  if(isset($_GET['action']) == 'dangxuat'){
    unset($_SESSION['dangnhap']);
    header("Location:logins.php");
  }
?>
<div class="admin-sidebar-top">
  <img src="asset/image/TwoT.png" alt="" />
</div>
<div class="admin-sidebar-content">
  <ul>
    <li>
      <a href="">
        <i class="ri-dashboard-line"></i>
        Dashboard
        <i class="ri-add-box-line"></i>
      </a>
      <ul class="sub-menu">
        <div class="sub-menu-items">
          <li>
            <a href=""
              ><i class="ri-arrow-right-s-fill"></i>Tổng Quan</a
            >
          </li>
        </div>
      </ul>
    </li>
    <li>
      <a href="">
        <i class="ri-list-check"></i>
        Đơn hàng
        <i class="ri-add-box-line"></i>
      </a>
      <ul class="sub-menu">
        <div class="sub-menu-items">
          <li>
            <a href="order_list.php"
              ><i class="ri-arrow-right-s-fill"></i>Danh sách</a
            >
          </li>
        </div>
      </ul>
    </li>
    <li>
      <a href="">
        <i class="ri-list-check"></i>
        Sản phẩm
        <i class="ri-add-box-line"></i>
      </a>
      <ul class="sub-menu">
        <div class="sub-menu-items">
          <li>
            <a href="product_list.php"
              ><i class="ri-arrow-right-s-fill"></i>Danh sách</a
            >
          </li>
          <li>
            <a href="product_add.php"><i class="ri-arrow-right-s-fill"></i>Thêm</a>
          </li>
        </div>
      </ul>
    </li>

    <a href="index.php?action=dangxuat">
        <i class="ri-list-check"></i>
        Đăng xuất: <?php if(isset($_SESSION['danghap'])){
          echo $_SESSION['danghap'];
        }?>
        <i class="ri-logout-box-r-line"></i>
      </a>
  </ul>
</div>