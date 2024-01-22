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
    echo '<input type="button" class="delete-button" data-id="' . $r[0] . '" value="Delete" />' . " ";
    echo $r[2] . " " . $r[1] . "<br>"; // position 2 in the db is the name
}



?>