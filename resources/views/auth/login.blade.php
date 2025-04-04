<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web</title>
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
        .login-container {
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
        .remember {
            display: flex;
            align-items: center;
        }
        .remember input {
            margin-right: 5px;
        }
        .forgot {
            text-decoration: none;
            color: blue;
            font-size: 14px;
            margin-bottom: 10px;
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
        .error {
            color: red;
        }

        
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a> | <a href="{{ route('login') }}">Log in</a> | <a href="{{ route('user.createUser') }}" class="active">Register</a>
    </nav>
    <div class="login-container">
        <h2>Log in</h2>
        <p id="error" class="error"></p>
        <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        
            <button type="submit">Sign in</button>
        </form>
        
        
        
    </div>
    <!-- <footer>
       Vũ Văn Trí
    </footer> -->
</body>
<script src="./public/js/js.js"></script>
</html>
