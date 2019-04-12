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
 
  <form action="cad-processa.php" method="POST">
     <h1>Cadastrar Máquina</h1>
     <h6>Número da PA:</h6>
      <input type="mumber" class="form-control" name="pa" placeholder="PA:" required>
      <h6>Tipo da Máquina:</h6>
      <select name="tipo" id="" class="form-control">
        <option hidden>Selecione</option>
        <option>Montada</option>
        <option>Lenovo</option>
        <option>HP</option>
        <option>Dell</option>
        <option>Outra</option>
      </select>
      <h6>Qual Processador:</h6>
      <select name="processador" class="form-control">
        <option hidden>Processador</option>
        <?php
            $buscar = buscar_processador($conexao);
            foreach($buscar as $i):
        ?>
            <option><?= $i['tipo']; ?> - <?= $i['ghz']; ?></option>
        <?php
          endforeach;
        ?>
      </select>
      <h6>Tamanho HD:</h6>
      <select name="hd" id="" class="form-control">
        <option hidden>Hard Disk</option>
        <option>320 GB</option>
        <option>500 GB</option>
        <option>720 GB</option>
        <option>1 Tb</option>
      </select>
      <h6>Tamanho Memória:</h6>
      <select name="memoria" id="" class="form-control">
        <option hidden>Memória</option>
        <option>2 GB</option>
        <option>4 GB</option>
        <option>6 GB</option>
        <option>8 GB</option>
      </select>
      <a href="monitor.php">Adicionar Monitor</a>
      <h6>Monitor:</h6>
      <select name="monitor" id="" class="form-control">
        <option hidden>Monitor</option>
        <?php
            $buscar = buscar_monitor($conexao);
            foreach($buscar as $i):
        ?>
            <option><?= $i['marca']; ?> - <?= $i['modelo']; ?> - <?= $i['polegada']; ?>"</option>
        <?php
          endforeach;
        ?>
      </select>
      <button class="btn btn-lg btn-primary btn-block m-up" type="submit">Cadastrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Feito por Gabriel Rabelo</p>
  </form>
  
</body>
</html>