<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
        <img src="../img/Cattura4.png" alt="Logo Basket LTcombine" class="logo">
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
        <h1>Services</h1>
        
        <p>Qui troverai una panoramica dei nostri servizi offerti. Per ulteriori informazioni o richieste personalizzate, non esitare a contattarci.</p>

        <h2>Nostri Servizi</h2>
        <ul>
            <li><strong>Servizio 1:</strong> Descrizione del Servizio 1.</li>
            <li><strong>Servizio 2:</strong> Descrizione del Servizio 2.</li>
            <li><strong>Servizio 3:</strong> Descrizione del Servizio 3.</li>
            <!-- Aggiungi ulteriori servizi secondo necessità -->
        </ul>

        <h2>Perché Sceglierci</h2>
        <p>Elenco dei motivi per cui dovresti scegliere i nostri servizi:</p>
        <ul>
            <li>Motivo 1</li>
            <li>Motivo 2</li>
            <li>Motivo 3</li>
            <!-- Aggiungi ulteriori motivi secondo necessità -->
        </ul>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Basket LTcombine. Tutti i diritti riservati.</p>
    </footer>

</body>
</html>