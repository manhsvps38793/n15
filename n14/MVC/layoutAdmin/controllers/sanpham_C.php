<?php
class sanpham_C {
    public $tensp;
    public $hinh;
    public function __construct($lenh,$tensp,$hinh) {
        $this->tensp=$tensp;
        $this->tensp=$hinh;
    }

    public function index($lenh) {
        switch($lenh) {
            case '':
                include_once 'models/sanpham_M.php';
                $th = new sanpham_M();
                $mangth = $th->dssp();
                include_once 'views/product.php';
                break;
            // case 'them':
            //     include_once 'models/sanpham_M.php';
            //     $th=new sanpham_M();
            //     $th->themsp($this->tensp,$this->hinh);
            //     $mangth = $th->dsth();
            //     include_once 'views/product.php';
            //     break;
        }
    }
}
?>
