<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione Celestiale</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #ffffff;
        }

        .registration-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 400px;
            text-align: center;
        }

        .registration-container h2 {
            color: #2a5298;
            margin: 0;
            padding: 30px 0;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            font-size: 28px;
            letter-spacing: 2px;
            border-bottom: 2px solid #ffffff;
        }

        .registration-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
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
            border-color: #2a5298;
        }

        .form-group input[type="submit"] {
            background: linear-gradient(to right, #2a5298, #1e3c72);
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 18px;
            transition: background 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background: linear-gradient(to right, #1e3c72, #2a5298);
        }

        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="date"] {
            margin-top: 10px;
        }

        .form-group a {
            color: #2a5298;
            text-decoration: none;
            font-size: 14px;
            margin-top: 20px;
            display: block;
        }

        .form-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h2>Registrazione Celestiale</h2>
    
    <form class="registration-form" action="#" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Il tuo nome" required>
        </div>

        <div class="form-group">
            <label for="cognome">Cognome</label>
            <input type="text" id="cognome" name="cognome" placeholder="Il tuo cognome" required>
        </div>

        <div class="form-group">
            <label for="dataNascita">Data di Nascita</label>
            <input type="date" id="dataNascita" name="dataNascita" required>
        </div>

        <div class="form-group">
            <label for="username">Nome Utente</label>
            <input type="text" id="username" name="username" placeholder="Scegli un nome utente" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Scegli una password" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Registrati" name="register" id="register" onClick="submitClick(event);">
        </div>

        <div class="form-group">
            <a href="#">Già registrato? Accedi qui</a>
        </div>
    </form>
</div>

</body>
</html>