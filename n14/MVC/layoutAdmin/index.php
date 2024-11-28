<?php
include_once 'views/header.php';

$page = isset($_GET['trang']) ? $_GET['trang'] : 'home';
$lenh = isset($_GET['lenh']) ? $_GET['lenh'] : '';
$tendm = '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($lenh == 'them' || $lenh == 'capnhat') {
    $tendm = isset($_POST['tendm']) ? $_POST['tendm'] : '';
} else {
    $tendm = isset($_GET['tendm']) ? $_GET['tendm'] : '';
}

$tensp = '';
$hinh = '';
$giasp = '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($lenh == 'them' || $lenh == 'capnhat') {
    $tensp = isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $giasp = isset($_POST['giasp']) ? $_POST['giasp'] : '';
    $hinh = isset($_POST['hinh']) ? $_POST['hinh'] : '';
} else if ($lenh == 'sua') {
    $tensp = isset($_GET['tensp']) ? $_GET['tensp'] : '';
}

switch ($page) {
    case 'home':
        include_once 'views/home.php';
        break;
    case 'sanpham':
        include_once 'controllers/sanpham_C.php';
        $sanpham_C = new sanpham_C($lenh, $tensp, $id, $hinh, $giasp);
        $sanpham_C->index($lenh);
        break;
    case 'dm_sp':
        include_once 'controllers/thuonghieu_C.php';
        $thuonghieu_C = new Thuonghieu_C($lenh, $tendm, $id);
        $thuonghieu_C->index($lenh);
        break;
    case 'sua':
        include_once 'controllers/thuonghieu_C.php';
        break;
}
?>
