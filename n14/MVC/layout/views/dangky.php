<link rel="stylesheet" href="public/css/dangnhap.css">

<?php
require_once 'controllers/AuthController.php';

$authController = new AuthController();
$errorMessages = $authController->dangky(); // Trả về mảng lỗi (nếu có)

?>

<div class="custom-style">
    <section class="log_acc">
        <div class="login">
            <div class="form">
                <h2>Đăng Ký</h2>
                <p>Đã có tài khoản? <a href="index.php?trang=dangnhap" style="text-decoration: underline;">Đăng nhập </a> tại đây</p>
                
                <form method="POST" action="">
                    <!-- Tên người dùng -->
                    <input name="name" type="text" placeholder="Tên Người Dùng" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                    <?php if (isset($errorMessages['fullname'])): ?>
                        <div class="error" style="text-align:left; font-size:12px; color: red;"><?php echo $errorMessages['fullname']; ?></div>
                    <?php endif; ?>

                    <!-- Email -->
                    <input name="email" type="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    <?php if (isset($errorMessages['email'])): ?>
                        <div class="error" style="text-align:left; font-size:12px; color: red;"><?php echo $errorMessages['email']; ?></div>
                    <?php endif; ?>

                    <!-- Mật khẩu -->
                    <input name="password" type="password" placeholder="Mật Khẩu">
                    <?php if (isset($errorMessages['password'])): ?>
                        <div class="error" style="text-align:left; font-size:12px; color: red;"><?php echo $errorMessages['password']; ?></div>
                    <?php endif; ?>           

                    <!-- Nhập lại mật khẩu -->
                    <input name="confirm_password" type="password" placeholder="Nhập Lại Mật Khẩu">
                    <?php if (isset($errorMessages['confirm_password'])): ?>
                        <div class="error" style="text-align:left; font-size:12px; color: red;"><?php echo $errorMessages['confirm_password']; ?></div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-primary btn-style">Đăng Ký</button>
                </form>

                <div class="block social-login--facebooks">
                    <div class="line-break" style="margin: 20px">
                        <span>Hoặc đăng ký qua</span>
                    </div>
                    <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()">
                        <img width="129px" height="37px" alt="facebook-login-button" src="public/img/fb-btn.svg">
                    </a>
                    <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()">
                        <img width="129px" height="37px" alt="google-login-button" src="public/img/gp-btn.svg">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
