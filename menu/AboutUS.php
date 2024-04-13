<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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
        <h1>About us</h1>
        
        <p>Benvenuti nella pagina "Chi Siamo" della nostra azienda. Qui potete trovare maggiori informazioni su di noi e sulla nostra storia.</p>

        <h2>La Nostra Storia</h2>
        <p>Descrizione della storia della nostra azienda e come è stata fondata.</p>

        <h2>La Nostra Missione</h2>
        <p>Descrizione della missione della nostra azienda e dei valori che ci guidano.</p>

        <h2>Il Nostro Team</h2>
        <p>Presentazione del nostro team e delle persone che lavorano dietro le quinte.</p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Basket LTcombine. Tutti i diritti riservati.</p>
    </footer>

</body>
</html>