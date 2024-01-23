<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fancy Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #2b2b2b;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background: linear-gradient(135deg, #004e92, #000428);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            width: 400px;
            text-align: center;
            color: #fff;
        }

        .login-container h2 {
            color: #ffac41;
            margin: 0;
            padding: 30px 0;
            font-size: 32px;
            letter-spacing: 2px;
            border-bottom: 2px solid #ffac41;
        }

        .login-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 18px;
            color: #ffac41;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 2px solid #ffac41;
            border-radius: 8px;
            font-size: 16px;
            color: #2b2b2b;
            background-color: #fff;
            transition: border-color 0.3s, background-color 0.3s;
        }

        .form-group input:focus {
            border-color: #0077cc;
            background-color: #edf5ff;
        }

        .form-group input[type="submit"] {
            background: linear-gradient(135deg, #0077cc, #0057a5);
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 18px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background: linear-gradient(135deg, #0057a5, #0077cc);
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            margin-top: 10px;
        }

        .form-group a {
            color: #ffac41;
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin-top: 15px;
        }

        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Extravagant Login</h2>
    
    <form class="login-form" action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Login" name="login">
        </div>

        <div class="form-group">
            <a href="#">Forgot password?</a>
        </div>
    </form>
</div>

</body>
</html>