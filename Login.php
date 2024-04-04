<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kobe Bryant Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f1f1;
            background-image: url('img/mamba.png');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            width: 400px;
            text-align: center;
        }

        .login-container h2 {
            color: #fff;
            margin: 0;
            padding: 30px 0;
            background: linear-gradient(to right, #11998e, #38ef7d);
            font-size: 28px;
            letter-spacing: 2px;
            border-bottom: 2px solid #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .login-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #333;
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
            position: absolute;
            bottom: -30px;
            right: 0;
            margin-top: 20px;
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
            <a href="Registra.php">Don't have an account yet?</a>
        </div>
        <!--
            <div class="form-group">
                <a href="#">Forgot password?</a>
            </div>
        -->
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

</body>
</html>