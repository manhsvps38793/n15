<!-- section giới thiệu ends -->
<script>
    function addToCart() {
        const open_popup_cart = document.querySelector('.popup-cart-mobile');
        const close_popup = open_popup_cart.querySelector('.cart_btn-close');
        const continue_shopping = open_popup_cart.querySelector('.btn-extent');

        open_popup_cart.classList.add('active');

        close_popup.addEventListener('click', () => {
            open_popup_cart.classList.remove('active');
        });

        continue_shopping.addEventListener('click', () => {
            open_popup_cart.classList.remove('active');
        });
    }
</script>
<!-- thông báo giỏ hàng starts -->
<div id="popup-cart-mobile" class="popup-cart-mobile" title="active">
    <div class="header-popcart">
        <div class="top-cart-header">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" height="682.66669pt" viewBox="-21 -21 682.66669 682.66669"
                    width="682.66669pt">
                    <path
                        d="m322.820312 387.933594 279.949219-307.273438 36.957031 33.671875-314.339843 345.023438-171.363281-162.902344 34.453124-36.238281zm297.492188-178.867188-38.988281 42.929688c5.660156 21.734375 8.675781 44.523437 8.675781 68.003906 0 148.875-121.125 270-270 270s-270-121.125-270-270 121.125-270 270-270c68.96875 0 131.96875 26.007812 179.746094 68.710938l33.707031-37.113282c-58.761719-52.738281-133.886719-81.597656-213.453125-81.597656-85.472656 0-165.835938 33.285156-226.273438 93.726562-60.441406 60.4375-93.726562 140.800782-93.726562 226.273438s33.285156 165.835938 93.726562 226.273438c60.4375 60.441406 140.800782 93.726562 226.273438 93.726562s165.835938-33.285156 226.273438-93.726562c60.441406-60.4375 93.726562-140.800782 93.726562-226.273438 0-38.46875-6.761719-75.890625-19.6875-110.933594zm0 0">
                    </path>
                </svg>
                Mua hàng thành công
            </span>
        </div>
        <div class="media-content bodycart-mobile">
            <div class="thumb-1x1"><img
                    src="public/img/1.1.webp"
                    alt="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan"></div>
            <div class="body_content">
                <h4 class="product-title"><a href="/set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan"
                        title="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">Set quà 2010 – Maneli
                        #1 bồi bổ sức
                        khỏe, dưỡng nhan</a></h4><span class="variant"></span>
                <div class="product-new-price"><b>500.000₫</b></div>
            </div>
        </div>
        <a class="noti-cart-count" href="/cart" title="Giỏ hàng"> Giỏ hàng của bạn hiện có <span
                class="count_item_pr">5</span> sản phẩm </a>
        <a title="Đóng" class="cart_btn-close iconclose" href="javascript:;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z">
                        </path>
                    </g>
                </g>
            </svg>
        </a>
        <div class="bottom-action">
            <div class="cart_btn-close btn btn-extent">
                Tiếp tục mua hàng
            </div>
            <a href="/checkout" class="checkout btn btn-primary" title="Thanh toán ngay">
                Thanh toán ngay
            </a>
        </div>
    </div>
</div>
<!-- thông báo giỏ hàng ends -->
<div id="js-global-alert" class="alert  alert-success" role="alert">
    <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">×</span></span></button>
    <h5 class="alert-heading">Thêm vào danh sách yêu thích</h5>
    <p class="alert-content">Sản phẩm của bạn đã thêm vào danh sách yêu thích thành công.</p>
</div>
<!-- footer starts -->
<footer class="footer">
    <div class="mid-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-cus-30 footer-info">
                    <div class="logo-footer">
                        <a href="home.php" title="Bird's Nest">
                            <img width="300" height="90" src="public/img/logo_zoom.png" alt="Bird's Nest" class="">
                        </a>
                    </div>
                    <div class="list-menu toggle-mn">
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <b>Địa chỉ: </b>
                                70 Lữ Gia, Phường 15, Quận 11, Tp.HCM
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <b>Điện thoại: </b>
                                <a title="1900 6750" href="tel:19006750">
                                    1900 6750
                                </a>
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                                <b>Email: </b>
                                <a title="support@sapo.vn" href="mailto:support@sapo.vn">
                                    support@sapo.vn
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- icon -->
                    <div class="social-footer">
                        <div class="social">
                            <a href="https://facebook.com/" target="_blank" aria-label="Facebook"
                                title="Theo dõi Bird's Nest trên Facebook">
                                <img class="" width=35 height=35 alt="Facebook" src="public/img/facebook_2.svg" />
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"
                                title="Theo dõi Bird's Nest trên Instagram">
                                <img class="" width=35 height=35 alt="Instagram" src="public/img/instagram_1.svg" />
                            </a>
                            <a href="https://shopee.vn/" target="_blank" aria-label="Shopee"
                                title="Theo dõi Bird's Nest trên Shopee">
                                <img class="" width=35 height=35 alt="Shopee" src="public/img/shopee.svg" />
                            </a>
                            <a href="https://www.lazada.vn/" target="_blank" aria-label="Lazada"
                                title="Theo dõi Bird's Nest trên Lazada">
                                <img class="" width=35 height=35 alt="Lazada" src="public/img/lazada.svg" />
                            </a>
                            <a href="https://www.tiktok.com/vi-VN" target="_blank" aria-label="Tiktok"
                                title="Theo dõi Bird's Nest trên Tiktok">
                                <img class="" width=35 height=35 alt="Tiktok" src="public/img/tiktok.svg" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked">
                        <span>Chính sách</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob">
                        <li class="li_menu">
                            <a href="/chinh-sach-mua-hang" title="Chính sách mua hàng">Chính sách mua
                                hàng</a>
                        </li>
                        <li class="li_menu">
                            <a href="/chinh-sach-thanh-toan" title="Chính sách thanh toán">Chính sách thanh
                                toán</a>
                        </li>
                        <li class="li_menu">
                            <a href="/chinh-sach-van-chuyen" title="Chính sách vận chuyển">Chính sách vận
                                chuyển</a>
                        </li>
                        <li class="li_menu">
                            <a href="/cam-ket-cua-hang" title="Cam kết cửa hàng">Cam kết cửa hàng</a>
                        </li>
                        <li class="li_menu">
                            <a href="/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a>
                        </li>
                        <li class="li_menu">
                            <a href="/chinh-sach-thanh-vien" title="Chính sách thành viên">Chính sách thành
                                viên</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked">
                        <span>Hướng dẫn</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob footer-click">
                        <li class="li_menu">
                            <a href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a>
                        </li>
                        <li class="li_menu">
                            <a href="/huong-dan-doi-tra" title="Hướng dẫn đổi trả">Hướng dẫn đổi trả</a>
                        </li>
                        <li class="li_menu">
                            <a href="/huong-dan-thanh-toan" title="Hướng dẫn thanh toán">Hướng dẫn thanh
                                toán</a>
                        </li>
                        <li class="li_menu">
                            <a href="/quy-dinh-bao-hanh" title="Quy định bảo hành">Quy định bảo hành</a>
                        </li>
                        <li class="li_menu">
                            <a href="/huong-dan-chuyen-khoan" title="Hướng dẫn chuyển khoản">Hướng dẫn
                                chuyển khoản</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-30">
                    <div class="block-payment">
                        <h4 class="title-menu">
                            <span>Hỗ trợ thanh toán</span>
                        </h4>
                        <div class="payment-footer list-menu">
                            <div class="payment-item">
                                <img class="" width=126 height=58 alt="MoMo" src="public/img/payment_1.webp" />
                            </div>
                            <div class="payment-item">
                                <img class="" width=126 height=58 alt="Zalo Pay" src="public/img/payment_2.webp" />
                            </div>
                            <div class="payment-item">
                                <img class="" width=126 height=58 alt="VnPay" src="public/img/payment_3.webp" />
                            </div>
                            <div class="payment-item">
                                <img class="" width=126 height=58 alt="Moca" src="public/img/payment_4.webp" />
                            </div>
                            <div class="payment-item">
                                <img class="" width=126 height=58 alt="Visa" src="public/img/payment_5.webp" />
                            </div>
                            <div class="payment-item">
                                <img class="" width=126 height=58 alt="ATM" src="public/img/payment_6.webp" />
                            </div>
                        </div>
                    </div>
                    <div class="block-certifi">
                        <h4 class="title-menu">
                            <span>Chứng nhận</span>
                        </h4>
                        <div class="certifi-footer">
                            <a href="#" title="Chứng nhận 1" target="_blank">
                                <img width=335 height=108 class="" alt="Chứng nhận 1" src="public/img/chungnhan1.png" />
                            </a>
                            <a href="#" title="Chứng nhận 2" target="_blank">
                                <img width=335 height=108 class="" alt="Chứng nhận 2" src="public/img/chungnhan2.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-footer-bottom copyright clearfix">
        <div class="container">
            <div class="row tablet">
                <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
                    <span class="wsp">

                        <span class="mobile">© Bản quyền thuộc về <b>Yến Sào Việt</b>
                            <span class="dash"> | </span>
                        </span>
                        <span class="opacity1">Sáng lập <b>2024</b></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
</div>
<!-- section body banner ends -->
</body>
</html>