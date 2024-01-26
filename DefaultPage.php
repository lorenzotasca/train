<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Basket LTcombine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }
        section {
            margin: 20px 0;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Basket LTcombine</h1>
    </header>

    <section>
        <h2>Benvenuti nel Basket LTcombine</h2>
        <p>Questa è la pagina predefinita per il Basket LTcombine. Esplorate le ultime notizie, i giocatori e gli eventi nel mondo del basket.</p>
    </section>

    <section>
        <h2>Ultime Notizie</h2>
        <?php
            // Esempio di codice PHP per visualizzare le ultime notizie
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
            // Esempio di codice PHP per visualizzare i prossimi eventi
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