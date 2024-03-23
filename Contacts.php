<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
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
</body>
</html>