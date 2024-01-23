<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join the Galactic Alliance!</title>
    <style>
        body {
            font-family: 'Galactic Sans', 'Helvetica', sans-serif;
            background: url('https://i.imgur.com/BD7ypkH.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #ffffff;
        }

        .galactic-container {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            overflow: hidden;
            width: 600px;
            text-align: center;
            padding: 50px;
            border: 2px solid #ffffff;
            position: relative;
        }

        .galactic-container h2 {
            color: #ffcc00;
            margin: 0;
            padding: 30px 0;
            font-size: 42px;
            letter-spacing: 2px;
            border-bottom: 2px solid #ffcc00;
        }

        .galactic-form {
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
            border: 2px solid #ffcc00;
            border-radius: 8px;
            font-size: 18px;
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            transition: border-color 0.3s, background 0.3s;
        }

        .form-group input:focus {
            border-color: #ff9900;
            background: rgba(255, 255, 255, 0.3);
        }

        .form-group input[type="submit"] {
            background: #ffcc00;
            color: #000000;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 15px 20px;
            font-size: 24px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background: #ff9900;
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="date"] {
            margin-top: 10px;
        }

        .form-group a {
            color: #ffcc00;
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

<div class="galactic-container">
    <h2>Join the Galactic Alliance!</h2>
    
    <form class="galactic-form" action="#" method="post">
        <div class="form-group">
            <label for="galactic-name">Cosmic Name</label>
            <input type="text" id="galactic-name" name="galactic-name" placeholder="Enter your celestial name" required>
        </div>

        <div class="form-group">
            <label for="galactic-surname">Stellar Surname</label>
            <input type="text" id="galactic-surname" name="galactic-surname" placeholder="Enter your cosmic surname" required>
        </div>

        <div class="form-group">
            <label for="galactic-birthdate">Birthdate in Light Years</label>
            <input type="date" id="galactic-birthdate" name="galactic-birthdate" required>
        </div>

        <div class="form-group">
            <label for="galactic-username">Astro Username</label>
            <input type="text" id="galactic-username" name="galactic-username" placeholder="Choose your astral username" required>
        </div>

        <div class="form-group">
            <label for="galactic-password">Intergalactic Passcode</label>
            <input type="password" id="galactic-password" name="galactic-password" placeholder="Choose your space-faring passcode" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Embark on the Cosmic Journey" name="galactic-register" id="galactic-register" onClick="submitClick(event);">
        </div>

        <div class="form-group">
            <a href="#">Already part of the Cosmic Crew? Log in now!</a>
        </div>
    </form>
</div>

</body>
</html>