<?php
class thuonghieu_M {
    

    public function dsth() {
        include_once 'models/connectmodel.php';
        $th = new ConnectModel;
        $sql="select * from dm_sp";
        return $th->selectall($sql);
    }
    public function themdm($tendm) {
        $sql="INSERT INTO dm_sp (tendm) VALUES ('$tendm');";
        include_once 'models/connectmodel.php';
        $dm=new ConnectModel();
        $dm->ketnoi();
            $stmt = $dm->conn->prepare($sql); 
            $stmt->execute();
            $dm->conn = null; // đóng kết nối database
    }
    public function mangsptheodm($id){
        $sql="select * from sanpham where iddm=:id";
        include_once 'models/connectmodel.php';
        $dm=new ConnectModel();
        $dm->ketnoi();
            $stmt = $dm->conn->prepare($sql); 
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $dm->conn = null; // đóng kết nối database
            return $kq;
    }
    public function xoadm($id) {
        $sql = "DELETE FROM dm_sp WHERE id=$id";
        if(count($this->mangsptheodm($id)) == 0) {
            include_once 'models/connectmodel.php';
            $dm=new ConnectModel();
            $dm->ketnoi();
                $stmt = $dm->conn->prepare($sql); 
                $stmt->execute();
                $dm->conn = null; // đóng kết nối database
        }else{
            echo 'không xóa được ???';
        }
    }
    public function mtsua($id){
        $sql = "select * from dm_sp where id=:id";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        return $dm->selectone($sql, $id);
    }
    public function capnhatmt($id, $tendm){
        $sql = "UPDATE dm_sp SET tendm = :tendm WHERE dm_sp.id = :id";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql); 
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":tendm", $tendm, PDO::PARAM_STR);
        $stmt->execute();
        $dm->conn = null;
    }
   
}    

?>

