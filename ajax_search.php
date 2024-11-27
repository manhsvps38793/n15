<?php
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    include_once 'Model/connectModel.php';
    include_once 'Model/productModel.php';

    $productModel = new productmodeltk();
    $results = $productModel->search($keyword);

    if (!empty($results)) {
        foreach ($results as $product) {
            echo '<a class="product-smart" href="index.php?trang=home&id='.$product['MaSP'].'&iddm='.$product['MaDM'].'" title="">
            <div class="image_thumb"><img width="58" height="58"
                    class="lazyload loaded" src="public/img/'.htmlspecialchars($product['HinhAnh'])  . '"
                    alt="' . htmlspecialchars($product['TenSP']) . '"
                    data-was-processed="true">
            </div>
            <div class="product-info">
                <h3 class="product-name"><span>' . htmlspecialchars($product['TenSP']) . '</span></h3>
                <div class="price-box"><span class="price">' .number_format($product['Gia']) . '₫</span><span
                        class="compare-price">999.000đ</span></div>
            </div>
        </a>';
        }
    } else {
        echo '<div class="product-info"><h3 class="product-name"><span>Không tìm thấy sản phẩm nào.</span></h3></div>';
    }
}
?>
