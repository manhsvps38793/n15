<?php
session_start();  
//xóa
if (isset($_GET['ma']) && $_GET['ma'] == 'xoa' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
            foreach ($_SESSION['giohang'] as $key => $item) {
                if (isset($item['id']) && $item['id'] == $id) {
                    if (isset($item['sl']) && $item['sl'] > 1) {
                        $_SESSION['giohang'][$key]['sl']--;
                    } else {
                        unset($_SESSION['giohang'][$key]);
                        $_SESSION['giohang'] = array_values($_SESSION['giohang']);
                    }
                    break;
                }
            }
        }
    }

    header('Location: ../index.php?trang=giohang');
    exit;
}
?>

