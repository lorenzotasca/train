<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket LTcombine - Pagina Super Mega Figa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        h1 {
            margin: 0;
        }
        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
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
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <h1>Basket LTcombine</h1>
        <div class="top-right">
            <a href="#" class="button">Login</a>
            <a href="#" class="button">Register</a>
        </div>
    </header>

    <section>
        <h2>Benvenuti nel Basket LTcombine</h2>
        <p>Questa è la pagina super mega figa per il Basket LTcombine. Esplorate le ultime notizie, i giocatori e gli eventi nel mondo del basket.</p>
    </section>

    <section>
        <h2>Ultime Notizie</h2>
        <?php
            $ultimeNotizie = [
                "LeBron James firma un nuovo contratto con i Lakers",
                "Riepilogo delle Finali NBA: Una Game 7 emozionante termina con un canestro allo scadere",
                "Una giovane stella domina la lega",
            ];

            echo "<ul>";
            foreach ($ultimeNotizie as $notizia) {
                echo "<li>$notizia</li>";
            }
            echo "</ul>";
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
    </footer>

</body>
</html>