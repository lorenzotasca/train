<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: Login.php");
    }
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Benvenuto <?php echo $name; ?></h1>
    
    <label for="role">Ruolo:</label><br>
    <select id="role" name="role">
        <option value="PG">PG</option>
        <option value="SG">SG</option>
        <option value="PF">SG</option>
        <option value="SF">SG</option>
        <option value="C">C</option>
    </select><br>
    
    <label for="campo1">Campo 1:</label><br>
    <input type="text" id="campo1" name="campo1"><br>
    
    <label for="campo2">Campo 2:</label><br>
    <input type="text" id="campo2" name="campo2"><br>
    
    <label for="campo3">Campo 3:</label><br>
    <input type="text" id="campo3" name="campo3"><br>
    
    <button onclick="sviluppaClick()">Sviluppa</button>
    
    <a href="Logout.php">Logout</a>
    
    <script>
        function sviluppaClick() {
            // Eseguire azioni quando il pulsante "Sviluppa" viene cliccato
            // Puoi aggiungere qui la logica per elaborare i campi inseriti o altre azioni desiderate
            alert('Pulsante "Sviluppa" cliccato!');
        }
    </script>
</body>
</html>