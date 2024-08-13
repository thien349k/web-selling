<?php 
  include 'parts/header.php'; 
  include '../class/productClass.php';
  $productClass = new productClass;

?>

<?php
  $selectAll = $productClass -> select_product_all();
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
              <!-- noi dung -->
              <div class="admin-content-main-conten-product-list">
                <table>
                  <head>
                    <tr>
                      <th>ID</th>
                      <th>Ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá bán</th>
                      <th>Giá giảm</th>
                      <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                      if($selectAll -> num_rows > 0) {
                        while ($result = $selectAll -> fetch_assoc()) {
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $result['id']?></td>
                        <td>
                          <img
                            style="width: 70px"
                            src="<?php echo $result['image']?>"
                            alt=""
                          />
                        </td>
                        <td><?php echo $result['name']?></td>
                        <td><?php echo number_format($result['price_normal'])?></td>
                        <td><?php echo  number_format($result['price_sale'])?></td>
                        <td>
                          <a class="edit-class" href="product_edit.php?id=<?php echo $result['id']?>">Sửa</a>
                          
                          <a class="delete-class" onclick="removerow(id=<?php echo $result['id']?>, url = 'product_ajax.php')" href="">Xóa</a>
                        </td>
                      </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                  </head>
                </table>
              </div>
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
    <script>
      function removerow(id, url){
        if(confirm('Bạn có chắc muốn xóa không')){
          event.preventDefault()
          $.ajax({
            url: url,
            data: {id},
            dataType: 'JSON',
            method: 'GET',
            success: function(res) {
              if(res.success == true){
                location.reload();
              }
            }
          })
        }
      }
    </script>
  </body>
</html>
