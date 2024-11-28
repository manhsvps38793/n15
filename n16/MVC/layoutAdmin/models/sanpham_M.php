<?php
class sanpham_M {
    public function dssp() {
        include_once 'models/connectmodel.php';
        $th = new ConnectModel();
        $sql = "SELECT sanpham.*,tendm FROM sanpham inner join dm_sp on sanpham.iddm=dm_sp.id";
        return $th->selectall($sql);
    }
    public function themsp($tensp,$hinh) {
        $sql="INSERT INTO sanpham (tensp,hinh) VALUES ('$tensp','$hinh');";
        include_once 'models/connectmodel.php';
        $dm=new ConnectModel();
        $dm->ketnoi();
            $stmt = $dm->conn->prepare($sql); 
            $stmt->execute();
            $dm->conn = null; // đóng kết nối database
    }
}
?>
