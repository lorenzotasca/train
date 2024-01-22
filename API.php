<?php

//read post param
$param = $_GET["t"];

//connect to db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progetto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//query
$sql = "SELECT * FROM Giocatore WHERE nome LIKE '%$param%'";

//execute query
$result = $conn->query($sql);

$res = $result->fetch_all();
foreach ($res as $r) {
    echo '<input type="submit" value="Delete" onclick="PermanentlyDelete()" />' . " ";
    echo $r[2] . " " . $r[1] . "<br>"; // position 2 in the db is the name
}

function PermanentlyDelete() {
    $id = $_GET["id"];
    $sql = "DELETE FROM Giocatore WHERE id = $id";
    $result = $conn->query($sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    //$conn->close();
}


?>