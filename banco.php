<?php

$bdServidor = 'localhost';
$porta = '3306';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'global';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

mysqli_set_charset($conexao, "utf8");

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

function buscar_processador($conexao){
    $sql="SELECT * FROM processador";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
 }

 function buscar_monitor($conexao){
   $sql="SELECT * FROM monitor";
   $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
   return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function cadastrar_maquina($conexao, $inserir){
   $sql="INSERT INTO maquina (pa, tipo, processador, hd, memoria, monitor) VALUES (
      '{$inserir['pa']}',
      '{$inserir['tipo']}',
      '{$inserir['processador']}',
      '{$inserir['hd']}',
      '{$inserir['memoria']}',
      '{$inserir['monitor']}'
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
?>