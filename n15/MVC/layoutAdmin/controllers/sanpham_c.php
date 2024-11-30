<?php
class sanpham_C { 
    public $ten;
    public $gia;
    public $mota;
    public $iddm;
    public $hinh;
    public $id;
    public $tenhinh;
    public function __construct($lenh, $ten, $gia, $mota, $iddm, $hinh,$id,$tenhinh) {
        $this->ten=$ten;
        $this->gia=$gia;
        $this->mota=$mota;
        $this->iddm=$iddm;
        $this->hinh=$hinh;
        $this->id=$id;
        $this->tenhinh=$tenhinh;
       
    }

    public function index($lenh) {
        switch($lenh) {
            case '':
                include_once 'models/sanpham_M.php';
                    $th = new sanpham_M();
                    $mangth = $th->dssp();
                    include_once 'views/quanlySanpham.php';
                break;
            case 'them':
                include_once 'models/sanpham_M.php';
                $th=new sanpham_M();
                $th->themsp($this->ten,$this->gia,$this->mota,$this->iddm,$this->hinh["name"]);
                move_uploaded_file($this->hinh['tmp_name'],'../layout/public/img/'.$this->hinh['name']);
                $mangth = $th->dssp();
                include_once 'views/quanlySanpham.php';
                break;
            case 'xoa':
                include_once 'models/sanpham_M.php';
                $th=new sanpham_M();
                $th->xoasp($this->id);
                $imagePath = '../layout/public/img/'.$this->tenhinh;
                $mangth = $th->dssp();
                include_once 'views/quanlySanpham.php';
                break;
            case 'sua':
                include_once 'models/sanpham_M.php';
                $th = new sanpham_M();
                $mautin = $th->mtsua($this->id);
                include_once 'views/sua.php';
                break;
            case 'capnhat':
                include_once 'models/sanpham_M.php';
                $th = new sanpham_M();
                if ($this->hinh['name'] == '') {
                    $tenx = $this->tenhinh;
                } else {
                    $tenx = $this->hinh['name'];
                }
                $th->capnhatsp($this->id, $this->ten, $tenx, $this->iddm, $this->gia, $tenx , $this->mota);
            
                if($this->hinh['name']!=''){
                    $upload = move_uploaded_file($this->hinh['tmp_name'], '../layout/public/img/' . $this->hinh['name']);
                    unlink('../layout/public/img/'.$this->tenhinh);
                }

                $mangth = $th->dssp();
                include_once 'views/quanlySanpham.php';

                break;
            }
        }
}
?>
