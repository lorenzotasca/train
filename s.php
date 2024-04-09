<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTcombine</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <header>
        <img src="img/logo.png" alt="Logo Basket LTcombine" class="logo">
        <nav>
            <a href="DefaultPage.php" class="nav-link">Home</a>
            <a href="menu/Contacts.php" class="nav-link">Contacts</a>
            <a href="menu/Services.php" class="nav-link">Services</a>
            <a href="menu/AboutUS.php" class="nav-link">About us</a>
        </nav>
        <div class="top-right">
            <a href="Login.php" class="button">Login</a>
            <a href="Registra.php" class="button">Register</a>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Benvenuti nel Basket LTcombine</h1>
            <p>Esplora le ultime notizie, i giocatori e gli eventi nel mondo del basket.</p>
            <a href="#" class="button">Scopri di più</a>
        </div>
    </section>

    <section class="featured">
        <div class="container">
            <h2>Notizie in Evidenza</h2>
            <div class="news-container">
                <?php
                $featuredNews = [
                    "LeBron James firma un nuovo contratto con i Lakers",
                    "Riepilogo delle Finali NBA: Una Game 7 emozionante termina con un canestro allo scadere",
                    "Una giovane stella domina la lega",
                ];

                foreach ($featuredNews as $news) {
                    echo "<div class='news-item'>$news</div>";
                }
                ?>
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <h2>Prossimi Eventi</h2>
            <ul class="event-list">
                <?php
                $upcomingEvents = [
                    "Weekend delle Stelle - Data: TBD",
                    "Draft NBA - Data: 25 giugno 2024",
                    "Campo Basket per Bambini - Data: 10-15 luglio 2024",
                ];

                foreach ($upcomingEvents as $event) {
                    echo "<li>$event</li>";
                }
                ?>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Basket LTcombine. Tutti i diritti riservati.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>