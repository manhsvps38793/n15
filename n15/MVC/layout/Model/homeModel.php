<?php
class HomeModel{
    public $mangsp;
    public $onesp;
    public $splq;
    public $binhluan;

    public function dssp() {
        include_once 'Model/connectmodel.php';
        $data = new ConnectModel;
        $sql="select * from sanpham";
        $this->mangsp=$data->selectall($sql);
    }
    public function onesp($id) {
        include_once 'Model/connectmodel.php';
        $data = new ConnectModel;
        $sql="select * from sanpham where MaSP=:id"; 
        $this->onesp=$data->selectone($sql,$id);
    }
    public function splq($id,$iddm) {
        include_once 'Model/connectmodel.php';
        $data = new ConnectModel;
        $sql="select * from sanpham where MaDM=:iddm and MaSP<>:id"; 
        $data->ketnoi();
        $stmt = $data->conn->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":iddm",$iddm);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
        $data->conn = null; // Close the database connection
        $this->splq = $kq;
    }
    public function binhluan($id) {
        include_once 'Model/connectmodel.php';
        $data = new ConnectModel;
        $sql="SELECT * FROM danhgia
						JOIN taikhoan ON danhgia.MaTK = taikhoan.MaTK"; 
        $data->ketnoi();
        $stmt = $data->conn->prepare($sql);
        $stmt->execute();
        $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
        $data->conn = null; // Close the database connection
        $this->binhluan = $kq;
    }
    
    

}


?>

