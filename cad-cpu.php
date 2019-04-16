<html>
    <head>
        <title>CPU Processa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body>
 <?php
    include_once("banco.php");

    if(isset($_POST['tipo']) && $_POST['tipo'] != ''){
        $inserir = array();

        $inserir['tipo'] = $_POST['tipo'];
        $inserir['ghz'] = $_POST['ghz'];

        cadastrar_cpu($conexao, $inserir);

        echo('<div class="alert alert-success" role="alert">
        Cadastro Realizado! <a href="index.php">Continuar cadastrando</a>
      </div>');

    } else{
        echo('Erro');
    }
?>
</body>
</html>




