
<!DOCTYPE html>
<html lang="es">

    <body>
        <form action="Registra.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" name="login" placeholder="Login" required>
        </form>
        <?php
            if(isset($_GET['err'])){
                echo $_GET['err'];
            }
        ?>
    </body>

</html>