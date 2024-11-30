<?php
class DangKyController {
    public $name;
    public $email;
    public $pass;
    public $vaitro;

    public function __construct( $lenh, $name, $email, $pass, $vaitro) {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->vaitro = $vaitro;

        $this->index($lenh);
    }

    public function index($lenh) {
        switch ($lenh) {
            case 'them':
                include_once 'Model/dangkymodel.php';
                $model = new DangKyModel();
                $model->themdangky($this->name, $this->email, $this->pass, $this->vaitro);
                include_once 'views/dangnhap.php';
                break;

            default:
                include_once 'views/dangky.php';
                break;
        }
    }
}
?>
