<html>
    <head>
        <title>Global - Relatorio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body class="meio text-center">
<?php
  include_once("banco.php");
?>
 
  <form action="" method="POST" style="min-width: 320px">
     <h1>Patrimônio</h1>
     <h6>Número da PA:</h6>
      <input type="number" class="form-control" id="pa" name="pa" placeholder="PA:" required>
      <h6>Andar:</h6>
      <select name="andar" id="andar" class="form-control" required>
        <option hidden>Selecione</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>Outro</option>
      </select>
      <h6>Tipo:</h6>
      <select name="tipo" id="tipo" class="form-control" required>
        <option hidden>Selecione</option>
        <option>Monitor</option>
        <option>Máquina</option>
      </select>
      <a id="buscar" href="#" onclick="searchData()"><i class="fas fa-search"></i> Buscar</a>
      
    <!-- <div class="card" style="max-width: 320px">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
      <button class="btn btn-lg btn-primary btn-block m-up" type="submit">Cadastrar</button> -->
        <p class="mt-5 mb-3 text-muted">&copy; Feito por Gabriel Rabelo</p>
  </form>
  <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
  <script>
    function searchData(){
        const andar = $('#andar').val();
        const pa = $('#pa').val();
        const tipo = $('#tipo').val();
        if(andar == "Selecione" ||pa == "" || tipo == "Selecione"){
            alert("Você deve preencher todos os campos primeiro.");
        } else{
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: 'configurarTrabalho.php',
                async: true,
                data: { andar: andar, pa: pa, tipo: tipo },
                succes: function response(response){
                    
                }
            });
        }
    }

  </script>
</body>
</html>