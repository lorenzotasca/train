<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTcombine</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333; 
            line-height: 1.6;
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
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .news-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <img src="img/logo.png" alt="Logo Basket LTcombine" class="logo">
        <div class="navigation">
            <a href="DefaultPage.php" class="nav-link">Home</a>
            <a href="menu/Contacts.php" class="nav-link">Contacts</a>
            <a href="menu/Services.php" class="nav-link">Services</a>
            <a href="menu/AboutUS.php" class="nav-link">About us</a>
        </div>
        <div class="top-right">
            <a href="Login.php" class="button">Login</a>
            <a href="Registra.php" class="button">Register</a>
        </div>
    </header>

    <section>
        <h2>Benvenuti nel Basket LTcombine</h2>
        <p>Esplorate le ultime notizie, i giocatori e gli eventi nel mondo del basket.</p>
    </section>

    <section>
        <h2>Ultime Notizie</h2>
        <?php
            $ultimeNotizie = [
                "LeBron James firma un nuovo contratto con i Lakers",
                "Riepilogo delle Finali NBA: Una Game 7 emozionante termina con un canestro allo scadere",
                "Una giovane stella domina la lega",
            ];

            foreach ($ultimeNotizie as $notizia) {
                echo "<div class='news-item'>$notizia</div>";
            }
        ?>
    </section>

    <section>
        <h2>Prossimi Eventi</h2>
        <?php
            $prossimiEventi = [
                "Weekend delle Stelle - Data: TBD",
                "Draft NBA - Data: 25 giugno 2024",
                "Campo Basket per Bambini - Data: 10-15 luglio 2024",
            ];

            echo "<ul>";
            foreach ($prossimiEventi as $evento) {
                echo "<li>$evento</li>";
            }
            echo "</ul>";
        ?>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Basket LTcombine. Tutti i diritti riservati.</p>
        <!--
            <footer>
                <div class="container">
                <p>&copy; 2024 Ritmo nel Campo. Tutti i diritti riservati.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                </div>
            </footer>
        -->
    </footer>

</body>
</html>