<?php 
  include 'parts/header.php';
  include '../class/productClass.php';

  $productClass = new productClass;
?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST;
    $insert_product = $productClass -> insert_product($data);
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
              <!-- noi dung -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="admin-content-main-content-product-add">
                  <div class="admin-content-main-content-left">
                    <div class="admin-content-main-content-two-input">
                      <input type="text" value="" name="name" placeholder="Tên sản phẩm" />
                      
                      <p class="text-danger"></p>
                      <input class="can" class="can" type="text" value="" name="material" placeholder="Chất liệu" />
                      <p class="text-danger">.</p>
                    </div>
                    <div class="admin-content-main-content-two-input">
                      <input type="text" value="" name="price_normal" placeholder="Giá bán" />
                      
                      <p class="text-danger">.</p>    
                      <input class="can" class="can" type="text" value="" name="price_sale" placeholder="Giá giảm" />
                      <p class="text-danger"></p>         
                    </div>
                    <textarea class="editor_des" name="description" id="editor" placeholder="Đặc điểm nổi bật"></textarea>
                      <p class="text-danger">.</p> 
                    <textarea class="editor_content" name="content" id="editor" placeholder="Mô tả sản phẩm"></textarea>
                      <p class="text-danger"></p>
                    <button type="submit" class="main-btn">Thêm sản phẩm</button>
                  </div>
                  <div class="admin-content-main-content-right">
                  <div class="admin-content-main-content-right-image">
                    <label for="file">Ảnh Đại Diện</label>
                    <input id="file" type="file"/>
                    <input type="hidden" value="" name="image" id="input-file-img-hiden">
                    <p class="text-danger"></p>
                    <div class="image-show" id="input-file-img">
                    </div>
                  </div>
                  <div class="admin-content-main-content-right-images">
                    <label for="files">Ảnh sản phẩm</label>
                    <input id="files" type="file" name="images" multiple/>
                    <p class="text-danger"></p>
                    <div class="images-show" id="input-file-imgs"></div>
                  </div>
                </div>
              </form>
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
      $('#file').on('change', (e) => {
        let formdata = new FormData;
        formdata.append('file',$('#file')[0].files[0])
        $.ajax({
          url: 'product_ajax.php',
          data:formdata,
          dataType: 'JSON',
          method: 'POST',
          processData: false,
          contentType:false,
          success: function(res) {
            if(res.success == true){
              html = '';
              html+='<img width="70px"; padding="12px 0"; src="'+res.fileurl+'" alt="">';
              $('.image-show').html(html);
              $('#input-file-img-hiden').val(res.fileurl);
            }
          }
       })
      })

      $('#files').on('change', (e) => {
        let formdata = new FormData;
        let img = $('#files')[0].files;
        for (let index = 0; index < img.length; index++) {
          formdata.append('files[]', img[index])
        }
        $.ajax({
          url: 'product_ajax.php',
          data:formdata,
          dataType: 'JSON',
          method: 'POST',
          processData: false,
          contentType:false,
          success: function(res) {
            if(res.success == true){
              html = '';
              for (let index = 0; index < res.fileurl.length; index++) {
                html+='<img width="70px"; padding="12px 0"; src="'+res.fileurl[index]+'" alt=""><input type="hidden" value="'+res.fileurl[index]+'" name="images[]" id="input-file-img-hiden">';
              }
              $('.images-show').html(html);
              // $('#input-file-img-hiden').val(res.fileurl);
            }
          }
       })
      })
    </script>
  </body>
</html>
