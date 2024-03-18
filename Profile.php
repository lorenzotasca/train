<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: Login.php");
        exit();
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome <?php echo $name; ?></h1>
        <h2>Almost done</h2>
        
        <form id="profileForm">
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="PG">PG</option>
                <option value="SG">SG</option>
                <option value="PF">PF</option>
                <option value="SF">SF</option>
                <option value="C">C</option>
            </select>
            
            <label for="standing_reach">Standing Reach:</label>
            <input type="text" id="standing_reach" name="standing_reach">
            
            <label for="height_wo_shoes">Height without Shoes:</label>
            <input type="text" id="height_wo_shoes" name="height_wo_shoes">
            
            <label for="wingspan">Wingspan:</label>
            <input type="text" id="wingspan" name="wingspan">
            
            <button type="button" onclick="developProfile()">Develop</button>
        </form>
        
        <a href="Logout.php">Logout</a>
    </div>
    
    <script>
        function developProfile() {
            // You can add logic here to handle form submission
            alert('Profile development initiated!');
            // For now, this function just displays an alert
        }
    </script>
</body>
</html>