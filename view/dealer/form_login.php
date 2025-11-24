<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dark Mode</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: #0f0f0f;
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 350px;
            padding: 30px;
            background: #1a1a1a;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            color: #ffffff;
        }

        .input-group {
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #ccc;
        }

        .input-group input {
            padding: 12px;
            border-radius: 8px;
            border: none;
            outline: none;
            background: #2b2b2b;
            color: white;
            transition: 0.3s;
        }

        .input-group input:focus {
            background: #333;
            box-shadow: 0 0 0 2px #6c63ff;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            background: #6c63ff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #554dff;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: #aaa;
        }

        .footer-text a {
            color: #6c63ff;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>

        <form action="#" method="post">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button class="btn-login" type="submit">Masuk</button>
        </form>

        <div class="footer-text">
            Belum punya akun? <a href="#">Daftar</a>
        </div>
    </div>

</body>
</html>
