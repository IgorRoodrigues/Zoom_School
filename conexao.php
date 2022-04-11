<?php
$servidor="127.0.0.1";
$usuario="aparicio";
$senha="123";
$banco="cadastro_usuarios";
$conexao=mysqli_connect($servidor,$usuario,$senha) or die (mysqli_error());
mysqli_select_db($conexao, $banco) or die ("Erro ao Conectar com o Banco");
?>