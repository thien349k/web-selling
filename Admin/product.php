<?php 
  include 'parts/header.php'; 
  include 'class\productClass.php';
  $productClass = new productClass;

?>

<?php
  $selectAll = $productClass -> select_product_all();
?>
  <body>
  <div>
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
    <footer>
    <?php
      include 'parts/footer.php'
    ?>
    </footer>
    
  </body>
</html>
