<?php
class DangKyModel {
    public function themdangky($name, $email, $pass, $vaitro) {
        $sql = "INSERT INTO taikhoan (TenTK, Email, MatKhau, VaiTro) VALUES (:name, :email, :pass, :vaitro)";
        include_once 'Model/connectmodel.php';

        $db = new ConnectModel();
            $db->ketnoi(); 
            $stmt = $db->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass); 
            $stmt->bindParam(':vaitro', $vaitro);
            $stmt->execute();
            $db->conn = null; 
    } 
}
?>
