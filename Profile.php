<?php

session_start();
if(!isset($_SESSION['id_giocatore'])){
    if(!isset($_SESSION['role'])){
        header("Location: Characteristics.php");
    }
    header("Location: Login.php");
    exit();
}
 
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="it">
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
            display: flex;
            flex-direction: column;
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .logo {
            width: 150px;
        }
        .links {
            display: flex;
            flex-direction: column;
        }
        .link {
            margin-bottom: 10px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .section {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img class="logo" src="img/logo.png" alt="Logo">
        </div>
        <div class="content">
            <div class="section">
                <h2><?php echo $name; ?></h2>
                <p>Questa è la tua pagina di profilo.</p>
            </div>
        </div>
        <div class="sidebar">
            <div class="links">
                <a class="link" href="#">Link 1</a>
                <a class="link" href="#">Link 2</a>
                <a class="link" href="#">Link 3</a>
                <!-- Aggiungi altri link qui se necessario -->
            </div>
        </div>
    </div>
</body>
</html>
            
