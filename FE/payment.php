
<?php
    include('parts/header.php');
?>

<?php
    $cusId = $_SESSION['cusId'];
    $cartIds = $_SESSION['cartIds'];

    $show_info = $signup -> select_info_all($cusId);

?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $get_info_detail = $cart -> get_info_detail($cusId, $cartIds);
        $del_all_info_detail = $cart -> del_all_info_detail($cartIds);
        header("Location: order.php");
    }
?>
<!--  -->
<link rel="stylesheet" href="asset/css/stylecarts.css" />
<style>

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
<main>
    <section class="cart p-to-top">
        <div class="container">
            <div class="row-flex">
                <div class="cart-items">
                    <p class="heading-text"></p>
                </div>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row-grid">
                    <div class="cart-left row-grid">
                        <h2 class="main-h2">Đặt hàng</h2><br>
                    <div class="cart-right row-grid">

                      <?php
                        if(isset($get_info_detail)){
                            echo $get_info_detail;
                        }?>
                        <h2 class="main-h2">Thông tin người dùng</h2><br>
                        <?php
                        if($show_info){
                            while ($result = $show_info ->fetch_assoc()) {
                        ?>
                        <div class="cart-right-input-name">
                            <input type="text" placeholder="Tên" name="hoten" id="" value="<?php echo $result['name'];?>">
                            <input type="text" placeholder="Số điện thoại" name="phone" id="" value="<?php echo $result['phone'];?>">
                        </div><br>
                        <div class="cart-right-input-email">
                            <input type="email" placeholder="Email" name="email" id="" value="<?php echo $result['email'];?>">
                        </div><br>
                        
                        <div class="cart-right-input-address">
                            <input type="address" placeholder="Địa chỉ" name="diachi" id="" value="<?php echo $result['address'];?>">
                        </div><br>
                        
                    <?php
                        }
                    }
                    ?>
                        <div style="text-align: center;" class="confirm-button" id="confirm-order-button">
                            <a href="?/"><input name="submit" type="submit" style="cursor: pointer;padding: 18px 25px; background-color: black; color: white;" name="submit" value="Xác nhận đơn hàng"></input>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
</main>
<?php
    include('parts/footer.php')
?>
