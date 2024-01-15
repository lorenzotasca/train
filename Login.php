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
        
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                console.log("DOM fully loaded and parsed");
                var botton = document.getElementById("login");
                document.getElementById("login").addEventListener("click", submitClick);
            });

            function submitClick(e) {
                e.preventDefault();
                //var t = document.getElementById("login");
                //t.innerHTML = "Hello World"; 
                var message = document.createElement("span"); // Create a new paragraph element
                message.textContent = " Hello World";// mettere riga da 13 a 20 
                t.parentNode.insertBefore(message, t.nextSibling); // Insert the message after the button
            }
        </script>
        
        <a href="Registra.php">Don't have an account yet?</a>
    </body>
</html>