<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="Logincontroller.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" name="login" placeholder="Login" required>
        </form>
        <?php
            if(isset($_GET['err'])){
                echo $_GET['err'];
            }
        ?>
        <a href="Registra.php">Registra</a>
    </body>
</html>