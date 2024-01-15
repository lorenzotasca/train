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
            <input type="submit" id="login" name="login" value="Submit" onClick="submitClick(e);">
            
        </form>
        
        
        <a href="Registra.php">Don't have an account yet?</a>
    </body>
</html>