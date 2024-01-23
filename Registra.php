<!DOCTYPE html>
<html lang="es">

    <body>
        <form action="Registracontroller.php" method="post" align="center">
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="text" name="surname" placeholder="Surname" required><br><br>
            <input type="text" name="birthdate" placeholder="Birthdate" required><br><br>
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="text" name="password" placeholder="Password" required><br><br><br>
            <input type="submit" name="login" value="Submit"><br><br><br>
        </form>
        <?php
            if(isset($_GET['err'])){
                echo $_GET['err'];
            }
        ?>
    </body>

</html>