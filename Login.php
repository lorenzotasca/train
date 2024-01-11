<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="Logincontroller.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="text" name="password" placeholder="Password" required><br><br><br>
            <input type="submit" name="login" placeholder="Login" required>
        </form>
        <?php
            if(isset($_GET['err'])){
                echo $_GET['err'];
            }
        ?>
        <a href="Registra.php">Don't have an account yet?</a>
    </body>
</html>