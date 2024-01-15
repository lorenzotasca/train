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
            <?php
                if(isset($_POST['login'])){
                    if(isset($_SESSION['error'])) {
                        //echo "<span>".$_SESSION['error']."</span>";
                        //unset($_SESSION['error']); // Clear the error message
            ?>
                document.addEventListener("DOMContentLoaded", function(event) {
                    console.log("DOM fully loaded and parsed");
                    var botton = document.getElementById("login");
                    document.addEventListener("click", submitClick);
                });

                function submitClick(e) {
                    e.preventDefault();
                    var t = document.getElementById("login");
                    t.innerHTML = "Hello World"; 
                    t.createElement("span");// write the message in the same line of the button
                    //message.textContent = "ciao"; 
                    t.parentNode.insertBefore(message, t.nextSibling);
                }
            <?php
                    }
                }
            ?>
        </script>
        
        
        
        <a href="Registra.php">Don't have an account yet?</a>
    </body>
</html>