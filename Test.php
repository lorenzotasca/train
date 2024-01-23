<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .signup-container {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 400px;
            text-align: center;
            color: #fff;
        }

        .signup-container h2 {
            color: #fff;
            margin: 0;
            padding: 30px 0;
            font-size: 32px;
            letter-spacing: 2px;
            border-bottom: 2px solid #fff;
        }

        .signup-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 18px;
            color: #fff;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid #fff;
            background-color: transparent;
            font-size: 16px;
            color: #fff;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #feb47b;
        }

        .form-group input[type="submit"] {
            background: #feb47b;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 15px 20px;
            font-size: 18px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background: #ff7e5f;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="date"] {
            margin-top: 10px;
        }

        .form-group a {
            color: #fff;
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

<div class="signup-container">
    <h2>Join Us</h2>
    
    <form class="signup-form" action="#" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" placeholder="Enter your surname" required>
        </div>

        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="date" id="birthdate" name="birthdate" required>
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
            <input type="submit" value="Join Now" name="signup">
        </div>

        <div class="form-group">
            <a href="#">Already have an account? Log in</a>
        </div>
    </form>
</div>

</body>
</html>