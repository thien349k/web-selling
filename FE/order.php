<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .status {
            font-weight: bold;
            padding: 5px;
            border-radius: 5px;
        }
        .available {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .unavailable {
            background-color: #f2dede;
            color: #a94442;
        }
    </style>
</head>
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
    $cusId = $_SESSION['cusId'];
?>
<?php 
  $get_info_detail_cus = $cart -> get_info_detail_cus($cusId);
?>
<?php
  if(!isset($_GET['geted']) || $_GET['geted'] == NULL){
  }else{
    $getedId = $_GET['geted'];
    $name = $_GET['name'];
    $cusId = $_GET['cusId'];
    $date = $_GET['date'];
    $quantity = $_GET['quantity'];
    $getedID_for_cus = $detail -> getedID_for_cus($getedId, $name, $cusId, $date, $quantity); 

  }
?>
<?php
  if(!isset($_GET['success']) || $_GET['success'] == NULL){
  }else{
    $successId = $_GET['success'];
    $name = $_GET['name'];
    $cusId = $_GET['cusId'];
    $date = $_GET['date'];
    $quantity = $_GET['quantity'];
    $getedID_for_cus = $detail -> getedID_for_cus($getedId, $name, $cusId, $date, $quantity); 

  }
?>
<body>
    <h2>Bảng Sản Phẩm</h2>
    <form action="" method="post" enctype="multipart/form-data">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Giá Sản Phẩm</th>
                <th>Tổng Giá</th>
                <th>Trạng Thái</th>
            </tr>
        </thead>
        <?php
          if(isset($getedID_for_cus)){
            echo $getedID_for_cus;
          }
        ?>

        <?php
          $i = 0;
          if($get_info_detail_cus){
            while ($result = $get_info_detail_cus -> fetch_assoc()) {
              # code...
              $i = $i + 1
      
        ?>
        <tbody>
            <tr>
              
                <td><?php echo $i; ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['quantity']; ?></td>
                <td><?php echo $result['price_sale']; ?></td>
                <td><?php echo $result['quantity']*$result['price_sale']; ?></td>
                <?php
                  if($result['status']==1){                
                ?>
                <td><a href="" class="status available">Chờ xác nhận</a></td>
                <?php
                  } elseif ($result['status']==2) {
                ?>
                <td><a href="?geted=<?php echo $result['detailId'];?>&name=<?php echo $result['name'];?>&cusId=<?php echo $result['cusId'];?>&date=<?php echo $result['date'];?>&quantity=<?php echo $result['quantity'];?>" class="status available">Đã nhận đơn hàng</a></td>
                <?php
                  }elseif ($result['status']==3) {
                ?>
                <td><a href="?success=<?php echo $result['detailId'];?>&name=<?php echo $result['name'];?>&cusId=<?php echo $result['cusId'];?>&date=<?php echo $result['date'];?>&quantity=<?php echo $result['quantity'];?>" class="status available">Giao hàng thành công</a></td>
                <?php
                  }
                ?>
            </tr>
        </tbody>
        <?php 
            }
          }
        ?>
    </table>
    </form>
</body>
</html>
