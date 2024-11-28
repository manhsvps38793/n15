<?php
class giohangController
{
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start(); // Bắt đầu session nếu chưa bắt đầu
        }

        function showgh()
        {


            $ch = "";
            $tong = 0;
            $tongsl = 0;
            if (isset($_GET['hanhdong']) && isset($_GET['product_id'])) {
                $action = $_GET['hanhdong'];
                $productId = $_GET['product_id'];
            
                // Lặp qua giỏ hàng để tìm sản phẩm
                foreach ($_SESSION['giohang'] as &$product) {
                    if ($product['id'] == $productId) {
                        if ($action === 'plus') {
                            $product['sl']++; // Tăng số lượng
                        } elseif ($action === 'minus' && $product['sl'] > 1) {
                            $product['sl']--; // Giảm số lượng
                        }
                        break; // Dừng vòng lặp khi đã tìm thấy sản phẩm
                    }
                }
            
                // Reset lại chỉ mục mảng sau khi unset
                $_SESSION['giohang'] = array_values($_SESSION['giohang']);
            
                // Chuyển hướng về lại trang chính (tránh refresh làm lặp hành động)
                header("Location: index.php?trang=giohang");
                exit();
            }
            $ch .= '<link rel="stylesheet" href="public/css/giohang.css">
<section class="bread-crumb">
    <div class="container">
        <ul class="breadcrumb">
            <li class="home">
                <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        class="svg-inline--fa fa-chevron-right fa-w-10">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                            class=""></path>
                    </svg>&nbsp;</span>
            </li>

            <li><strong><span>Giỏ hàng</span></strong></li>

        </ul>
    </div>
</section>
<section class="main-cart-page main-container col1-layout">
    <div class="main container cartpcstyle">
        <div class="wrap_background_aside margin-bottom-40">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-12 col-cart-left">
                    <div class="bg-shadow margin-bottom-20">
                        <div class="header-cart">
                            <div class="title-block-page">
                                <h1 class="title_cart">
                                    <span>Giỏ hàng của bạn</span>
                                </h1>
                            </div>
                        </div>
                        <div class="cart-page d-xl-block d-none">
                            <div class="drawer__inner">
                                <div class="CartPageContainer">

                                    <form action="/cart" method="post" novalidate="" class="cart ajaxcart cartpage">
                                        <div class="cart-header-info">
                                            <div>Thông tin sản phẩm</div>
                                            <div>Đơn giá</div>
                                            <div>Số lượng</div>
                                            <div>Thành tiền</div>
                                        </div>

';
            foreach ($_SESSION['giohang'] as $b) {
                $tongsl += $b['sl'];
                $ch .= '<div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                         <div class="ajaxcart__row">
                                             <div class="ajaxcart__product cart_product" data-line="1">
                                                           <a href="index.php?trang=giohang"
                                                               class="ajaxcart__product-image cart_image"
                                                               title="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">
                                                               <img src="public/img/' . $b['hinh'] . '"
                                                                   alt="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">
                                                           </a>
                                                            <div class="grid__item cart_info single-cart-product" data-id="' . $b['id'] . '">
                                                                <div class="ajaxcart__product-name-wrapper cart_name">
                                                                    <a href="index.php?trang=giohang"
                                                                        class="ajaxcart__product-name h4 line-clamp line-clamp-2-new"
                                                                        title="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">' . $b['ten'] . '</a>
    <a title="Xóa" class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="Model/giohangmodel.php?ma=xoa&id=' . $b['id'] . '" data-line="1">Xóa</a>
                                                                </div>
                                                                <div class="grid">
                                                                    <div class="grid__item one-half text-right cart_prices">
                                                                        <span class="single-cart-price " style="font-weight: bold; color: #d31100;" data-price>'.
                                                                         number_format($b['gia'], 0, ',', '.') .'₫</span>
                                                                    </div>
                                                                </div>
                                                             
                                                                <div class="grid">
                                                                    
                                                                      
                                                                            <div class="grid__item one-half cart_select">
                                                                                <div class="ajaxcart__qty input-group-btn">
                                                                                    <button type="button"
                                                                                        class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count"
                                                                                        data-id="" data-qty="0" data-line="1"
                                                                                        aria-label="-" name="minus"> -
                                                                                    </button>
                                                                                    <input type="text" readonly name="quantity-product" class="ajaxcart__qty-num number-sidebar" value="' . $b['sl'] . '">
                                                                                    
                                                                                    <button type="button"
                                                                                        class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count"
                                                                                        data-id="" data-line="1" data-qty="2"
                                                                                        aria-label="+" name="plus"> +
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                </div>
                                                                <div class="grid justify-right">
                                                                    <div class="grid__item one-half text-right cart_prices">
                                                                        <span class="total-cart-price" data-line="1" style="font-weight: bold; color: #d31100;" >' . $b['gia'] . '₫</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       </div>
                                                   </div>
                                            </div>';
            }
            $tongkq = 0;
            $tongkq += $tong * $tongsl;
            $tongkq_formatted = number_format($tongkq, 0, ',', '.');
            $ch .= '</form>

                                </div>
                            </div>
                        </div>
                        <div class="cart-mobile-page d-block d-xl-none">
                            <div class="CartMobileContainer">
                                <!-- khi hết sản phẩm load này ra -->
                                <div class="cart--empty-message"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;" xml:space="preserve"> <g> <g> <path d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z"></path> </g> </g> <g> <g> <path d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z"></path> </g> </g> <g> <g> <path d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z"></path> </g> </g> <g> <g> <path d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z"></path> </g> </g> <g> <g> <path d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z"></path> </g> </g> <g> <g> <path d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z"></path> </g> </g> <g> <g> <path d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z"></path> </g> </g> <g> <g> <path d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z"></path> </g> </g> <g> <g> <path d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg><p>Giỏ hàng của bạn đang trống</p></div>
                                <!-- khi hết sản phẩm load này ra -->
                            </div>
                        </div>
                    </div>




                    <div class="bg-shadow margin-bottom-20">
                        <div class="product-suggest product-swipers">
                            <h2>
                                <a href="/san-pham-noi-bat" title="Có thể bạn thích">
                                    Có thể bạn thích
                                </a>
                            </h2>
                            <div class="swiper_suggest swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                                    <div class="swiper-slide swiper-slide-active"
                                        style="width: 261.667px; margin-right: 10px;">
                                        <div class="item_product_main">

                                            <form action="/cart/add" method="post"
                                                class="variants product-action item-product-main duration-300"
                                                data-cart-form="" data-id="product-actions-34775949"
                                                enctype="multipart/form-data">
                                                <span class="flash-sale">-
                                                    6%
                                                </span>

                                                <div class="tag-promo" title="Quà tặng">
                                                    <img src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1728460505311"
                                                        data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1728460505311"
                                                        alt="Quà tặng" class=" loaded"
                                                        data-was-processed="true">
                                                    <div class="promotion-content">
                                                        <div class="line-clamp-5-new"
                                                            title="- Tặng 1 túi giấy xách đi kèm - 1 Hộp đường phèn ">

                                                            <p>
                                                                <span style="letter-spacing: -0.2px;">- Tặng
                                                                    1 túi giấy xách đi kèm <br>- 1 Hộp đường
                                                                    phèn </span>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover"
                                                        href="/copy-of-to-yen-tinh-che-cho-be-baby-loai-3"
                                                        title="Tổ Yến Tinh Chế cho bé BaBy (loại 3)">
                                                        <img class=" duration-300 loaded"
                                                            src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/bb2-50gr-0-nap-494df53fb54c4233b0ba3c0a8ab3dfbe-97fc1701b8a14297ac03ee1e64edf1b2-master-d488b4d7-4784-48b2-a54a-c7d6343654fa.jpg?v=1709574876467"
                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/bb2-50gr-0-nap-494df53fb54c4233b0ba3c0a8ab3dfbe-97fc1701b8a14297ac03ee1e64edf1b2-master-d488b4d7-4784-48b2-a54a-c7d6343654fa.jpg?v=1709574876467"
                                                            alt="Tổ Yến Tinh Chế cho bé BaBy (loại 3)"
                                                            data-was-processed="true">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="name-price">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="/copy-of-to-yen-tinh-che-cho-be-baby-loai-3"
                                                                title="Tổ Yến Tinh Chế cho bé BaBy (loại 3)">Tổ
                                                                Yến Tinh Chế cho bé BaBy (loại 3)</a>
                                                        </h3>
                                                        <div class="product-price-cart">
                                                            <span class="compare-price">3.100.000₫</span>

                                                            <span class="price">2.900.000₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-button">
                                                        <input type="hidden" name="variantId" value="111118886">
                                                        <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                            title="Thêm vào giỏ hàng">
                                                            <span>Thêm vào giỏ</span>

                                                        </button>
                                                        <a href="javascript:void(0)"
                                                            class="setWishlist btn-views btn-circle active"
                                                            data-wish="copy-of-to-yen-tinh-che-cho-be-baby-loai-3"
                                                            tabindex="0" title="Bỏ yêu thích"><img class="img-unlike"
                                                                width="25" height="25"
                                                                src="https://bizweb.dktcdn.net/100/506/650/files/heartadd-1.png?v=1704084436307"
                                                                alt="Bỏ yêu thích">Bỏ yêu thích</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 261.667px; margin-right: 10px;">
                                        <div class="item_product_main">

                                            <form action="/cart/add" method="post"
                                                class="variants product-action item-product-main duration-300"
                                                data-cart-form="" data-id="product-actions-34619453"
                                                enctype="multipart/form-data">

                                                <div class="tag-promo" title="Quà tặng">
                                                    <img src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1728460505311"
                                                        data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1728460505311"
                                                        alt="Quà tặng" class=" loaded"
                                                        data-was-processed="true">
                                                    <div class="promotion-content">
                                                        <div class="line-clamp-5-new"
                                                            title=" Kẹo Hồng Sâm Không Đường 365 Hàn Quốc Gói 500g Nước Hồng Sâm Daesan Chiết khấu cao cho các doanh nghiệp. Có VAT đầy đủ. ">

                                                            <ul>
                                                                <li>Kẹo Hồng Sâm Không Đường 365 Hàn Quốc
                                                                    Gói 500g</li>
                                                                <li>Nước Hồng Sâm Daesan</li>
                                                                <li>Chiết khấu cao cho các doanh nghiệp. Có
                                                                    VAT đầy đủ.</li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover"
                                                        href="/cao-hong-sam-kgs-han-quoc-hop-1-lo-240g"
                                                        title="Cao Hồng Sâm KGS Hàn Quốc Hộp 1 Lọ 240g">
                                                        <img class=" duration-300 loaded"
                                                            src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/cao-hong-sam-kgs-240g-1-8990d1b9b75443ecb7d7e24126011ccb-grande.jpg?v=1708619518840"
                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/cao-hong-sam-kgs-240g-1-8990d1b9b75443ecb7d7e24126011ccb-grande.jpg?v=1708619518840"
                                                            alt="Cao Hồng Sâm KGS Hàn Quốc Hộp 1 Lọ 240g"
                                                            data-was-processed="true">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="name-price">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="/cao-hong-sam-kgs-han-quoc-hop-1-lo-240g"
                                                                title="Cao Hồng Sâm KGS Hàn Quốc Hộp 1 Lọ 240g">Cao
                                                                Hồng Sâm KGS Hàn Quốc Hộp 1 Lọ 240g</a>
                                                        </h3>
                                                        <div class="product-price-cart">
                                                            <span class="price">3.700.000₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-button">
                                                        <input type="hidden" name="variantId" value="110199727">
                                                        <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                            title="Thêm vào giỏ hàng">
                                                            <span>Thêm vào giỏ</span>

                                                        </button>
                                                        <a href="javascript:void(0)"
                                                            class="setWishlist btn-views btn-circle"
                                                            data-wish="cao-hong-sam-kgs-han-quoc-hop-1-lo-240g"
                                                            tabindex="0" title="Thêm vào yêu thích">
                                                            <img width="25" height="25"
                                                                src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1728460505311"
                                                                alt="Thêm vào yêu thích">
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="swiper-slide" style="width: 261.667px; margin-right: 10px;">
                                        <div class="item_product_main">

                                            <form action="/cart/add" method="post"
                                                class="variants product-action item-product-main duration-300"
                                                data-cart-form="" data-id="product-actions-34619401"
                                                enctype="multipart/form-data">


                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover" href="/set-6-thuong-vy-yen-dao"
                                                        title="Set 6 Thượng Vy Yến Đảo">
                                                        <img class=" duration-300 loaded"
                                                            src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/set-6-thuong-vy-yen-dao.jpg?v=1708618693627"
                                                            data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/set-6-thuong-vy-yen-dao.jpg?v=1708618693627"
                                                            alt="Set 6 Thượng Vy Yến Đảo" data-was-processed="true">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="name-price">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="/set-6-thuong-vy-yen-dao"
                                                                title="Set 6 Thượng Vy Yến Đảo">Set 6 Thượng
                                                                Vy Yến Đảo</a>
                                                        </h3>
                                                        <div class="product-price-cart">
                                                            <span class="price">799.000₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-button">
                                                        <input class="hidden" type="hidden" name="variantId"
                                                            value="110199638">
                                                        <button
                                                            class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                            title="Tùy chọn" type="button"
                                                            data-handle="set-6-thuong-vy-yen-dao">
                                                            <span>Thêm vào giỏ hàng</span>

                                                        </button>
                                                        <a href="javascript:void(0)"
                                                            class="setWishlist btn-views btn-circle"
                                                            data-wish="set-6-thuong-vy-yen-dao" tabindex="0"
                                                            title="Thêm vào yêu thích">
                                                            <img width="25" height="25"
                                                                src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1728460505311"
                                                                alt="Thêm vào yêu thích">
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                                <div class="swiper-button-next">
                                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2.13003" y="29" width="38" height="38"
                                            transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                            stroke-width="2"></rect>
                                        <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                                            fill="black"></rect>
                                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="swiper-button-prev swiper-button-disabled">
                                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2.13003" y="29" width="38" height="38"
                                            transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                            stroke-width="2"></rect>
                                        <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                                            fill="black"></rect>
                                        <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                            

                        </div>
                    </div>


                </div>
                <div class="col-xl-4 col-lg-5 col-12 col-cart-right">
                    <div class="sticky">
                        <div class="bg-shadow margin-bottom-20">
                            <div class="ajaxcart__footer">
                                <div class="checkout-header">
                                    Thông tin đơn hàng
                                </div>
                                <div class="checkout-body">
                                    <div class="summary-total">

                                        <div class="content-items">
                                            <div class="item-content-left">Tổng tiền</div>
                                            <div class="item-content-right"><span class="total-price total-cart-product-price">' . $tongkq_formatted . '.000₫</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="summary-action">
                                        <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                                        <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                                    </div>

                                    <div class="summary-vat">
                                        <form method="post" novalidate="" class="formVAT">
                                            <h4>
                                                Thời gian giao hàng
                                            </h4>
                                            <div class="timedeli-modal">
                                                <fieldset class="input_group date_pick">
                                                    <input type="text" placeholder="Chọn ngày" readonly="" id="date"
                                                        name="attributes[shipdate]" class="date_picker" required="">
                                                </fieldset>
                                                <fieldset class="input_group date_time">
                                                    <select name="time" class="timeer timedeli-cta">
                                                        <option selected="">Chọn thời gian</option>


                                                        <option value="08h00 - 12h00">08h00 - 12h00</option>

                                                        <option value=" 14h00 - 18h00"> 14h00 - 18h00
                                                        </option>

                                                        <option value=" 19h00 - 21h00"> 19h00 - 21h00
                                                        </option>

                                                    </select>
                                                </fieldset>
                                            </div>

                                            <div class="r-bill">
                                                <div class="checkbox">
                                                    <input type="hidden" name="attributes[invoice]"
                                                        id="re-checkbox-bill" value="không">
                                                    <input type="checkbox" id="checkbox-bill" name="attributes[invoice]"
                                                        value="có" class="regular-checkbox">
                                                    <label for="checkbox-bill" class="box"></label>
                                                    <label for="checkbox-bill" class="title">Xuất hóa đơn
                                                        công ty</label>
                                                </div>
                                                <div class="bill-field">
                                                    <div class="form-group">
                                                        <label>Tên công ty</label>
                                                        <input type="text" class="form-control val-f"
                                                            name="attributes[company_name]" value=""
                                                            placeholder="Tên công ty">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mã số thuế</label>
                                                        <input type="text" pattern=".{10,}"
                                                            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                            class="form-control val-f val-n" name="attributes[tax_code]"
                                                            value="" placeholder="Mã số thuế">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Địa chỉ công ty</label>
                                                        <textarea class="form-control val-f"
                                                            name="attributes[company_address]"
                                                            placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email nhận hoá đơn</label>
                                                        <input type="email" class="form-control val-f val-email"
                                                            name="attributes[invoice_email]" value=""
                                                            placeholder="Email nhận hoá đơn">
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>';
            $tt = '';
            foreach ($_SESSION['giohang'] as $x) {
                $use = isset($_GET['use']) ? $_GET['use'] : '';
                if ($use === 'nhap') {
                    $tt = 'index.php?trang=thanhtoan&use=nhap&id=' . $x['id'] . '';
                } else {
                    $tt = 'index.php?trang=dangnhap';
                }
            }

            $ch .= '    <div class="summary-button">
                                        <div class="cart__btn-proceed-checkout-dt">
                                        <a href="' . $tt . '">
                                            <button  onclick="goToCheckout(event)" type="button"
                                                class="button btn btn-default cart__btn-proceed-checkout btn-primary duration-300"
                                                id="btn-proceed-checkout" title="Thanh toán ngay">Thanh toán
                                                ngay</button></a>
                                        </div>
                                        <a class="return_buy btn btn-extent duration-300" title="Tiếp tục mua hàng"
                                            href="collections/all">Tiếp tục mua
                                            hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-shadow">
                            <div class="product-coupons">
                                <div class="title">Khuyến mãi dành cho bạn</div>
                                <div class="swiper_coupons swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 300.4px; margin-right: 10px;">
                                            <div class="box-coupon">
                                                <div class="mask-ticket"></div>
                                                <div class="image">
                                                    <img width="88" height="88" class=" loaded"
                                                        src="public/img/img_coupon_1.webp"
                                                        alt="NEST200" data-was-processed="true">
                                                </div>
                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="NEST200" data-time="12/12/2024"
                                                        data-content="Áp dụng cho đơn hàng từ <b>4,500,000đ</b> trở lên Không đi kèm với chương trình khác">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        NEST200
                                                        <span class="line-clamp line-clamp-2">Giảm 200k giá
                                                            trị đơn hàng</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: 12/12/2024</span>
                                                        <div class="coupon-code js-copy" data-copy="NEST200"
                                                            title="Sao chép">Copy mã</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 300.4px; margin-right: 10px;">
                                            <div class="box-coupon">
                                                <div class="mask-ticket"></div>
                                                <div class="image">
                                                    <img width="88" height="88" class=" loaded"
                                                        src="public/img/img_coupon_1.webp"
                                                        alt="NEST200" data-was-processed="true">
                                                </div>
                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="NEST100" data-time="24/12/2024"
                                                        data-content="Áp dụng cho đơn hàng từ <b>2,500,000đ</b> trở lên Không đi kèm với chương trình khác">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        NEST100
                                                        <span class="line-clamp line-clamp-2">Giảm 100k giá
                                                            trị đơn hàng</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: 24/12/2024</span>
                                                        <div class="coupon-code js-copy" data-copy="NEST100"
                                                            title="Sao chép">Copy mã</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide" style="width: 300.4px; margin-right: 10px;">
                                            <div class="box-coupon">
                                                <div class="mask-ticket"></div>
                                                <div class="image">
                                                    <img width="88" height="88" class=""
                                                        src="public/img/img_coupon_1.webp" data-src="public/img/img_coupon_1.webp"
                                                        alt="NEST50">
                                                </div>
                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="NEST50" data-time="25/12/2024"
                                                        data-content="Áp dụng cho đơn hàng từ <b>1,500,000đ</b> trở lênKhông đi kèm với chương trình khác">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        NEST50
                                                        <span class="line-clamp line-clamp-2">Giảm 50k giá
                                                            trị đơn hàng</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: 25/12/2024</span>
                                                        <div class="coupon-code js-copy" data-copy="NEST50"
                                                            title="Sao chép">Copy mã</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 300.4px; margin-right: 10px;">
                                            <div class="box-coupon">
                                                <div class="mask-ticket"></div>
                                                <div class="image">
                                                    <img width="88" height="88" class=""
                                                        src="public/img/img_coupon_1.webp" data-src="public/img/img_coupon_1.webp"
                                                        alt="NESTFREESHIP">
                                                </div>
                                                <div class="content_wrap">
                                                    <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                        data-coupon="NESTFREESHIP" data-time="25/12/2024"
                                                        data-content="Miễn phí giao hàng (tối đa 30k) cho đơn hàng từ <b>1,000,000đ</b> trở lên">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                            <path
                                                                d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <div class="content-top">
                                                        NESTFREESHIP
                                                        <span class="line-clamp line-clamp-2">Miễn phí giao
                                                            hàng</span>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <span>HSD: 25/12/2024</span>
                                                        <div class="coupon-code js-copy" data-copy="NESTFREESHIP"
                                                            title="Sao chép">Copy
                                                            mã</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev swiper-button-disabled">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                stroke-width="2"></rect>
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                transform="rotate(-45 8 29.2133)" fill="black"></rect>
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                stroke-width="2"></rect>
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                transform="rotate(-45 8 29.2133)" fill="black"></rect>
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="popup-coupon">
    <div class="content">
        <div class="title">
            Thông tin voucher
        </div>
        <div class="close-popup-coupon" title="Đóng">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
        <ul>
            <li>
                <span>Mã giảm giá:</span>
                <span class="code"></span>
            </li>
            <li>
                <span>Ngày hết hạn:</span>
                <span class="time"></span>
            </li>
            <li>
                <span>Điều kiện:</span>
                <span class="dieukien">
                </span>
            </li>
        </ul>
    </div>
</div>';


            return $ch;
        }
        echo showgh();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['themgh'])) {
            // Lấy thông tin sản phẩm từ form
            $ten = $_POST['ten'];
            $hinh = $_POST['hinh'];
            $gia = $_POST['gia'];
            $id = $_POST['id'];
            $soluong = $_POST['quantity'];
            if ($soluong == 0) {
                $soluong = 1;
            }


            $pt = ['id' => $id, 'ten' => $ten, 'hinh' => $hinh, 'gia' => $gia, 'sl' => $soluong];



            // Kiểm tra trùng lặp trong giỏ hàng
            $fl = 0;
            foreach ($_SESSION['giohang'] as $key => $item) {
                if ($item['id'] == $id) {
                    $_SESSION['giohang'][$key]['sl'] += $soluong;  // Tăng số lượng nếu sản phẩm đã có trong giỏ
                    $fl = 1;
                    break;
                }
            }

            // Nếu sản phẩm chưa có trong giỏ, thêm vào giỏ
            if ($fl == 0) {
                $_SESSION['giohang'][] = $pt;
            }
            header('Location: index.php?trang=giohang');
            exit();
        }
    }
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const singleCartProduct = document.querySelectorAll('.single-cart-product');

        singleCartProduct.forEach(pd => {
            const price = parseInt(pd.querySelector('.single-cart-price').textContent.replace(/[.₫]/g, "")); // Lấy giá ban đầu

            const plus = pd.querySelector('.ajaxcart__qty--plus');
            const minus = pd.querySelector('.ajaxcart__qty--minus');
            const qtyNum = pd.querySelector('.ajaxcart__qty-num');
            const totalPriceElem = pd.querySelector('.total-cart-price');
            const pdID = pd.getAttribute('data-id');
            
            

            let inputValue = qtyNum.value; // Lấy số lượng ban đầu
            qtyNum.textContent = inputValue; // Cập nhật hiển thị số lượng
            const totalPrice = inputValue * price; // Tính tổng tiền sử dụng giá ban đầu


            totalPriceElem.textContent = totalPrice.toLocaleString() + "₫"; // Cập nhật tổng tiền
            // Xử lý khi nhấn nút tăng
            plus.onclick = () => {
                window.location.href = `index.php?trang=giohang&hanhdong=plus&product_id=${pdID}`;
            };

            // Xử lý khi nhấn nút giảm
            minus.onclick = () => {
                if (inputValue === 1) {
                    alert('Số lượng không thể nhỏ hơn 1');
                } else {
                    window.location.href = `index.php?trang=giohang&hanhdong=minus&product_id=${pdID}`;
                }
            };
        });

        // Hàm tính tổng giỏ hàng
        const getTotal = () => {
            let totalSum = 0; // Khởi tạo biến tổng

            // Lấy tất cả các giá trị tổng giá trị của mỗi sản phẩm
            const totalSingleProductPrices = document.querySelectorAll('.total-cart-price');

            totalSingleProductPrices.forEach(pd => {
                // Lấy giá trị của mỗi sản phẩm, loại bỏ dấu chấm và ₫
                const price = parseInt(pd.textContent.replace(/[.,₫]/g, ""), 10);

                // Cộng dồn vào tổng
                totalSum += price;
            });

            // Cập nhật tổng giá trị giỏ hàng
            const totalPriceElem = document.querySelector('.total-cart-product-price');
            totalPriceElem.textContent = totalSum.toLocaleString() + "₫"; // Định dạng với dấu phân cách hàng nghìn
        }

        // Gọi hàm tính tổng ban đầu
        getTotal();







        if (document.querySelector('.swiper_suggest')) {
            new Swiper('.swiper_suggest', {
                slidesPerView: 3,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 2.5,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 10
                    },
                },
            });
        }

        // Khởi tạo Swiper Coupons
        if (document.querySelector('.swiper_coupons')) {
            new Swiper('.swiper_coupons', {
                slidesPerView: 1.2,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 1.2,
                        spaceBetween: 20
                    },
                    992: {
                        slidesPerView: 1.2,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 2.5,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 1.2,
                        spaceBetween: 10
                    },
                },
            });

            function updateQuantity(button, change) {
                const productId = button.getAttribute('data-id');
                const currentQty = parseInt(button.getAttribute('data-qty'));
                const line = button.getAttribute('data-line');
                const newQty = currentQty + change;

                if (newQty >= 0) {
                    fetch('update_cart.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                id: productId,
                                qty: newQty,
                                line: line
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Cập nhật giao diện
                                button.setAttribute('data-qty', data.new_qty);
                                const qtyElement = document.querySelector(`#item-${productId}-qty`);
                                if (qtyElement) qtyElement.innerText = data.new_qty;
                            } else {
                                alert('Không thể cập nhật số lượng!');
                            }
                        });
                } else {
                    alert('Số lượng không thể nhỏ hơn 0!');
                }
            }

        }


        const decreaseBtns = document.querySelectorAll('.ajaxcart__qty--minus'); // Nút giảm
        const increaseBtns = document.querySelectorAll('.ajaxcart__qty--plus'); // Nút tăng
        const quantityInputs = document.querySelectorAll('.ajaxcart__qty-num'); // Input số lượng
        const prices = document.querySelectorAll('.cart-price');

        // Giá sản phẩm
        const subtotalPriceElement = document.querySelector('.total-price'); // Tổng giá giỏ hàng

        // Hàm định dạng tiền tệ
        function formatCurrency(number) {
            return new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(number);
        }

        // Cập nhật tổng tiền giỏ hàng
        function updateCartTotal() {
            let totalCartPrice = 0;

            quantityInputs.forEach((input, index) => {
                const price = prices[index].textContent.replace(/[^0-9.-]+/g, ''); // Giá tiền
                console.log(price);
                const quantity = parseInt(input.value) || 1; // Số lượng
                const total = price * quantity;

                // Cập nhật tổng tiền từng sản phẩm
                prices[index].textContent = formatCurrency(total);

                // Cộng dồn tổng tiền giỏ hàng
                totalCartPrice += total;
            });

            // Cập nhật hiển thị tổng giá trị giỏ hàng
            subtotalPriceElement.textContent = formatCurrency(totalCartPrice);
        }

        // Gắn sự kiện cho nút giảm
        decreaseBtns.forEach((button, index) => {
            button.addEventListener('click', () => {
                const input = quantityInputs[index];
                let quantity = parseInt(input.value) || 1;
                if (quantity > 1) {
                    quantity -= 1;
                    input.value = quantity;
                    updateCartTotal();
                }
            });
        });

        // Gắn sự kiện cho nút tăng
        increaseBtns.forEach((button, index) => {
            button.addEventListener('click', () => {
                const input = quantityInputs[index];
                let quantity = parseInt(input.value) || 1;
                quantity += 1;
                input.value = quantity;
                updateCartTotal();

            });
        });
        // Gắn sự kiện cho input số lượng
        quantityInputs.forEach((input) => {
            input.addEventListener('input', () => {
                let quantity = parseInt(input.value);
                if (isNaN(quantity) || quantity < 1) {
                    input.value = 1; // Giá trị nhỏ nhất là 1
                }
                updateCartTotal();
            });
        });

        // Tính toán tổng tiền khi tải trang
        updateCartTotal();



    });
</script>