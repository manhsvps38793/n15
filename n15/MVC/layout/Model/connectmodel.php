<?php
class ConnectModel {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $port = 4306; // Đã thêm thuộc tính cổng
    public $conn;

    // Hàm kết nối cơ sở dữ liệu
    public function ketnoi() {
        try {
            // Cập nhật DSN để bao gồm cổng
            $this->conn = new PDO("mysql:host=".$this->servername.";port=".$this->port.";dbname=yen_sao;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->conn;
        } catch(PDOException $e) {
            // Nếu kết nối không thành công, chuyển hướng tới trang lỗi
            exit();
        }
    }

    // Hàm lấy tất cả dữ liệu
    // public function selectall($sql) {
    //     try {
    //         $this->ketnoi();
    //         $stmt = $this->conn->prepare($sql);
    //         $stmt->execute();
    //         $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về mảng kết quả
    //         $this->conn = null; // Đóng kết nối cơ sở dữ liệu
    //         return $kq;
    //     } catch (PDOException $e) {
    //         // Nếu xảy ra lỗi khi truy vấn, chuyển hướng đến trang lỗi
    //         exit();
    //     }
    // }

    public function selectall($sql, $params = []) {
        $this->ketnoi();
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params); // Sử dụng $params để bind các tham số
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
            $this->conn = null; // Đóng kết nối
            return $kq;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Hàm lấy một bản ghi
    public function selectone($sql, $id) {
        try {
            $this->ketnoi();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về mảng kết quả
            $this->conn = null; // Đóng kết nối cơ sở dữ liệu
            return $kq;
        } catch (PDOException $e) {
            // Nếu xảy ra lỗi khi truy vấn, chuyển hướng đến trang lỗi
            exit();
        }
    }
}
?>
