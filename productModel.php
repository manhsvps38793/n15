<?php
class productmodel {
    public $dm;

    public function dsdm() {
        include_once 'Model/connectmodel.php';
        $dulieu = new ConnectModel();
        $sql = "select * from sanpham";
        $this->dm = $dulieu->selectall($sql);
    } 
}

class productmodeltk {
    public function search($keyword) {
        include_once 'Model/connectmodel.php';
        $db = new ConnectModel();

        // Truy vấn SQL tìm sản phẩm dựa trên từ khóa
        $sql = "SELECT * FROM sanpham WHERE TenSP LIKE :keyword";
        $params = [':keyword' => '%' . $keyword . '%'];
        
        return $db->selectall($sql, $params); // Truyền $params vào
    }
}


?>
