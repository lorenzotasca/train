<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Cosmic Realm of Authentication!</title>
    <style>
        body {
            font-family: 'Galactic Sans', 'Helvetica', sans-serif;
            background: #000000;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .cosmic-container {
            background: url('https://i.imgur.com/9DZ2M6Z.jpg') no-repeat center center fixed;
            background-size: cover;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            overflow: hidden;
            width: 600px;
            text-align: center;
            color: #ffffff;
            padding: 50px;
            border: 2px solid #ffffff;
            position: relative;
        }

        .cosmic-container h2 {
            color: #ff9900;
            margin: 0;
            padding: 30px 0;
            font-size: 42px;
            letter-spacing: 2px;
            border-bottom: 2px solid #ff9900;
        }

        .cosmic-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 20px;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            box-sizing: border-box;
            border: 2px solid #ff9900;
            border-radius: 8px;
            font-size: 18px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            transition: border-color 0.3s, background 0.3s;
        }

        .form-group input:focus {
            border-color: #ffcc00;
            background: rgba(255, 255, 255, 0.2);
        }

        .form-group input[type="submit"] {
            background: #ff9900;
            color: #000000;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 15px 20px;
            font-size: 24px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background: #ffcc00;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            margin-top: 10px;
        }

        .form-group a {
            color: #ff9900;
            text-decoration: none;
            font-size: 20px;
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

<div class="cosmic-container">
    <h2>Welcome to the Cosmic Realm of Authentication!</h2>
    
    <form class="cosmic-form" action="#" method="post">
        <div class="form-group">
            <label for="star-username">Starship Username</label>
            <input type="text" id="star-username" name="star-username" placeholder="Enter your stellar username" required>
        </div>

        <div class="form-group">
            <label for="star-password">Interstellar Passcode</label>
            <input type="password" id="star-password" name="star-password" placeholder="Enter your celestial passcode" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Embark on the Cosmic Journey" name="cosmic-login" id="cosmic-login" onClick="submitClick(event);">
        </div>

        <div class="form-group">
            <a href="#">Not part of the Galactic Alliance yet? Join now!</a>
        </div>
    </form>
</div>

</body>
</html>