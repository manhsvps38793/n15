<?php
class DangNhapController {
    public $dnemail;
    public $dnpass;

    public function __construct($lenh, $dnemail, $dnpass) {
        $this->dnemail = $dnemail;
        $this->dnpass = $dnpass;
        $this->index($lenh);
        
    }

    public function index($lenh) {
        switch ($lenh) {
            case 'them':
                include_once 'Model/dangnhapmodel.php';
                $model = new DangNhapModel();
                $model->themDangNhap($this->dnemail, $this->dnpass);
                include_once 'views/dangnhap.php';

                break;
            default:
                include_once 'views/dangnhap.php';
                break;
        }
    }
}

?>
