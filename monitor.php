<html>
    <head>
        <title>Global - Relatorio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body class="meio text-center">
<?php
  include_once("banco.php");
?>
 
  <form action="cad-monitor.php" method="POST">
     <a href="index.php">Index</a>
     <h1>Cadastrar Monitor</h1>
      <h6>Marca:</h6>
      <select name="marca" id="" class="form-control">
        <option hidden>Selecione</option>
        <option>Dell</option>
        <option>Benq</option>
        <option>LG</option>
        <option>Samsung</option>
        <option>Acer</option>
        <option>AOC</option>
        <option>Kemex</option>
        <option>Duex</option>
        <option>Outro</option>
      </select>
      <h6>Modelo:</h6>
      <input type="text" name="modelo" class="form-control" placeholder="Digite o modelo" required>
      <h6>Polegada:</h6>
      <input type="number" name="polegada" class="form-control" placeholder="Digite as polegadas" required>
      <a href="cadastro-monitor.php">Cadastro Monitor</a><br>
      <button class="btn btn-lg btn-primary btn-block m-up" type="submit">Cadastrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Feito por Gabriel Rabelo</p>
  </form>
  
</body>
</html>