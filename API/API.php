<?php

    include "connection.php";

    //read post param
    $param = $_GET["t"];


    //query
    $sql = "SELECT * FROM Giocatore WHERE nome LIKE '%$param%'";

    //execute query
    $result = $conn->query($sql);

    $res = $result->fetch_all();
    foreach ($res as $r) {
        echo '<input type="submit" class="delete-button" data-id="' . $r[0] . '" value="Delete"/>' . " ";
        echo $r[2] . " " . $r[1] . "<br>";
    }


?>