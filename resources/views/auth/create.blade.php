<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color:rgb(255, 255, 255);
        }
        .browser {
            background: #ddd;
            padding: 10px;
            text-align: left;
        }
        .address-bar {
            background: white;
            padding: 5px;
            border: 1px solid #ccc;
            display: inline-block;
            width: 80%;
        }
        nav {
            background: #fff;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        nav a {
            text-decoration: none;
            color: black;
            margin: 0 10px;
        }
        nav .active {
            font-weight: bold;
        }
        .register-container {
            background: rgb(0, 255, 157);
            padding: 20px;
            width: 300px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            text-align: left;
            margin: 5px 0;
        }
        input {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        button {
            background: blue;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background: darkblue;
        }
        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a> | <a href="{{ route('login') }}">Log in</a> | <a href="{{ route('user.createUser') }}" class="active">Register</a>
    </nav>
    <div class="register-container">
        <h2>Register</h2>
        <p class="error" id="errorMessage"></p>
        <form id="registerForm">
            <label for="username">Username</label>
            <input type="text" id="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" required>
            
            <label for="confirmPassword">Re-enter the password</label>
            <input type="password" id="confirmPassword" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" required>


            <button type="submit">Register</button>
        </form>
        <a href="{{ route('user.list') }}">Already have an account</a>
    </div>
    <footer>
        Lập trình web @01/2024
    </footer>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const email = document.getElementById("email").value;
            const errorMessage = document.getElementById("errorMessage");

            if (password !== confirmPassword) {
                errorMessage.textContent = "Mật khẩu nhập lại không khớp!";
                return;
            }

            // Lưu vào localStorage (có thể thay thế bằng API nếu dùng backend)
            const users = JSON.parse(localStorage.getItem("users")) || [];
            users.push({ username, password, email, tuoi, git });
            localStorage.setItem("users", JSON.stringify(users));

            alert("Đăng ký thành công! Chuyển hướng đến trang danh sách.");
            window.location.href = "{{ route('user.list') }}";
        });
    </script>
</body>
</html>
