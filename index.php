<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <h1 style="text-align: center;">Prodaja automobila</h1>
  <hr>
  <div class="center">
</head>
<body>
  <table>
    <thead>
      <th>Model</th>
      <th>Cena</th>
      <th>Godiste</th>
      <th>Boja</th>
      <th>Gorivo</th>
      <th>Stanje</th>
      <th>Grad</th>
      <th>Registrovan</th>
    </thead>
    <tbody id="content">
      
    </tbody>

  </table>
</div>
  <script src="main.js"></script>
  <style>
    .center{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    table, th, td{
      border: 1px solid black;
      font-size: 25px;
    }
    th{
      padding: 5px;
    }
    td{
      padding: 5px;
    }
  </style>
</body>
</html>