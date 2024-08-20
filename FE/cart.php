<?php
    include('parts/header.php');
?>
<?php
  if(!isset($_GET['id']) || ($_GET['id'] == NULL)){

  } else {
    $id = $_GET['id'];
    $del_product_to_cart = $cart ->del_product_to_cart($id);
  }
?>

<?php
  $get_product_to_cart = $cart -> get_product_to_cart();
?>
<link rel="stylesheet" href="asset/css/stylecarts.css">
<main>
    <section class="cart p-to-top">
        <div class="container">
            <div class="row-flex">
                <div class="cart-items">
                    <p class="heading-text">Giỏ Hàng</p>
                </div>
            </div>
            <div class="row-grid">
                <div class="cart-left row-grid">
                    <h2 class="main-h2">Chi tiết sản phẩm</h2><br>
                    <?php
        $s=0;
        $i=0;
        if($get_product_to_cart){
          while ($result = $get_product_to_cart -> fetch_assoc()) {
            $i++;
        
      ?>
                    <div class="cart-left-detail">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="anh" ><img width="100%" src="<?php echo $result['image'];?>" alt=""></td>
                                    <td style="text-align: center;">
                                    <div class="item-details">
                <h3><?php echo $result['name'];?></h3>
                <p>Price: <?php echo $tong = number_format($result['price_sale']*$result['quantity']);?><sup>đ</sup>
                <input type="hidden" value="<?php echo $tong = $result['price_sale']*$result['quantity'];?>">
            </div>
            <div class="item-actions">
                <input type="number" value="<?php echo $result['quantity'];?>" class="item-quantity">
                <a href="?id=<?php echo $result['id'];?>"><button class="remove-btn">Remove</button></a>
            </div>
                                    </td>
                                    <td style="text-align: center;">99.000<sub>đ</sub></td>
                                    <td style="font-size: xx-large; text-align: center;">X</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="button-control" >
                            <a href="info.html"><button style="cursor: pointer;padding: 18px 25px; background-color: black; color: white;" class="main-button" >Cập nhật giỏ hàng</button></a>
                            <a href="info.html"><button style="cursor: pointer; padding: 18px 25px; background-color: white; color: black;" class="main-button" href="index_user.html">Tiếp tục mua hàng</button></a>
                        </div>
                    </div>
                    <?php
        $s =$s+$tong;
        }
      }
      ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    include('parts/footer.php')
?>