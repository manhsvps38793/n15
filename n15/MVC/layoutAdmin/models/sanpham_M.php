<?php
class sanpham_M {
    public function dssp() {
        include_once 'models/connectmodel.php';
        $th = new ConnectModel();
        $sql = "SELECT sanpham.*,TenSP FROM sanpham inner join danhmucsanpham on sanpham.MaDM=danhmucsanpham.MaDM";
        return $th->selectall($sql);
    }
    public function themsp($ten, $gia, $mota, $iddm, $hinh) {
        $sql = "INSERT INTO sanpham (TenSP, Gia, MoTa, MaDM, HinhAnh) VALUES (:ten, :gia, :mota, :iddm, :hinh)";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        
        try {
            $dm->ketnoi();
            $stmt = $dm->conn->prepare($sql);
            $stmt->bindParam(":ten", $ten, PDO::PARAM_STR);
            $stmt->bindParam(":gia", $gia, PDO::PARAM_INT);
            $stmt->bindParam(":mota", $mota, PDO::PARAM_STR);
            $stmt->bindParam(":iddm", $iddm, PDO::PARAM_INT);
            $stmt->bindParam(":hinh", $hinh, PDO::PARAM_STR);
            $stmt->execute();
            return $dm->conn->lastInsertId(); // Return the last inserted ID
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Indicate failure
        } finally {
            $dm->conn = null; // Ensure connection is always closed
        }
    }
    public function xoasp($id){
        $sql = "DELETE FROM sanpham WHERE MaSP=$id";
        include_once 'models/connectmodel.php';
        $dm=new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql); 
                $stmt->execute();
                $dm->conn = null; // đóng kết nối database
    }
    public function mtsua($id){
        $sql = "SELECT * FROM sanpham WHERE MaSP=:id";
        include_once 'models/connectmodel.php';
        $sp = new ConnectModel();
        return $sp->selectone($sql, $id);
    }
    public function capnhatsp($id, $ten, $tenx, $iddm, $gia, $hinh, $mota) {
        $sql = "UPDATE sanpham SET TenSP = :ten, Gia = :gia, MaDM = :iddm, HinhAnh = :hinh, MoTa = :mota WHERE MaSP = :id";
        include_once 'models/connectmodel.php';
        $dm = new ConnectModel();
        $dm->ketnoi();
        $stmt = $dm->conn->prepare($sql); 
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":ten", $ten, PDO::PARAM_STR);
        $stmt->bindParam(":gia", $gia, PDO::PARAM_INT);
        $stmt->bindParam(":iddm", $iddm, PDO::PARAM_INT);
        $stmt->bindParam(":hinh", $hinh, PDO::PARAM_STR);
        $stmt->bindParam(":mota", $mota, PDO::PARAM_STR);
        $stmt->execute();
        $dm->conn = null;
    }
}