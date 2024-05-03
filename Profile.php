<?php

session_start();
if(!isset($_SESSION['id'])){
    if(!isset($_SESSION['role'])){
        header("Location: Characteristics.php");
    }
    header("Location: Login.php");
    exit();
}
 
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f8fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #24292e;
            color: #fff;
            border-radius: 6px 6px 0 0;
        }

        .logo {
            width: 80px;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin-right: 20px;
            font-size: 16px;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .profile-info {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-info h2 {
            font-size: 20px;
            margin: 0;
        }

        .profile-info p {
            margin: 0;
            color: #c9d1d9;
            font-size: 14px;
        }

        .section {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-top: 20px;
        }

        .section h2 {
            font-size: 18px;
            color: #24292e;
            margin-bottom: 10px;
        }

        .section p {
            color: #586069;
        }
    </style>
</head>

<body>
    <header class="header">
        <img class="logo" src="img/logo.png" alt="Logo">
        <nav class="nav-links">
            <a class="nav-link" href="#">Repositories</a>
            <a class="nav-link" href="#">Projects</a>
            <a class="nav-link" href="#">Packages</a>
            <!-- Aggiungi altri link qui se necessario -->
        </nav>
        <div class="profile-info">
            <img class="avatar" src="avatar.jpg" alt="Avatar">
            <div>
                <h2><?php echo $name; ?></h2>
                <p>Developer at XYZ Company</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="section">
            <h2>Your Projects</h2>
            <p>Here you can view your projects.</p>
            <!-- Aggiungi qui il codice per visualizzare i progetti dell'utente -->
        </div>
        <!-- Altre sezioni possono essere aggiunte qui -->
    </div>
</body>

</html>
