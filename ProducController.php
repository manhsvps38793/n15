<?php

class ProducController {

  public function __construct() {
    include_once 'Model/productModel.php';
    $ds=new productmodel();
    $ds->dsdm();
    include_once 'views/product.php';
  }
}

class ProductController {
  public function __construct() {
      $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; // Lấy từ khóa từ URL

      include_once 'Model/productModel.php';
      $model = new productmodeltk();
      $result = $model->search($keyword); // Gọi hàm search

      // Kiểm tra kết quả và truyền ra view

      include_once 'views/producttk.php';
  }
}


?>
