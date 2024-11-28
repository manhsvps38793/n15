<?php
require_once 'Model/connectmodel.php';

class AuthController {

    private $db;

    public function __construct() {
        $this->db = new ConnectModel(); // Sử dụng lớp ConnectModel
    }

    // Hàm đăng nhập
public function dangnhap() {
    $errorMessages = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Kiểm tra email
        if (empty($email)) {
            $errorMessages['email'] = "Email không được để trống!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessages['email'] = "Email không hợp lệ!";
        }

        // Kiểm tra mật khẩu
        if (empty($password)) {
            $errorMessages['password'] = "Mật khẩu không được để trống!";
        }

        if (empty($errorMessages)) {
            // Kiểm tra đăng nhập thành công
            $conn = $this->db->ketnoi(); // Kết nối cơ sở dữ liệu
            $query = "SELECT * FROM taikhoan WHERE Email = :email";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['MatKhau'])) {
                // Đăng nhập thành công, lưu thông tin vào session
                session_start();
                $_SESSION['user_id'] = $user['MaTK'];
                $_SESSION['email'] = $user['Email'];
                $_SESSION['fullname'] = $user['TenTK'];

                // Chuyển hướng đến trang chủ
                header("Location: index.php?trang=home");
                exit();
            } else {
                // Thêm lỗi cho trường hợp mật khẩu sai
                $errorMessages['password'] = "Email hoặc mật khẩu không đúng!";
            }
        }
    }

    return $errorMessages; // Trả về tất cả các lỗi
}


    // Hàm đăng ký
  public function dangky() {
    $errors = []; // Khởi tạo mảng lỗi trống

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        // Kiểm tra tên người dùng
        if (empty($name)) {
            $errors['fullname'] = "Tên người dùng không được để trống.";
        }

        // Kiểm tra email
        if (empty($email)) {
            $errors['email'] = "Email không được để trống.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email không hợp lệ.";
        }

        // Kiểm tra mật khẩu
        if (empty($password)) {
            $errors['password'] = "Mật khẩu không được để trống.";
        } elseif (strlen($password) < 6) {
            $errors['password'] = "Mật khẩu phải có ít nhất 6 ký tự.";
        }

        // Kiểm tra mật khẩu nhập lại
        if ($password !== $confirm_password) {
            $errors['confirm_password'] = "Mật khẩu và Nhập lại mật khẩu không khớp.";
        }

        // Nếu không có lỗi, tiến hành xử lý đăng ký
        if (empty($errors)) {
            $conn = $this->db->ketnoi(); // Kết nối cơ sở dữ liệu
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Kiểm tra nếu email đã tồn tại
            $query = "SELECT * FROM taikhoan WHERE Email = :email";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                // Nếu email chưa tồn tại, thêm người dùng mới
                $query = "INSERT INTO taikhoan (Email, MatKhau, TenTK, VaiTro, diachi) VALUES (:email, :password, :name, 'user', '')";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->bindParam(":password", $hashedPassword, PDO::PARAM_STR);
                $stmt->bindParam(":name", $name, PDO::PARAM_STR);
                $stmt->execute();

                // Sau khi đăng ký thành công, chuyển hướng đến trang login
                header("Location: index.php?trang=dangnhap");
                exit();
            } else {
                $errors['email'] = "Email đã tồn tại.";
            }
        }
    }

    return $errors; // Trả về mảng lỗi nếu có
}

}
