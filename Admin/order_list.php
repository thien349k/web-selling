<?php 
  include 'parts/header.php';
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
  $cart->saveCartIdsToSession();




?>
<?php
  $get_info_detail_admin = $cart -> get_info_detail_admin();
?>
<?php
  if(!isset($_GET['detailId']) || $_GET['detailId'] == NULL){
  }else{
    $detailId = $_GET['detailId'];
    $name = $_GET['name'];
    $cusId = $_GET['cusId'];
    $date = $_GET['date'];
    $quantity = $_GET['quantity'];
    $detailId_for_cus = $detail -> detailId_for_cus($detailId, $name, $cusId, $date, $quantity); 
  }
?>
<?php
  if(!isset($_GET['delId']) || $_GET['delId'] == NULL){
  }else{
    $delId = $_GET['delId'];
    $name = $_GET['name'];
    $cusId = $_GET['cusId'];
    $date = $_GET['date'];
    $quantity = $_GET['quantity'];
    $del_for_cus = $detail -> del_for_cus($delId, $name, $cusId, $date, $quantity); 
  }
?>
<?php

// Kiểm tra xem có message trong session không
if (isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
  echo "<script type='text/javascript'>
          alert('$message');
        </script>";

  // Sau khi hiển thị thông báo, xóa nó khỏi session
  unset($_SESSION['message']);
}
?>

  <body>
    <section class="admin">
      <div class="row-grid">
        <div class="admin-sidebar">
        <?php include 'parts/slidebar.php' ?>
        </div>
        <div class="admin-content">
          <div class="admin-content-top">
            <div class="admin-content-top-left">
              <ul class="flex-box">
                <li><i class="ri-search-line"></i></li>
                <li><i class="ri-fullscreen-line"></i></li>
              </ul>
            </div>
            <div class="admin-content-top-right">
              <ul class="flex-box">
                <li><i class="ri-notification-line" number="3"></i></li>
                <li><i class="ri-message-2-line" number="5"></i></li>
                <li class="flex-box">
                  <img style="width: 50px" src="asset/image/TwoT.png" alt="" />
                  <p>TwoT<i class="ri-arrow-down-s-fill"></i></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="admin-content-main">
            <div class="admin-content-main-title">
              <h1>Dashboard</h1>
            </div>
            <div class="admin-content-main-content">
              <!-- noidung -->
              <div class="admin-content-main-conten-order-list">
                <table>
                  <head>
                    <tr>
                      <th>ID</th>
                      <th>Tên sản phẩm</th>
                      <th>Số lượng</th>
                      <th>Ghi chú</th>
                      <th>Chi Tiết</th>
                      <th>Ngày</th>
                      <th>Trạng Thái</th>
                    </tr>
                <?php
                  $i = 0;
                  if($get_info_detail_admin){
                    while ($result = $get_info_detail_admin -> fetch_assoc()) {
                      # code...
                      $i = $i + 1
              
                ?>
                    <tbody>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $result['name'];?></td>
                        <td><?php echo $result['quantity'];?></td>
                        <td>Giờ cao điểm</td>
                        <td><a class="edit-class" href="?cusId=<?php echo $result['cusId'];?>">Xem</a></td>
                        <td><?php echo $result['date'];?></td>
                        <?php
                          if($result['status']==1){                
                        ?>
                        <td><a href="?detailId=<?php echo $result['detailId'];?>&name=<?php echo $result['name'];?>&cusId=<?php echo $result['cusId'];?>&date=<?php echo $result['date'];?>&quantity=<?php echo $result['quantity'];?>" class="confirm-order">Xác nhận đơn hàng</a></td>
                        <?php
                          }elseif ($result['status']==2) {
                        ?>
                        <td><a href="" class="confirm-order">gửi hàng</a></td>
                        <?php
                          }elseif ($result['status']==3) {
                        ?>
                        <td>
                          <a class="delete-class" href="?delId=<?php echo $result['detailId'];?>&name=<?php echo $result['name'];?>&cusId=<?php echo $result['cusId'];?>&date=<?php echo $result['date'];?>&quantity=<?php echo $result['quantity'];?>">Xóa</a>
                        </td>
                        <?php }?>
                      </tr>
                      
                    </tbody>
                <?php 
                    }
                  }
                ?>
                  </head>
                </table>
              </div>
            </div>
        </div>
      </div>
    </section>
    <footer>
    <?php
      include 'parts/footer.php'
    ?>
    </footer>
  </body>
</html>
