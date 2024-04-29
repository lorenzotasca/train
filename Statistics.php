<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 5px;
            text-align: right;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .table-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        table {
            width: 48%; /* Lascia un piccolo margine tra le tabelle */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto; /* Rendi lo scorrimento verticale visibile solo se necessario */
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

        tbody {
            max-height: 200px; /* Imposta un'altezza massima per il corpo della tabella */
        }

        tbody tr:first-child {
            position: sticky;
            top: 0; /* Fissa la prima riga dell'intestazione */
            background-color: #fff; /* Sfondo bianco per coprire il resto delle righe */
        }

        .add-section-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .add-section {
            width: 48%;
            display: flex;
            flex-direction: column;
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
        }

        .add-section input[type="text"],
        .add-section input[type="number"],
        .add-section input[type="date"] {
            width: 100%;
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
        <h2>Manage Statistics</h2>
    </div>
</header>

<div class="container">
    <div class="table-container">
        <table>
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
                    <td>2024-04-28</td>
                    <td>3 points</td>
                    <td>5</td>
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

        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Time/High</th>
                </tr>
            </thead>
            <tbody>
                <!-- Statistiche di rapidità -->
                <tr><td colspan="2">Nessuna statistica disponibile</td></tr>
            </tbody>
        </table>
    </div>

    <div class="add-section-container">
        <div class="add-section">
            <h3>Add Shoot Statistic</h3>
            <form>
                <label for="shoot-type">Type:</label>
                <select id="shoot-type">
                    <option value="free-throw">Free throw</option>
                    <option value="three-pointer">3 points</option>
                    <option value="mid-range">2 points</option>
                </select>
                <label for="shoot-count">Hoops:</label>
                <input type="number" id="shoot-count">
                <label for="shoot-date">Date:</label>
                <input type="date" id="shoot-date">
                <input type="submit" value="Add">
            </form>
        </div>
        <div class="add-section">
            <h3>Add Rapidity Statistic</h3>
            <form>

                <label for="rapidity-type">Type:</label>
                <select id="rapidity-type">
                    <option value="sprint">Three quarter sprint</option>
                    <option value="vertMax">Max vert jump</option>
                    <option value="vertFermo">Standing vert jump</option>
                </select>

                <label id="rapidity-label" for="rapidity-time">Time (seconds)::</label>
                <input type="number" id="rapidity-time">

                <label for="rapidity-date">Date:</label>
                <input type="date" id="rapidity-date">

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
