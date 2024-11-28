<link rel="stylesheet" href="public/css/dangnhap.css">

<?php
require_once 'controllers/AuthController.php';

$authController = new AuthController();
$errorMessages = $authController->dangnhap(); // Trả về mảng lỗi (nếu có)
?>

<div class="custom-style">
    <section class="log_acc">
        <div class="login">
            <div class="form">
                <h2>Đăng Nhập</h2>
                <p>Chưa có tài khoản? <a href="index.php?trang=dangky" style="text-decoration: underline;">Đăng ký </a> tại đây</p>
                <form method="POST" action="">

                    <!-- Hiển thị lỗi email -->
                    <input type="email" id="email" name="email" required placeholder="Email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    <?php if (isset($errorMessages['email'])): ?>
                        <div class="error" style="text-align:left; font-size:12px; color: red;"><?php echo $errorMessages['email']; ?></div>
                    <?php endif; ?>

                    <!-- Hiển thị lỗi mật khẩu -->
                    <input type="password" id="password" name="password" required placeholder="Mật Khẩu">
                    <?php if (isset($errorMessages['password'])): ?>
                        <div class="error" style="text-align:left; font-size:12px; color: red;"><?php echo $errorMessages['password']; ?></div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary btn-style">Đăng Nhập</button>
                </form>

                <div class="social-login">
                    <div class="line-break" style="margin: 20px;">
                        <span>Hoặc đăng nhập bằng</span>
                    </div>
                    <a href="javascript:void(0)" class="social-login--facebook">
                        <img width="129px" height="37px" alt="facebook-login-button" src="public/img/fb-btn.svg">
                    </a>
                    <a href="javascript:void(0)" class="social-login--google">
                        <img width="129px" height="37px" alt="google-login-button" src="public/img/gp-btn.svg">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
