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

    if(isset($_POST['pa']) && $_POST['pa'] != ''){
        $inserir = array();
        
        $inserir['pa'] = $_POST['pa'];
        $inserir['andar'] = $_POST['andar'];
        $inserir['monitor'] = $_POST['monitor'];


        cadastrar_monitor_list($conexao, $inserir);

        echo('Ultimo cadastro: PA: '.$inserir['pa'].' - Monitor: '.$inserir['monitor']);

        echo('<div class="alert alert-success" role="alert">
        Cadastro Realizado! <a href="cadastro-monitor.php">Continuar cadastrando</a>
      </div>');

    } else{
        echo('Erro');
    }
?>
</body>
</html>




