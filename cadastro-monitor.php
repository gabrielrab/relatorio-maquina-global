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
 
  <form action="cad-list-monitor.php" method="POST">
     <h1>Cadastrar Monitores</h1>
     <h6>Número da PA:</h6>
      <input type="mumber" class="form-control" name="pa" placeholder="PA:" required>
      <h6>Andar:</h6>
      <select name="andar" id="" class="form-control">
        <option hidden>Selecione</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>Outro</option>
      </select>
      
      <h6>Qual Monitor:</h6>
      <select name="monitor" class="form-control">
        <option hidden>Monitor</option>
        <?php
            $buscar = buscar_monitor($conexao);
            foreach($buscar as $i):
        ?>
            <option><?= $i['marca']; ?> - <?= $i['modelo']; ?></option>
        <?php
          endforeach;
        ?>
      </select>
      <a href="monitor.php">Adicionar Monitor</a><br>
      <a href="index.php">Adicionar Maquina</a>
      <button class="btn btn-lg btn-primary btn-block m-up" type="submit">Cadastrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Feito por Gabriel Rabelo</p>
  </form>
  
</body>
</html>