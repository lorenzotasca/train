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
            <input type="submit" name="login" value="Submit" onClick="submitClick(e);">
            
        </form>

        <script>
            function submitClick(e) {
                e.preventDefault();
                var t = document.getElementById("login");
                t.innerHTML = "Hello World"; // mettere riga da 13 a 20 
            }
        </script>
        
        <a href="Registra.php">Don't have an account yet?</a>
    </body>
</html>