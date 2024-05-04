<?php
    session_start();
    if(!isset($_SESSION['id_giocatore'])){
        header("Location: Login.php");
        exit();
    }
    $id_giocatore = $_SESSION['id_giocatore'];
    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characteristics</title>
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
        input[type="range"]{
            margin-bottom: 30px;
        }
        input[type="submit"] {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome <?php echo $name; ?></h1>
        <h2>Almost done</h2>
        
        <form class="profile-form" action="CharacteristicsController.php" method="post">
            <label for="role">Select your role:</label>
            <select id="role" name="role">
                <option value="PG">Point Guard (PG)</option>
                <option value="SG">Shooting Guard (SG)</option>
                <option value="PF">Power Forward (PF)</option>
                <option value="SF">Small Forward (SF)</option>
                <option value="C">Center (C)</option>
            </select>
            
            <label for="standing_reach_cm">Standing Reach (cm):</label>
            <input type="text" id="standing_reach_cm" name="standing_reach_cm">
            
            <label for="height_wo_shoes_cm">Height without Shoes (cm):</label>
            <input type="text" id="height_wo_shoes_cm" name="height_wo_shoes_cm">
            
            <label for="wingspan_cm">Wingspan (cm):</label>
            <input type="text" id="wingspan_cm" name="wingspan_cm" style="margin-bottom: 30px;">

            <label for="dedication">Dedication Level (1-5) for your workouts:</label>
            <input type="range" id="dedication" name="dedication" min="1" max="5" value="1">
            <span id="dedication-value">1 - Lazy</span>
            <script>
                var dedicationInput = document.getElementById("dedication");
                var dedicationValue = document.getElementById("dedication-value");
                dedicationInput.addEventListener("input", function() {
                    var value = dedicationInput.value;
                    var description = "";
                    switch (value) {
                        case "1":
                            description = "Lazy";
                            break;
                        case "2":
                            description = "Ok";
                            break;
                        case "3":
                            description = "Be different";
                            break;
                        case "4":
                            description = "Mindset";
                            break;
                        case "5":
                            description = "Mamba Mentality";
                            break;
                    }
                    dedicationValue.textContent = value + " - " + description;
                });

            </script>


            
            <input type="submit" value="Develop" name="develop" id="develop" onClick="developProfile(event);">
        </form>
    </div>
    
    <?php
        if(isset($_GET['err'])){
            echo $_GET['err'];
        }
    ?>

</body>
</html>