<?php
class HomeController {
    
    public function __construct($id, $iddm) {
        include_once 'Model/homeModel.php';
        $homemodel=new HomeModel();
        if($id != '') {
            $homemodel->onesp($id);
            $homemodel->splq($id,$iddm);
            $homemodel->binhluan($id);
        include_once 'views/chitiet.php';
        }else{
            $homemodel->dssp();
            include_once 'views/home.php';

        }
        
    }
     public function index() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php"); // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
            exit();
        }

        // Truyền thông tin người dùng từ session
        $fullname = $_SESSION['fullname'];
        include('views/home.php');
    }
    


}




?>