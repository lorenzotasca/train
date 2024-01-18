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
    echo $r[0] . "<br>";
}

?>