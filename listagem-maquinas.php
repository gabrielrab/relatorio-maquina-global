<html>
    <head>
        <title>Global - Relatorio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body class="text-center">
<h3>Listagem de Máquinas</h3>
<?php
  include_once("banco.php");
?>
<section class="text-center meio">
<div class="table-responsive" style="max-width: 95vw;">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Andar</th>
                <th>Pa</th>
                <th>Tipo</th>
                <th>Processador</th>
                <th>Hd</th>
                <th>Memória</th>
            </tr>
            <tbody>
            <?php
                $buscar = listar_maquinas($conexao);
                foreach($buscar as $i):
            ?>
            <tr>
                <th><?= $i['andar']; ?></th>
                <th><?= $i['pa']; ?></th>
                <th><?= $i['tipo']; ?></th>
                <th><?= $i['processador']; ?></th>
                <th><?= $i['hd']; ?></th>
                <th><?= $i['memoria']; ?></th>
            </tr>
            <?php
                endforeach;
            ?>
            </tbody>
        </thead>
        </table>
    </div>
</section>
</body>
</html>