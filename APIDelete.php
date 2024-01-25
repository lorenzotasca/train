<?php


echo "Ciao";

//connect to db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progetto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificare se la connessione al database è avvenuta con successo
if ($conn->connect_error) {
    // Se la connessione fallisce, terminare il programma e visualizzare un messaggio di errore
    die("Connection failed: " . $conn->connect_error);
}

// Ottenere l'ID dell'utente da eliminare dalla richiesta POST
$userId = $_POST['id'];
var_dump($_POST['id']);
var_dump($_POST); // Debug: stampa i dati POST per verificare la ricezione dell'ID
//$userId = $_GET['id'];

// Creare una query SQL per eliminare l'utente dalla tabella 'esempio' con l'ID specificato
$sql = "DELETE FROM Giocatore WHERE ID_giocatore = $userId";

// Eseguire la query e verificare se l'eliminazione è avvenuta con successo
if ($conn->query($sql) === TRUE) {
    // Se l'eliminazione ha avuto successo, stampare un messaggio di conferma
    echo "User deleted successfully";
} else {
    // Se c'è stato un errore durante l'eliminazione, stampare un messaggio di errore
    echo "Error deleting user: " . $conn->error;
}


// Chiudere la connessione al database
$conn->close();

?>
