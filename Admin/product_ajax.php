<?php
    include '../class/productClass.php';

  $productClass = new productClass;
?>
<?php
//Anh san pham
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['files'])) {
  $files = $_FILES['files']['tmp_name'];
  $file_path = '../upload/';
  $url_path = [];  
  foreach($files as $key => $file){
    move_uploaded_file($file, $file_path.$_FILES['files']['name'][$key]);
    $fileurl = $file_path.$_FILES['files']['name'][$key];
    array_push($url_path, $fileurl);
  }
  $data = json_encode([
      'success' => true,
      'fileurl' => $url_path
  ]);
  echo $data;
  }
  //Anh dai dien
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $file = $_FILES;
    $file_path = '../upload/';
    move_uploaded_file($file['file']['tmp_name'],$file_path.$file['file']['name']);
    $fileurl = $file_path.$file['file']['name'];
    $data = json_encode([
        'success' => true,
        'fileurl' => $fileurl
    ]);
    echo $data;
  }
  //Xoa 
  if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_product = $productClass -> delete_product($id);
    if($delete_product){
      $data = json_encode([
        'success' => true,
    ]);
    echo $data;
    }
  }

?>
