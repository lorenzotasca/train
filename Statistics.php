<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage my statistics</title>
    <style>
        /* Stili CSS per la tabella */
        table {
            border-collapse: collapse;
            width: 40%; /* Larghezza della tabella */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative; /* Imposta la posizione relativa per la tabella */
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        thead {
            position: sticky;
            top: 0; /* Fissa la prima riga dell'intestazione */
        }

        .scrollable,
        .table-wrapper {
            display: flex;
            justify-content: space-between;
            width: 90%;
            max-height: 200px; /* Altezza massima prima dello scorrimento */
            overflow-y: auto; /* Attiva lo scorrimento verticale */
            margin: 0 auto; /* Centrato il container */
        }

        .table-wrapper::-webkit-scrollbar {
            width: 12px;
        }
        .table-wrapper::-webkit-scrollbar-track {
            background-color: #ccc;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
        .table-wrapper::-webkit-scrollbar-thumb {
            background-color: green;
            border-radius: 10px;
        }

        .scrollable table {
            width: 70%;
        }

        .add-section-container {
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin: 0 auto; /* Centrato il container */
        }

        .add-section {
            width: 48%;
            display: flex;
            flex-direction: column;
            margin: 0 auto; /* Centrato il container */
        }

        .add-section form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .add-section label {
            flex: 1 0 100%;
            max-width: 300px;
            display: block; /* Imposta il display su "block" per far sì che ogni label venga visualizzata su una nuova riga */
            margin-bottom: 5px;
        }

        .add-section input[type="text"],
        .add-section input[type="number"],
        .add-section input[type="date"] {
            width: 80%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .add-section input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-section input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h2>Manage my Statistics</h2></br></br>
    </div>
</header>

<div class="container">
    <div class="scrollable">
        <div class="table-wrapper">
            <table id="shoot-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Hoops</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Statistiche di tiro -->
                    <tr>
                        <td>2024-04-29</td>
                        <td>Free throw</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Free throw</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Free throw</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Free throw</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Free throw</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Free throw</td>
                        <td>10</td>
                    </tr>
                    
                </tbody>
            </table>
            
        </div>                      
        <div class="table-wrapper">
            <table id="rapidity-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Time/High</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Statistiche di rapidità -->
                    <tr>
                        <td>2024-04-29</td>
                        <td>Standing vert jump</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Three quarter sprint</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Three quarter sprint</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Standing vert jump</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Three quarter sprint</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2024-04-29</td>
                        <td>Standing vert jump</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>

    <div class="add-section-container">
        <div class="add-section">
            <h3>Add Shoot Statistic</h3>
            <form action="StatisticsController.php" method="post">
                
                <label for="shoot-type">Type:</label>
                <select id="shoot-type">
                    <option value="free-throw">Free throw</option>
                    <option value="three-pointer">3 points</option>
                    <option value="mid-range">2 points</option>
                </select>
                <label></label>
                <label for="shoot-count">Hoops:</label>
                <input type="number" id="shoot-count">/50

                <label for="shoot-date">Date:</label>
                <input type="date" id="shoot-date">
                <label></label>
                <input type="submit" value="Add">
            </form>
        </div>
        <div class="add-section">
            <h3>Add Rapidity Statistic</h3>
            <form action="StatisticsController.php" method="post">

                <label for="rapidity-type">Type:</label>
                <select id="rapidity-type">
                    <option value="sprint">Three quarter sprint</option>
                    <option value="vertMax">Max vert jump</option>
                    <option value="vertFermo">Standing vert jump</option>
                </select>
                <label></label>
                <label id="rapidity-label" for="rapidity-time">Time (seconds):</label>
                <input type="number" id="rapidity-time">
        
                <label for="rapidity-date">Date:</label>
                <input type="date" id="rapidity-date">
                <label></label>
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
</div>

<script>
    const rapidityTypeSelect = document.getElementById('rapidity-type');
    const rapidityTimeLabel = document.getElementById('rapidity-label');

    // Aggiungi un listener per il cambiamento della selezione del tipo di rapidità
    rapidityTypeSelect.addEventListener('change', function() {
        // Ottieni il valore selezionato
        const selectedValue = this.value;
        
        // Modifica l'etichetta del campo "Tempo Impiegato" in base al valore selezionato
        if (selectedValue === 'sprint') {
            rapidityTimeLabel.textContent = 'Time (seconds):';
        } else {
            rapidityTimeLabel.textContent = 'High (cm):';
        }
    });
</script>

</body>
</html>
