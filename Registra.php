
<!DOCTYPE html>
<html lang="es">

    <body>
        <form action="Registra.php" method="post">
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="text" name="password" placeholder="Password" required><br><br><br>
            <input type="submit" name="login" placeholder="Login" required><br><br><br>
        </form>
        <?php
            if(isset($_GET['err'])){
                echo $_GET['err'];
            }
        ?>
    </body>

</html>