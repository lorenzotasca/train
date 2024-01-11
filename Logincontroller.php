<?php
    // Start the session
    session_start();

    // Database configuration
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'your_database_name';

    // Create a new MySQLi connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form is submitted
    if(isset($_POST['submit'])){
        // Sanitize user input to prevent SQL injection
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query the database for username and password
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                // Password matches, so create the session
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['username'];
                // Redirect to profile page
                header("Location: Profile.php");
            }else{
                echo "Incorrect username or password.";
            }
        }else{
            echo "Incorrect username or password.";
        }
    }

    /*
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $connessione = new mysqli('localhost', 'root', '', 'progetto');
    if ($connessione->connect_error) {
        echo('Connessione fallita: ' . $connessione->connect_error);
        exit();
    }else{
        try{
            $verifica = "select * from Giocatore where username = '$username' and passwordCode = '$password'";
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
    $connessione->close();
    */
?>