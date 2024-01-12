<?php
    session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="Logincontroller.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="text" name="password" placeholder="Password" required><br><br><br>
            <input type="submit" name="login" value="Submit">
            <?php
                if(isset($_SESSION['error'])) {
                    echo "<p>".$_SESSION['error']."</p>";
                    unset($_SESSION['error']); // Clear the error message
                }
            ?>
        </form>
        
        <a href="Registra.php">Don't have an account yet?</a>
    </body>
</html>