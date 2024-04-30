<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabella con scrollbar verticale</title>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 8px;
    border: 1px solid #ddd;
  }

  
    
  .sbtb,
  .sb {
    width: 80%;
    max-height: 200px; /* Altezza massima del corpo della tabella */
    overflow-y: auto; /* Attiva lo scorrimento verticale */
  }
  
</style>
</head>
<body>

<div class="sb">
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Cognome</th>
      <th>Età</th>
    </tr>
  </thead>
  <div class="sbtb">
  <tbody>
    <!-- Righe della tabella -->
    <tr>
      <td>Mario</td>
      <td>Rossi</td>
      <td>25</td>
    </tr>
    <!-- Ripeti altre righe per aumentare il contenuto -->
    <tr>
      <td>Luigi</td>
      <td>Bianchi</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Luigi</td>
      <td>Bianchi</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Luigi</td>
      <td>Bianchi</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Luigi</td>
      <td>Bianchi</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Luigi</td>
      <td>Bianchi</td>
      <td>30</td>
    </tr>
    <!-- Fine delle righe della tabella -->
    </div>
  </tbody>
</table>
</div>

</body>
</html>
