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
$userId = urldecode($_POST["id"]);
//var_dump($_POST["id"]);
//var_dump($_POST); // Debug: stampa i dati POST per verificare la ricezione dell'ID
//$userId = $_GET['id'];

// Create a prepared SQL query to delete the user from the 'Giocatore' table with the specified ID
$sql = "DELETE FROM Giocatore WHERE ID_giocatore = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userId);
$stmt->execute();

// Check if the deletion was successful
if ($stmt->affected_rows > 0) {
    // If the deletion was successful, print a confirmation message
    echo "User deleted successfully";
} else {
    // If there was an error during deletion, print an error message
    echo "Error deleting user: " . $stmt->error;
}

$stmt->close();

// Chiudere la connessione al database
$conn->close();

?>
