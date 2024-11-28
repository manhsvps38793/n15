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
		