<?php
    class ConnectModel {
        public $servername = "localhost";
        public $username = "root";
        public $password = "";
        public $port = 3306; // Added port property
        public $conn;

        public function ketnoi() {
            try {
                // Updated DSN to include the port
                $this->conn = new PDO("mysql:host=".$this->servername.";port=".$this->port.";dbname=yen_sao;charset=utf8", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $this->conn;
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        //code cũ
        // public function selectall($sql) {
        //     $this->ketnoi();
        //     $stmt = $this->conn->prepare($sql);
        //     $stmt->execute();
        //     $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
        //     $this->conn = null; // Close the database connection
        //     return $kq; // Return the array of data rows
        // }

        //code mới gpt
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

        public function selectone($sql,$id) {
            $this->ketnoi();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
            $this->conn = null; // Close the database connection
            return $kq; // Return the array of data rows
        }
    }
?>
