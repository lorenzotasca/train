<?php
    // Start the session
    session_start();

    // Database configuration
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'progetto';

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
        $result = mysqli_query($conn, "SELECT * FROM Giocatori WHERE username = '$username'");

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

?>