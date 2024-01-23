<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .signup-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            text-align: center;
            color: #333333;
        }

        .signup-container h2 {
            color: #007bff;
            margin: 0;
            padding: 30px 0;
            font-size: 28px;
            letter-spacing: 1px;
        }

        .signup-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #555555;
            margin-bottom: 8px;
            text-align: left;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333333;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #007bff;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            font-size: 16px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="date"] {
            margin-top: 10px;
        }

        .form-group a {
            color: #007bff;
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
    <h2>Register</h2>
    
    <form class="signup-form" action="#" method="post">
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
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Choose a username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Choose a password" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Register" name="signup">
        </div>

        <div class="form-group">
            <a href="#">Already have an account? Log in</a>
        </div>
    </form>
</div>

</body>
</html>