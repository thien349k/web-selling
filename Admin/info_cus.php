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
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $cusId = $_GET['cusId'];
    $show_info_cus = $signup -> select_info_all($cusId);
  }
?>
<?php
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
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                      <th>Quay lại</th>

                    </tr>
                <?php
                  $i = 0;
                  if($show_info_cus){
                    while ($result = $show_info_cus -> fetch_assoc()) {
                      # code...
                      $i = $i + 1
                ?>
                    <tbody>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $result['name'];?></td>
                        <td><?php echo $result['email'];?></td>
                        <td><?php echo $result['address'];?></td>
                        <td><?php echo $result['phone'];?></td>
                        <td><a href="order_list.php"><i class="ri-arrow-go-back-line"></i></a></td>



                        <?php }?>
                      </tr>
                      
                    </tbody>
                <?php 
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
