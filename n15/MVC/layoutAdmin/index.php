<?php
include_once 'views/header.php';

$page = isset($_GET['trang']) ? $_GET['trang'] : 'home';

$lenh = isset($_GET['lenh']) ? $_GET['lenh'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$ten = '';
$gia = '';
$mota = '';
$iddm = '';
$hinh = '';
$tenhinh ='';

if ($lenh == 'them' || $lenh == 'capnhat') {
    $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
    $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
    $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
    $iddm = isset($_POST['iddm']) ? $_POST['iddm'] : '';
    $hinh = isset($_FILES['hinh']) ? $_FILES['hinh'] : '';
    $tenhinh = isset($_GET['tenhinh']) ? $_GET['tenhinh'] : '';

} else if ($lenh == 'sua') {
    $ten = isset($_GET['ten']) ? $_GET['ten'] : '';
}


switch ($page) {
    case 'home':
        include_once 'views/thongkesolieu.php';
        break;
    case 'sanpham':
        include_once 'controllers/sanpham_C.php';
        $sanpham_C = new sanpham_c($lenh, $ten, $gia, $mota, $iddm, $hinh,$id,$tenhinh);
        $sanpham_C->index($lenh);
        break;
    case 'admin':
        include_once 'controllers/admin_C.php';
        $admin_c = new admin_c();
        break;
    case 'user':
        include_once 'controllers/user_C.php';
        $user_c = new user_c();
        break;
    case 'donhang':
        include_once 'controllers/donhang_C.php';
        $donhang_c = new donhang_c();
        break;
    case 'danhgia':
        include_once 'controllers/danhgia_C.php';
        $danhgia_c = new danhgia_c();
        break;
}
?>