<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('img/mamba.png');
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            width: 400px;
            text-align: center;
            margin: 80px auto;
        }

        .register-container h2 {
            color: #fff;
            margin: 0;
            padding: 30px 0;
            background: linear-gradient(to right, #11998e, #38ef7d);
            font-size: 28px;
            letter-spacing: 2px;
            border-bottom: 2px solid #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .register-form {
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
        .form-group input[type="password"],
        .form-group input[type="date"] {
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

<div class="register-container">
    <h2>Register</h2>
    
    <form class="register-form" action="Registracontroller.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>
        </div>

        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" placeholder="Your surname" required>
        </div>

        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>

        <div class="form-group">
            <label for="taxcode">Tax code</label>
            <input type="text" id="taxcode" name="taxcode" placeholder="Your tax code" required>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Choose a username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Choose a password" required>
        </div>

        
        <div class="form-group">
            <div>
                <input type="radio" id="tipo" name="tipo" value="tipo" onclick="toggleSelection(this)">
                <label for="tipo">Admin</label>
            </div>
        </div>

        <input type="hidden" id="adminSelectedInput" name="adminSelected" value="">

        <script>
            var adminSelected = false; 

            function toggleSelection() {
                var radio = document.getElementById("tipo");
                var adminSelectedInput = document.getElementById("adminSelectedInput");

                if (adminSelected) {
                    radio.checked = false;
                    adminSelected = false;
                    adminSelectedInput.value = "false"; // Imposta il valore del campo nascosto su "false"
                } else {
                    radio.checked = true;
                    adminSelected = true;
                    adminSelectedInput.value = "true"; // Imposta il valore del campo nascosto su "true"
                }
            }
        </script>

        <div class="form-group">
            <input type="submit" value="Register" name="register" id="register" onClick="submitClick(event);">
        </div>

        <div class="form-group">
            <a href="Login.php">Already have an account? Log in</a>
        </div>
    </form>

    <?php
        if(isset($_GET['err'])){
            echo $_GET['err'];
        }
    ?>

</div>

</body>
</html>