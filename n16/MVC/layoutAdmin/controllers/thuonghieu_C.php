<?php
class Thuonghieu_C{
    public $tendm;
    public $id;


    
    public function __construct($lenh,$tendm,$id){
        $this->tendm=$tendm;
        $this->id=$id;
    }
    public function index($lenh) {
        switch($lenh) {
            case '':
                    include_once 'models/thuonghieu_M.php';
                    $th=new thuonghieu_M();
                    $mangth = $th->dsth();
                    include_once 'views/dm_sp.php';
                break;
            case 'them':
                include_once 'models/thuonghieu_M.php';
                $th=new thuonghieu_M();
                $th->themdm($this->tendm);
                $mangth = $th->dsth();
                    include_once 'views/dm_sp.php';
                break;
            case 'xoa':
                include_once 'models/thuonghieu_M.php';
                $th=new thuonghieu_M();
                $th->xoadm($this->id);
                $mangth = $th->dsth();
                    include_once 'views/dm_sp.php';
                break;
            case 'sua':
                include_once 'models/thuonghieu_M.php';
                $th=new thuonghieu_M();
                $mt=$th->mtsua($this->id);
                include_once 'views/dm_sp_Sua.php';
                break;
            case 'capnhat':
                include_once 'models/thuonghieu_M.php';
                $th=new thuonghieu_M();
                $th->capnhatmt($this->id,$this->tendm);
                $mangth = $th->dsth();
                include_once 'views/dm_sp.php';
                break;
        }
        
    }
}

?>
