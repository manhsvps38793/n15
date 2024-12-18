<link rel="stylesheet" href="public/css/sanphamchitiet.css">
 <?php
     $ch = "";
     foreach ($homemodel->onesp as $b) {
        $formattedNumber1 = number_format($b['Gia'], 0, '.', '.');
             $ch .=  '
<section class="bread-crumb">
    <div class="container">
        <ul class="breadcrumb">
            <li class="home">
                <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                            class=""></path>
                    </svg>&nbsp;</span>
            </li>
            <li>
                <a class="changeurl" href="/my-pham-saffron" title="Mỹ phẩm Saffron"><span>Mỹ phẩm
                        Saffron</span></a>
                <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                            class=""></path>
                    </svg>&nbsp;</span>
            </li>
            <li><strong><span>'.$b['TenSP'].'</span></strong></li>
            <li>
            </li>
        </ul>
    </div>
</section>
<!-- breadcrumbs ends -->
<!-- product-item starts -->
<div class="container">
    <div class="details-product">
        <div class="bg-shadow margin-bottom-20">
            <div class="row">
                <!-- thumbnail starts -->
                <div class="col-lg-6 col-md-12 col-12 product-detail-left product-images">
                    <div class="sticky">
                        <div class="product-image-block relative">
                            <!-- Main Image Slider -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper" id="lightgallery">
                                    <a class="swiper-slide" data-hash="0" href="#" title="Click để xem">
                                       <img src="public/img/'.$b['HinhAnh'].'"
                                            alt="'.$b['TenSP'].'">
                                    </a>
                                    <a class="swiper-slide" data-hash="1" href="#" title="Click để xem">
                                        <img src="public/img/'.$b['HinhAnh1'].'" alt="'.$b['TenSP'].'">
                                    </a>
                                    <a class="swiper-slide" data-hash="2" href="#" title="Click để xem">
                                        <img src="public/img/'.$b['HinhAnh2'].'" alt="'.$b['TenSP'].'">
                                    </a>
                                    <a class="swiper-slide" data-hash="3" href="#" title="Click để xem">
                                        <img src="public/img/'.$b['HinhAnh3'].'" alt="'.$b['TenSP'].'">
                                    </a>
                                </div>
                            </div>
                            <!-- Thumbnail Slider -->
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-hash="0">
                                        <img src="public/img/'.$b['HinhAnh'].'" alt="'.$b['TenSP'].'">
                                    </div>
                                    <div class="swiper-slide" data-hash="1">
                                        <img src="public/img/'.$b['HinhAnh1'].'" alt="'.$b['TenSP'].'">
                                    </div>
                                    <div class="swiper-slide" data-hash="2">
                                        <img src="public/img/'.$b['HinhAnh2'].'" alt="'.$b['TenSP'].'">
                                    </div>
                                    <div class="swiper-slide" data-hash="3">
                                        <img src="public/img/'.$b['HinhAnh3'].'" alt="'.$b['TenSP'].'">
                                    </div>
                                </div>
                                <!-- Navigation -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- thumbnail starts -->
                <div class="col-lg-6 col-md-12 col-12 details-pro">
                    <h1 class="title-product">'.$b['TenSP'].'</h1>
                    <span class="variant-sku">Mã: <span class="a-sku">'.$b['MaSP'].'</span></span>
                    <div class="inventory_quantity">
                        <span class="mb-break">
                            <span class="stock-brand-title">Thương hiệu:</span>
                            <span class="a-vendor">
                                Saffron SHYAM
                            </span>
                        </span>
                        <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <span class="mb-break">
                            <span class="stock-brand-title">Tình trạng:</span>
                            <span class="a-stock">
                                Còn hàng
                            </span>
                        </span>
                    </div>
                    <!-- form start -->
                    <div enctype="multipart/form-data" data-cart-form="" id="add-to-cart-form"
                        action="" method="post" class="form-inline">
                        <div class="product-summary">
                            <div class="rte">
                                <ul>
                                    <li>Cực kỳ ý nghĩa và giá trị giúp chăm sóc sức khỏe, sắc đẹp người nhận
                                        mỗi ngày
                                    </li>
                                    <li>&nbsp;Không lãng phí, không đại trà</li>
                                    <li>&nbsp;Món quà thể hiện sự quan tâm chân thành</li>
                                    <li>&nbsp;Túi hộp thiết kế vô cùng sang trọng, thể hiện sự chỉn chu tinh
                                        tế khi tặng
                                        quà</li>
                                </ul>
                            </div>
                        </div>
                       <span class="sale" style="width: 100% display: block;">
                        <a class="block-flashsale sale" href="sanpham.html" title="Xem ngay" >
                            <div class="heading-flash">
                                <!-- icon lửa -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 16 16">
                                    <defs>
                                        <linearGradient id="prefix__a" x1="50%" x2="50%" y1="36.31%"
                                            y2="88.973%">
                                            <stop offset="0%" stop-color="#FDD835"></stop>
                                            <stop offset="100%" stop-color="#FFB500"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M0 0H16V16H0z"></path>
                                        <path fill="url(#prefix__a)" stroke="#FF424E" stroke-width="1.1"
                                            d="M9.636 6.506S10.34 2.667 7.454 1c-.087 1.334-.786 2.571-1.923 3.401-1.234 1-3.555 3.249-3.53 5.646-.017 2.091 1.253 4.01 3.277 4.953.072-.935.549-1.804 1.324-2.41.656-.466 1.082-1.155 1.182-1.912 1.729.846 2.847 2.469 2.944 4.27v.012c1.909-.807 3.165-2.533 3.251-4.467.205-2.254-1.134-5.316-2.321-6.317-.448.923-1.144 1.725-2.022 2.33z"
                                            transform="rotate(4 8 8)"></path>
                                    </g>
                                </svg>
                                <!-- icon lửa -->
                                Hot sale năm mới
                            </div>
                            <!-- times -->
                            
                            <div class="count-down">
                             <p class="title-count">
                                    Kết thúc sau:
                                </p>
                            <div class="timer-view" id="countdown">
                                <div class="block-timer">
                                    <p id="days" style="font-weight: bold;"></p><span>Ngày</span>
                                </div>
                                <div class="block-timer">
                                    <p id="hours" style="font-weight: bold;"></p><span>Giờ</span>
                                </div>
                                <div class="block-timer">
                                    <p id="minutes" style="font-weight: bold;"></p><span>Phút</span>
                                </div>
                                <div class="block-timer">
                                    <p id="seconds" style="font-weight: bold;"></p><span>Giây</span>
                                </div>
                            </div>
                        </div>
                            
                        </a>
                        <div class="block-promotion" >
                            <div class="heading-promo">
                                <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M152 0H154.2C186.1 0 215.7 16.91 231.9 44.45L256 85.46L280.1 44.45C296.3 16.91 325.9 0 357.8 0H360C408.6 0 448 39.4 448 88C448 102.4 444.5 115.1 438.4 128H480C497.7 128 512 142.3 512 160V224C512 241.7 497.7 256 480 256H32C14.33 256 0 241.7 0 224V160C0 142.3 14.33 128 32 128H73.6C67.46 115.1 64 102.4 64 88C64 39.4 103.4 0 152 0zM190.5 68.78C182.9 55.91 169.1 48 154.2 48H152C129.9 48 112 65.91 112 88C112 110.1 129.9 128 152 128H225.3L190.5 68.78zM360 48H357.8C342.9 48 329.1 55.91 321.5 68.78L286.7 128H360C382.1 128 400 110.1 400 88C400 65.91 382.1 48 360 48V48zM32 288H224V512H80C53.49 512 32 490.5 32 464V288zM288 512V288H480V464C480 490.5 458.5 512 432 512H288z"></path></svg>
                                Quà tặng dành cho bạn:
                            </div>
                            <div class="promo-content">
                                <ul>
                                <li><span>Tặng thêm 1 Son Dưỡng Cira Lipbalm</span></li>
                                <li><span>Chương trình khuyến mại Pre Order áp dụng từ 01/11 – 23/11/2024</span></li>
                                </ul>
                            </div>
                        </div>

                        </span>

                        <div class="price-box clearfix">
                            <span class="special-price">
                                <span class="price product-price">'.$formattedNumber1.'</span>
                                <meta itemprop="price" content="500000">
                                <meta itemprop="priceCurrency" content="VND">
                            </span> <!-- Giá Khuyến mại -->
                            <span class="old-price" itemprop="priceSpecification" itemscope=""
                                itemtype="http://schema.org/priceSpecification">
                                <del class="price product-price-old">
                                    799.000₫
                                </del>
                                <meta itemprop="price" content="799000">
                                <meta itemprop="priceCurrency" content="VND">
                            </span> <!-- Giás gốc -->
                            <span class="sale-off">-
                                37%
                            </span>
                        </div>
                        <div class="form-product">
                            <div class="box-variant clearfix  d-none ">
                                <input type="hidden" id="one_variant" name="variantId" value="110202248">
                            </div>
                            <div class="boz-form ">
                                <div class="flex-quantity">
                                    <div class="custom custom-btn-number show">
                                        <span>Số lượng: </span>
                                        <div class="input_number_product">
                                            <button class="btn_num num_1 button button_qty"
                                                onclick="var result = document.getElementById(); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 1 ) result.value--;return false;"
                                                type="button">-</button>
                                            <input type="number" id="qtym" name="quantity" value="1" readonly min="1"
                                                maxlength="3" class="form-control prd_quantity"
                                                onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                onchange="if(this.value == 0)this.value=1;" >
                                            <button class="btn_num num_2 button button_qty"
                                                onclick="var result = document.getElementById(); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                type="button"><span>+</span></button>
                                        </div>
                                    </div>
                                    <div class="btn-mua button_actions clearfix">
                                        <button class="btn-buyNow btn btn-primary">
                                            <span class="txt-main">Mua ngay</span>
                                        </button>

                                    <form action="index.php?trang=giohang" method="post"  style="margin-bottom: 0px !important;">
                                        <input type="hidden" name="ten" value="'.$b['TenSP'].'">
                                        <input type="hidden" name="hinh" value="'.$b['HinhAnh'].'">
                                        <input type="hidden" name="gia" value="'.$b['Gia'].'">
                                        <input type="hidden" name="id" value="'.$b['MaSP'].'">
                                        <input type="hidden" name="quantity" id="quantity" value="1" required>

                                        <button type="submit" name="themgh" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart btn-extent is-added">
                                            <span class="txt-main">Thêm vào giỏ</span>
                                        </button>
                                    </form>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form start -->
                    <div class="bottom-product">
                        <ul class="social-media" role="list">
                            <li class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                    <path
                                        d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3">
                                    </path>
                                </svg>
                                Chia sẻ
                            </li>
                            <li class="social-media__item social-media__item--facebook">
                                <a title="Chia sẻ lên Facebook" href="#" target="_blank" rel="noopener"
                                    aria-label="Chia sẻ lên Facebook">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 155.139 155.139"
                                        style="enable-background:new 0 0 155.139 155.139;"
                                        xml:space="preserve">
                                        <g>
                                            <path id="f_1_" style="fill:#010002;"
                                                d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="social-media__item social-media__item--pinterest">
                                <a title="Chia sẻ lên Pinterest" href="#&" target="_blank" rel="noopener"
                                    aria-label="Pinterest">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 511.977 511.977"
                                        style="enable-background:new 0 0 511.977 511.977;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16 c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896 c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304 c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36 c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048 S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568 c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584 c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="social-media__item social-media__item--twitter">
                                <a title="Chia sẻ lên Twitter" href="#" target="_blank" rel="noopener"
                                    aria-label="Tweet on Twitter">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016 c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992 c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056 c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152 c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792 c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44 C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568 C480.224,136.96,497.728,118.496,512,97.248z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="line"></div>
                        <div class="product-wish">
                            <a href="javascript:void(0)" class="setWishlist btn-views"
                                data-wish="set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" tabindex="0"
                                title="Thêm vào yêu thích">
                                <img width="25" height="25" src="public/img/heart.webp" alt="Thêm vào yêu thích">
                                Thêm vào yêu thích
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 product-coupons margin-bottom-20">
                <div class="bg-shadow">
                    <div class="title">Khuyến mãi dành cho bạn</div>
                    <div
                        class="swiper_coupons swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active"
                                style="width: 295.75px; margin-right: 16px;">
                                <div class="box-coupon">
                                    <div class="mask-ticket">
                                    </div>
                                    <div class="image">
                                        <img width="88" height="88" class="# loaded"
                                            src="public/img/img_coupon_1.webp" alt="NEST200"
                                            data-was-processed="true">
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
                                            <span class="line-clamp line-clamp-2">Giảm 200k giá trị đơn
                                                hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 12/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NEST200"
                                                title="Sao chép">Copy
                                                mã</div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="swiper-slide swiper-slide-next"
                                style="width: 295.75px; margin-right: 16px;">
                                <div class="box-coupon">
                                    <div class="mask-ticket">
                                    </div>
                                    <div class="image">
                                        <img width="88" height="88" class="# loaded"
                                            src="public/img/img_coupon_1.webp" alt="NEST100"
                                            data-was-processed="true">
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
                                            <span class="line-clamp line-clamp-2">Giảm 100k giá trị đơn
                                                hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 24/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NEST100"
                                                title="Sao chép">Copy
                                                mã</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 295.75px; margin-right: 16px;">
                                <div class="box-coupon">
                                    <div class="mask-ticket">
                                    </div>
                                    <div class="image">
                                        <img width="88" height="88" class="# loaded"
                                            src="public/img/img_coupon_1.webp" alt="NEST50"
                                            data-was-processed="true">
                                    </div>
                                    <div class="content_wrap">
                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                            data-coupon="NEST50" data-time="25/12/2024"
                                            data-content="Áp dụng cho đơn hàng từ <b>1,500,000đ</b> trở lên Không đi kèm với chương trình khác">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                <path
                                                    d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="content-top">
                                            NEST50
                                            <span class="line-clamp line-clamp-2">Giảm 50k giá trị đơn
                                                hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 25/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NEST50"
                                                title="Sao chép">Copy mã
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="width: 295.75px; margin-right: 16px;">
                                <div class="box-coupon">
                                    <div class="mask-ticket">
                                    </div>
                                    <div class="image">
                                        <img width="88" height="88" class="# loaded"
                                            src="public/img/img_coupon_1.webp" alt="NESTFREESHIP"
                                            data-was-processed="true">
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
                                            <span class="line-clamp line-clamp-2">Miễn phí giao hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 25/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NESTFREESHIP"
                                                title="Sao chép">
                                                Copy mã</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev swiper-button-disabled swiper-button-lock">
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
                        <div class="swiper-button-next swiper-button-disabled swiper-button-lock">
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
            <div class="popup-coupon">
                <div class="content">
                    <div class="title">
                        Thông tin voucher
                    </div>
                    <div class="close-popup-coupon" title="Đóng">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                            style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
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
            </div>

            <div class="col-12 margin-bottom-20">
                <div class="bg-shadow">
                    <div class="row">
                        <div class="col-12 product-review-details  col-lg-8">
                            <div class="product-tab e-tabs not-dqtab">
                                <ul class="tabs tabs-title clearfix">

                                    <li class="tab-link active" data-tab="#tab-1">
                                        <h3>Mô tả sản phẩm</h3>
                                    </li>


                                    <li class="tab-link" data-tab="#tab-2">
                                        <h3>Hướng dẫn mua hàng</h3>
                                    </li>


                                    <li class="tab-link" data-tab="#tab-3">
                                        <h3>Đánh giá</h3>
                                    </li>
                                </ul>
                                <div class="tab-float">
                                    <div id="tab-1" class="tab-content  content_extab active">
                                        <div class="rte product_getcontent product-review-content">
                                            <div class="ba-text-fpt has-height">
                                                <p>'.$b['MoTa'].'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-content content_extab">
                                        <div class="rte">

                                            <p><strong>Bước 1</strong>: Truy cập website và lựa chọn sản
                                                phẩm cần mua để
                                                mua hàng</p>
                                            <p><strong>Bước 2</strong>: Click và sản phẩm muốn mua, màn hình
                                                hiển thị ra
                                                pop up với các lựa chọn sau</p>
                                            <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua
                                                hàng để lựa
                                                chọn thêm sản phẩm vào giỏ hàng</p>
                                            <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem
                                                giỏ hàng</p>
                                            <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng
                                                bấm vào:
                                                Đặt hàng và thanh toán</p>
                                            <p><strong>Bước 3</strong>: Lựa chọn thông tin tài khoản thanh
                                                toán</p>
                                            <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập
                                                là email và
                                                mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                            <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng
                                                điền các
                                                thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài
                                                khoản bạn sẽ
                                                dễ dàng theo dõi được đơn hàng của mình</p>
                                            <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp
                                                chuột vào mục
                                                đặt hàng không cần tài khoản</p>
                                            <p><strong>Bước 4</strong>: Điền các thông tin của bạn để nhận
                                                đơn hàng, lựa
                                                chọn hình thức thanh toán và vận chuyển cho đơn hàng của
                                                mình</p>
                                            <p><strong>Bước 5</strong>: Xem lại thông tin đặt hàng, điền chú
                                                thích và
                                                gửi đơn hàng</p>
                                            <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng
                                                cách gọi
                                                điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                            <p>Trân trọng cảm ơn.</p>
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-content  content_extab">
                                        <div class="rte">
                                            <!-- Review Section -->
                                            <div class="comment-alt ">
                                                <h2 class="title-text">Đánh Giá Sản Phẩm :</h2>
                                                <!-- Overall Rating -->
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="text-warning me-2">
                                                        <i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i>
                                                    </div>
                                                    <span class="text-muted ms-2"> 5 / 5 (25k đánh
                                                        giá)</span>
                                                </div>
                                                <p class="text-muted mb-4">Hình Ảnh Từ Người Mua</p>
                                                <!-- Review 1 -->
                                                <div class="user-review">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <img src="public/img/facebook_2.svg" alt="Reviewer 1"
                                                            class="rounded-circle" width="50" height="50">
                                                        <div class="ms-3">
                                                            <div class="text-user">Nguyễn Văn Triều</div>
                                                            <div class="text-warning">
                                                                <i class="fas fa-star"></i><i
                                                                    class="fas fa-star"></i><i
                                                                    class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i><i
                                                                    class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0"><strong>Tên Sản Phẩm:</strong> Yến Sào
                                                        Cao Cấp Loại 1</p>
                                                    <p class="mb-3"><strong>Mô Tả:</strong> Chắc Lượng Trên
                                                        Cả Tuyệt Vời Tôi Mới Ăn Thử Vào 1 Hủ Thôi Mà Tôi Đã
                                                        Đi Bệnh
                                                        Viện Cả 1 Tuần Đánh Giá Cho Shop 5 Sao Nha</p>
                                                    <div class="d-flex">
                                                        <img src="https://storage.googleapis.com/a1aa/image/5sIzgYFK64KeNCMwqS881dLJ2ta9HDU2kvPMuljSnLpZHp4JA.jpg"
                                                            alt="Product 1" class="mr-3" width="100"
                                                            height="100">
                                                        <img src="https://storage.googleapis.com/a1aa/image/5sIzgYFK64KeNCMwqS881dLJ2ta9HDU2kvPMuljSnLpZHp4JA.jpg"
                                                            alt="Product 1" class="mr-3" width="100"
                                                            height="100">
                                                    </div>
                                                </div>

                                                <!-- Review 2 -->
                                                <div class="user-review">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <img src="public/img/facebook_2.svg" alt="Reviewer 2"
                                                            class="rounded-circle" width="50" height="50">
                                                        <div class="ms-3">
                                                            <div class="text-user">Nguyễn Tuấn Anh</div>
                                                            <div class="text-warning">
                                                                <i class="fas fa-star"></i><i
                                                                    class="fas fa-star"></i><i
                                                                    class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i><i
                                                                    class="fas fa-star-half-alt"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0"><strong>Tên Sản Phẩm:</strong> Yến Sào
                                                        Cao Cấp Loại 2</p>
                                                    <p class="mb-3"><strong>Mô Tả:</strong> Tôi Không Biết
                                                        Gì Cả Tôi Thấy Thằng Trên Mua Nên Tôi Mua Theo Nè
                                                    </p>
                                                    <div class="d-flex">
                                                        <img src="https://storage.googleapis.com/a1aa/image/5sIzgYFK64KeNCMwqS881dLJ2ta9HDU2kvPMuljSnLpZHp4JA.jpg"
                                                            alt="Product 1" class="mr-3" width="100"
                                                            height="100">
                                                        <img src="https://storage.googleapis.com/a1aa/image/5sIzgYFK64KeNCMwqS881dLJ2ta9HDU2kvPMuljSnLpZHp4JA.jpg"
                                                            alt="Product 1" class="mr-3" width="100"
                                                            height="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 product-sidebar">
                            <div class="sticky-box">
                                <div class="section-viewed-product recent-page-viewed">
                                    <h2>
                                        <span>
                                            Bạn đã xem
                                        </span>
                                    </h2>
                                    <div class="product-viewed-content">
                                        <div class="product-view">
                                            <a class="image_thumb" href="/to-yen-tinh-che-vip-loai-1"
                                                title="Tổ Yến Tinh Chế VIP Loại 1">
                                                <img width="370" height="480" class="lazyload loaded"
                                                    src="./public/img/sp6.webp" alt="Tổ Yến Tinh Chế VIP Loại 1"
                                                    data-was-processed="true">
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a
                                                        href="/to-yen-tinh-che-vip-loai-1"
                                                        title="Tổ Yến Tinh Chế VIP Loại 1"
                                                        class="line-clamp line-clamp-3-new">Tổ Yến Tinh Chế
                                                        VIP Loại 1</a></h3>
                                                <div class="price-box">
                                                    <span class="price">2.150.000₫</span>
                                                    <span class="compare-price">2.350.000₫</span>
                                                </div>
                                                <a class="view-more" href="/to-yen-tinh-che-vip-loai-1"
                                                    title="Xem chi tiết">Xem chi tiết »</a>
                                            </div>
                                        </div>
                                        <!-- sp2 -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- ends -->
                            ';
             echo $ch;
            }
?>        
       
            <div class="col-12 product-related product-swipers">
                <div class="bg-shadow">
                    <h2>
                        <a href="/my-pham-saffron" title="Sản phẩm liên quan">
                            Sản phẩm liên quan
                        </a>
                    </h2>
                    <div
                        class="swiper_product_related swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <!-- sp1 -->
                             <?php
                                $x = 0;
                                $ch = '';
                                foreach($homemodel->splq as $key => $value){
                                    $formattedNumber1 = number_format($value['Gia'], 0, '.', '.');
                                    $ch .= '
                            <div class="swiper-slide swiper-slide-active"
                                style="width: 292.75px; margin-right: 20px;">
                                <div class="item_product_main">
                                    <div action="#" method="post" class="variants product-action item-product-main duration-300"
                                        data-cart-form="" data-id="product-actions-34621119"
                                        enctype="multipart/form-data">
                                        <div class="tag-promo" title="Quà tặng">
                                            <img src="./public/img/tag-qua.svg" alt="Quà tặng" class="#">
                                            <div class="promotion-content">
                                                <div class="line-clamp-5-new"
                                                    title=" Tặng bình thủy tinh 300ml Freeship từ 2 gram ">
                                                    <ul>
                                                        <li><span style="letter-spacing: -0.2px;">Tặng bình
                                                                thủy tinh
                                                                300ml</span></li>
                                                        <li><span style="letter-spacing: -0.2px;">Freeship
                                                                từ 2
                                                                gram</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover"
                                                href="index.php?trang=home&id='.$value['MaSP'].'&iddm='.$value['MaDM'].'"
                                                title="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic">
                                                <img class="# duration-300" src="./public/img/'.$value['HinhAnh'].'"
                                                    alt="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="name-price">
                                                <h3 class="product-name line-clamp-2-new">
                                                    <a href="/saffron-shyam-1gr-nhuy-hoa-nghe-tay-organic"
                                                        title="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic">'.$value['TenSP'].'</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <span class="price">'.$formattedNumber1.'₫</span>
                                                </div>
                                            </div>
                                            <div class="product-button">
                                                <input type="hidden" name="variantId" value="110202522">


                                   <form action="index.php?trang=giohang" method="post" style="margin-bottom: 0px !important;">
                                        <input type="hidden" name="ten" value="'.$value["TenSP"].'">
                                        <input type="hidden" name="hinh" value='.$value["HinhAnh"].'>
                                        <input type="hidden" name="gia" value='.$value["Gia"].'>
                                        <input type="hidden" name="id" value='.$value["MaSP"].'>
                                        
                                        
                                        <button type="submit" name="themgh" class="btn-cart btn-views add_to_cart btn btn-primary is-added">
                                            <span class="txt-main">Thêm vào giỏ</span>
                                        </button>
                                    </form>




                                                <a href="javascript:void(0)"
                                                    class="setWishlist btn-views btn-circle"
                                                    data-wish="saffron-shyam-1gr-nhuy-hoa-nghe-tay-organic"
                                                    tabindex="0" title="Thêm vào yêu thích">
                                                    <img width="25" height="25" src="public/img/heart.webp"
                                                        alt="Thêm vào yêu thích">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            $x++;
                            if($x == 6){
                                echo $ch;
                            }
                            }
                                ?>

                            

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
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>';
<script>
const plus = document.querySelector('.num_2');
const minus = document.querySelector('.num_1');
const inputNum = document.querySelector('.prd_quantity');
const soluong = document.getElementById('quantity');
plus.onclick = () => {
    inputNum.value = parseInt(inputNum.value) + 1;
    soluong.value = inputNum.value
    console.log(soluong.value);
    
};

minus.onclick = () => {
    inputNum.value = parseInt(inputNum.value) - 1;
    soluong.value = inputNum.value
    console.log(soluong.value);

};
soluong.value = inputNum.value;



</script>