document.getElementById("form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Lấy giá trị từ form
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const repassword = document.getElementById("repassword").value;

    // Xóa các thông báo lỗi cũ
    const errorElements = ["usernameError", "emailError", "passwordError", "repasswordError"];
    errorElements.forEach(id => {
        document.getElementById(id).innerText = "";
    });

    let isValid = true;

    // Kiểm tra username
    if (username === '') {
        document.getElementById('username').style.border = '1px solid red';
        document.getElementById('usernameError').style.display = 'block';
        document.getElementById('usernameError').innerText = 'Vui lòng nhập tên người dùng';
        isValid = false;
    } else if (username.length < 3) {
        document.getElementById('username').style.border = '1px solid red';
        document.getElementById('usernameError').style.display = 'block';
        document.getElementById('usernameError').innerText = 'Tên người dùng tối thiểu 3 ký tự';
        isValid = false;
    } else {
        document.getElementById('username').style.border = '1px solid green';
    }

    // Kiểm tra email
    if (email === '') {
        document.getElementById('email').style.border = '1px solid red';
        document.getElementById('emailError').style.display = 'block';
        document.getElementById('emailError').innerText = 'Vui lòng nhập email';
        isValid = false;
    } else if (!email.includes("@") || !email.includes(".")) {
        document.getElementById('email').style.border = '1px solid red';
        document.getElementById('emailError').style.display = 'block';
        document.getElementById('emailError').innerText = 'Email không đúng định dạng';
        isValid = false;
    } else {
        document.getElementById('email').style.border = '1px solid green';
    }

    // Kiểm tra password
    if (password === '') {
        document.getElementById('password').style.border = '1px solid red';
        document.getElementById('passwordError').style.display = 'block';
        document.getElementById('passwordError').innerText = 'Mật khẩu không được để trống';
        isValid = false;
    } else if (password.length < 6) {
        document.getElementById('password').style.border = '1px solid red';
        document.getElementById('passwordError').style.display = 'block';
        document.getElementById('passwordError').innerText = 'Mật khẩu tối thiểu 6 ký tự';
        isValid = false;
    } else {
        document.getElementById('password').style.border = '1px solid green';
    }

    // Kiểm tra xác nhận password
    if (repassword === '') {
        document.getElementById('repassword').style.border = '1px solid red';
        document.getElementById('repasswordError').style.display = 'block';
        document.getElementById('repasswordError').innerText = 'Vui lòng xác nhận mật khẩu';
        isValid = false;
    } else if (repassword !== password) {
        document.getElementById('repassword').style.border = '1px solid red';
        document.getElementById('repasswordError').style.display = 'block';
        document.getElementById('repasswordError').innerText = 'Mật khẩu không trùng khớp';
        isValid = false;
    } else {
        document.getElementById('repassword').style.border = '1px solid green';
    }

    if (isValid) {
        alert('Đăng ký thành công!');
    }
});


function doimau() {
    document.getElementById('username').style.border = '1px solid blue';
    document.getElementById('email').style.border = '1px solid blue';
}