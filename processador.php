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
 
  <form action="cad-cpu.php" method="POST">
     <a href="index.php">Index</a>
     <h1>Cadastrar Processador</h1>
      <h6>Tipo:</h6>
      <input type="text" name="tipo" class="form-control"placeholder="Digite o tipo" required>
      <h6>Ghz:</h6>
      <input type="text" name="ghz" class="form-control"placeholder="Digite GHz" required>
      <button class="btn btn-lg btn-primary btn-block m-up" type="submit">Cadastrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Feito por Gabriel Rabelo</p>
  </form>
  
</body>
</html>