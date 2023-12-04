<?php

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $connessione = new mysqli('localhost', 'root', '', 'prueba');
    if ($connessione->connect_errno) {
        echo('Connessione fallita: ' . $connessione->connect_error);
        exit();
    }else{
        try{
            $verifica = "select * from user where username = '$username' and password = '$password'";
            $result = $connessione->query($verifica);
            if ($result->num_rows>0){
                while($user = $result->fetch_array(MYSQLI_ASSOC)){
                    $name = $user['name'];
                    $id = $user['id'];
                    $_SESSION['name'] = $name;
                    $_SESSION['id'] = $id;
                }
            }
            $result->close();
            //var_dump($result);
            header("Location: Profile.php");
        }
        catch(Exception $e){
            $err = $e->getMessage();
            //redirect su Registra.php
            header("Location: Login.php?err=$err");   
        }
    }
?>