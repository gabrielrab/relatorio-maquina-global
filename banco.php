<?php

// $bdServidor = 'localhost';
// $porta = '3306';
// $bdUsuario = 'root';
// $bdSenha = '';
// $bdBanco = 'global';

$bdServidor = 'us-cdbr-iron-east-02.cleardb.net';
$bdUsuario = 'bbf4f164858927';
$bdSenha = '1bb50750';
$bdBanco = 'heroku_b1ff7657d8edef0';


$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

mysqli_set_charset($conexao, "utf8");

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

function buscar_processador($conexao){
    $sql="SELECT * FROM processador;";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
 }

function listar_maquinas($conexao){
   $sql="SELECT * FROM maquina ORDER BY pa ASC;";
   
   $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
   
   return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

 function buscar_monitor($conexao){
   $sql="SELECT * FROM monitor";
   $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
   return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function all_monitor($conexao){
   $sql="SELECT * FROM listagem_monitor";
   $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
   return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function cadastrar_maquina($conexao, $inserir){
   $sql="INSERT INTO maquina (pa, andar, tipo, processador, hd, memoria) VALUES (
      '{$inserir['pa']}',
      '{$inserir['andar']}',
      '{$inserir['tipo']}',
      '{$inserir['processador']}',
      '{$inserir['hd']}',
      '{$inserir['memoria']}'
   );";

   mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: ".mysqli_error($conexao));
}

function cadastrar_monitor($conexao, $inserir){
   $sql="INSERT INTO monitor (marca, modelo, polegada) VALUES (
      '{$inserir['marca']}',
      '{$inserir['modelo']}',
      '{$inserir['polegada']}'
   );";

   mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: ".mysqli_error($conexao));
}


function cadastrar_monitor_list($conexao, $inserir){
   $sql="INSERT INTO listagem_monitor (pa, andar, monitor) VALUES (
      '{$inserir['pa']}',
      '{$inserir['andar']}',
      '{$inserir['monitor']}'
   );";

   mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: ".mysqli_error($conexao));
}

function cadastrar_cpu($conexao, $inserir){
   $sql="INSERT INTO processador (tipo, ghz) VALUES (
      '{$inserir['tipo']}',
      '{$inserir['ghz']}'
   );";

   mysqli_query($conexao, $sql) or die ("Erro ao inserir dados: ".mysqli_error($conexao));
}
?>