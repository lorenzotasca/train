<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333; 
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Impedisci che il footer si sovrapponga al contenuto quando la pagina è corta */
        }
        header {
            background-color: #333; 
            color: #fff;
            padding: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        h1 {
            margin: 0;
            font-size: 2em;
        }
        .logo {
            width: default; 
            height: default; 
            margin-right: 10px;
        }
        .top-right {
            margin-left: auto;
            display: flex;
            gap: 10px;
        }
        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #45a049;
        }
        .navigation {
            display: flex;
            gap: 40px;
        }
        .nav-link {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s ease;
            margin-left: 80px;
        }
        .nav-link:hover {
            color: #45a049;
        }
        section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex-grow: 1; /* Fai espandere questa sezione per riempire lo spazio rimanente */
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            margin-top: auto; /* Sposta il footer in basso quando c'è spazio extra */
        }
    </style>
</head>
<body>

    <header>
        <img src="../img/logo.png" alt="Logo Basket LTcombine" class="logo">
        <div class="navigation">
            <a href="../DefaultPage.php" class="nav-link">Home</a>
            <a href="Contacts.php" class="nav-link">Contacts</a>
            <a href="Services.php" class="nav-link">Services</a>
            <a href="AboutUS.php" class="nav-link">About us</a>
        </div>
        <div class="top-right">
            <a href="Login.php" class="button">Login</a>
            <a href="Registra.php" class="button">Register</a>
        </div>
    </header>

    <section>
        <h1>Contacts</h1>
        
        <p>Puoi contattarci tramite email, telefono o compilando il modulo di contatto qui sotto.</p>

        <h2>Informazioni di contatto</h2>
        <ul>
            <li><strong>Email:</strong> <a href="mailto:info@example.com">info@example.com</a></li>
            <li><strong>Telefono:</strong> +1234567890</li>
            <li><strong>Indirizzo:</strong> Via Nome della Strada, Numero Civico, CAP, Città, Stato</li>
            <li><strong>Orari di disponibilità:</strong> Lunedì - Venerdì: 9:00 - 17:00</li>
        </ul>

        <h2>Modulo di contatto</h2>
        <form action="invia_email.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="messaggio">Messaggio:</label><br>
            <textarea id="messaggio" name="messaggio" rows="4" required></textarea><br>

            <input type="submit" value="Invia">
        </form>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Basket LTcombine. Tutti i diritti riservati.</p>
    </footer>

</body>
</html>