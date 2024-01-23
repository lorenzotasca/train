<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            text-align: center;
        }

        .login-container h2 {
            color: #333333;
            margin: 0;
            padding: 30px 0;
            background: linear-gradient(to right, #11998e, #38ef7d);
            font-size: 28px;
            letter-spacing: 2px;
            border-bottom: 2px solid #ffffff;
        }

        .login-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #38ef7d;
        }

        .form-group input[type="submit"] {
            background: linear-gradient(to right, #38ef7d, #11998e);
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 18px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background: linear-gradient(to right, #11998e, #38ef7d);
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            margin-top: 10px;
        }

        .form-group a {
            color: #38ef7d;
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
    <h2>Login</h2>
    
    <form class="login-form" action="Logincontroller.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Login" name="login" id="login" onClick="submitClick(event);">
        </div>

        <div class="form-group">
            <a href="#">Forgot password?</a>
        </div>
    </form>
</div>

<script>
    <?php
        if(isset($_POST['login'])){
            if(isset($_SESSION['error'])) {
    ?>
                document.addEventListener("DOMContentLoaded", function(event) {
                    console.log("DOM fully loaded and parsed");
                    var button = document.querySelector("input[type=submit]");
                    document.addEventListener("click", submitClick);

                    function submitClick(e) {
                        e.preventDefault();
                        var message = document.createElement("span");
                        message.textContent = "<?php echo $_SESSION['error']; ?>";
                        button.parentNode.insertBefore(message, button.nextSibling);
                    }
                });
    <?php
            }
        }
    ?>
</script>

<a href="Registra.php">Don't have an account yet?</a>
</body>
</html>