<?php
session_start();
ob_start(); 

// Lấy các tham số từ URL
$page = isset($_GET['trang']) ? $_GET['trang'] : 'home';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$iddm = isset($_GET['iddm']) ? $_GET['iddm'] : '';

// Các tham số khác
$lenh = isset($_GET['lenh']) ? $_GET['lenh'] : '';
$name = '';
$email = '';
$pass = '';
$vaitro = '';
if ($lenh == 'them') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    $vaitro = 'khachhang';
}

// Xử lý đăng nhập
$dnemail = '';
$dnpass = '';
if ($lenh == 'them') {
    $dnemail = isset($_POST['dnemail']) ? $_POST['dnemail'] : '';
    $dnpass = isset($_POST['dnpass']) ? $_POST['dnpass'] : '';
}


$use = isset($_GET['use']) ? $_GET['use'] : '';

if($use === 'nhap'){
    include_once 'views/headeruse.php';
    if($page === 'blog' && $use === 'nhap') {
        include_once 'Controllers/blogController.php';
            $blogController = new blogController();
    }
}else {
    include_once 'views/header.php';
}







    switch ($page) {
        case 'home':
            include_once 'Controllers/HomeController.php';
            $HomeController = new HomeController($id, $iddm);
            break;
        case 'dangky':
            include_once 'Controllers/dangkyController.php';
            $dangkyController = new dangkyController($lenh, $name, $email, $pass, $vaitro);
            break;
        case 'dangnhap':
            include_once 'Controllers/dangnhapController.php';
            $dangnhapController = new dangnhapController($lenh, $dnemail, $dnpass);
            break;
        case 'product':
            include_once 'Controllers/ProducController.php';
            $ProducController = new ProducController();
            break;
            //tim kiem
        case 'producttk':
            include_once 'Controllers/ProducController.php';
            $ProductController = new ProductController();
            break;
            ///////
        case 'giohang':
            include_once 'Controllers/giohangController.php';
            $giohangController = new giohangController();
            break;
        case 'gioithieu':
            include_once 'Controllers/gioithieuController.php';
            $gioithieuController = new gioithieuController();
            break;
        case 'lienhe':
            include_once 'Controllers/lienheController.php';
            $lienheController = new lienheController();
            break;
        case 'blog':
            include_once 'Controllers/blogController.php';
            $blogController = new blogController();
            break;
        case 'thongtintk':
            include_once 'Controllers/thongtintkController.php';
            $thongtintkController = new thongtintkController();
            break;
        case 'donhang':
            include_once 'Controllers/donhangController.php';
            $donhangController = new donhangController();
            break;
        case 'doimk':
            include_once 'Controllers/doimkController.php';
            $doimkController = new doimkController();
            break;
        case 'diachi':
            include_once 'Controllers/diachiController.php';
            $diachiController = new diachiController();
            break;
        
    }
    
    include_once 'views/footer.php';


?>
