document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Ngăn chặn load lại trang
    
    // Giả lập kiểm tra username và password
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "admin" && password === "123456") {
        localStorage.setItem("loggedIn", "true"); // Lưu trạng thái đăng nhập
        window.location.href = "list.html"; // Chuyển hướng đến trang danh sách
    } else {
        alert("Sai tên đăng nhập hoặc mật khẩu!");
    }
});