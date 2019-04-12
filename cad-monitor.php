<html>
    <head>
        <title>Monitor Processa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body>
 <?php
    include_once("banco.php");

    if(isset($_POST['marca']) && $_POST['marca'] != ''){
        $inserir = array();

        $inserir['marca'] = $_POST['marca'];
        $inserir['modelo'] = $_POST['modelo'];
        $inserir['polegada'] = $_POST['polegada'];

        cadastrar_monitor($conexao, $inserir);

        echo('<div class="alert alert-success" role="alert">
        Cadastro Realizado! <a href="monitor.php">Continuar cadastrando</a>
      </div>');

    } else{
        echo('Erro');
    }
?>
</body>
</html>




