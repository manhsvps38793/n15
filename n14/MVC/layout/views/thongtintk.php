<link href="public/css/thongtintk.css" rel="stylesheet" type="text/css" media="all" />

			<section class="bread-crumb">
	<div class="container">
		<ul class="breadcrumb">					
			<li class="home">
				<a href="/" title="Trang chủ"><span>Trang chủ</span></a>						
				<span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>&nbsp;</span>
			</li>
			
			<li><strong><span>Trang khách hàng</span></strong></li>
			
		</ul>
	</div>
</section>
<section class="signup page_customer_account">
	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
				<div class="block-account bg-shadow">
					<h5 class="title-account">Trang tài khoản</h5>
<?php
                    include_once 'Model/connectmodel.php';
                    $connectModel = new ConnectModel();
                    $query = "SELECT TenTK, VaiTro FROM taikhoan";
                    $result = $connectModel->selectall($query);
                    $as = '';
                    foreach($result as $x) {
                     $as ='   <p>Xin chào, <span style="color:#8d251c;">'.$x['TenTK'].'</span>&nbsp;!</p>';
                    }
                    echo $as;
?>

					<ul>
						<li>
							<a disabled="disabled" class="title-info active" title="Thông tin tài khoản" href="index.php?trang=thongtintk&use=nhap">Thông tin tài khoản</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=donhang&use=nhap" title="Đơn hàng của bạn">Đơn hàng của bạn</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=doimk&use=nhap" title="Đổi mật khẩu">Đổi mật khẩu</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=diachi&use=nhap" title="Sổ địa chỉ (0)">Địa chỉ (1)</a>
						</li>
						<li>
							<a class="title-info" href="index.php?trang=home" title="Đăng xuất">Đăng xuất</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
				<div class="bg-shadow">
					<h1 class="title-head margin-top-0">Thông tin tài khoản</h1>

                    <?php
                    include_once 'Model/connectmodel.php';
                    $connectModel = new ConnectModel();
                    $query = "SELECT * FROM taikhoan";
                    $result = $connectModel->selectall($query);
                    $ch ='';
                    foreach($result as $x) {
                     $ch = '<div class="form-signup name-account m992">
						<p><strong>Họ tên:</strong>'.$x['TenTK'].'</p>
						<p> <strong>Email:</strong>'.$x['Email'].'</p>
					</div>';
                    }
                    echo $ch;
?>

					
				</div>
			</div>
		</div>
	</div>
</section>
			<div id="js-global-alert" class="alert alert-success" role="alert" datasqstyle="{&quot;top&quot;:null}" datasquuid="2a45a372-f932-41de-96ed-fd4891dbf6c6" datasqtop="45" style="top: 45px;">
				<button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">×</span></span></button>
				<h5 class="alert-heading"></h5>
				<p class="alert-content"></p>
			</div>
			
			

























		</div>
        <!-- footer starts -->
        <footer class="footer">
            <div class="mid-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-cus-30 footer-info">
                            <div class="logo-footer">
                                <a href="#" title="Bird's Nest">
                                    <img width="300" height="90" src="img/logo_zoom.png" alt="Bird's Nest" class="">
                                </a>
                            </div>
                            <div class="list-menu toggle-mn">
                                <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                        <b>Địa chỉ: </b>
                                        70 Lữ Gia, Phường 15, Quận 11, Tp.HCM
                                    </span>
                                </div>
                                <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
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
                                        <img class="" width=35 height=35 alt="Facebook" src="img/facebook_2.svg" />
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"
                                        title="Theo dõi Bird's Nest trên Instagram">
                                        <img class="" width=35 height=35 alt="Instagram"
                                            src="img/instagram_1.svg" />
                                    </a>
                                    <a href="https://shopee.vn/" target="_blank" aria-label="Shopee"
                                        title="Theo dõi Bird's Nest trên Shopee">
                                        <img class="" width=35 height=35 alt="Shopee" src="img/shopee.svg" />
                                    </a>
                                    <a href="https://www.lazada.vn/" target="_blank" aria-label="Lazada"
                                        title="Theo dõi Bird's Nest trên Lazada">
                                        <img class="" width=35 height=35 alt="Lazada" src="img/lazada.svg" />
                                    </a>
                                    <a href="https://www.tiktok.com/vi-VN" target="_blank" aria-label="Tiktok"
                                        title="Theo dõi Bird's Nest trên Tiktok">
                                        <img class="" width=35 height=35 alt="Tiktok" src="img/tiktok.svg" />
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
                                        <img class="" width=126 height=58 alt="MoMo" src="img/payment_1.webp" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="" width=126 height=58 alt="Zalo Pay" src="img/payment_2.webp" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="" width=126 height=58 alt="VnPay" src="img/payment_3.webp" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="" width=126 height=58 alt="Moca" src="img/payment_4.webp" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="" width=126 height=58 alt="Visa" src="img/payment_5.webp" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="" width=126 height=58 alt="ATM" src="img/payment_6.webp" />
                                    </div>
                                </div>
                            </div>
                            <div class="block-certifi">
                                <h4 class="title-menu">
                                    <span>Chứng nhận</span>
                                </h4>
                                <div class="certifi-footer">
                                    <a href="#" title="Chứng nhận 1" target="_blank">
                                        <img width=335 height=108 class="" alt="Chứng nhận 1"
                                            src="img/chungnhan1.png" />
                                    </a>
                                    <a href="#" title="Chứng nhận 2" target="_blank">
                                        <img width=335 height=108 class="" alt="Chứng nhận 2"
                                            src="img/chungnhan2.png" />
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

                    <a href="#" class="backtop" title="Lên đầu trang">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                            stroke="black" fill="#fff" stroke-width="2" />
                            <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                            fill="black" />
                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                </div>
            </div>
        </footer>
        <!-- Footer end -->
</body>
</html>