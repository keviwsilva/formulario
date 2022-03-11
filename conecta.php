<?php
$servidor = "localhost"; 
$bd = "form"; 
$usuario = "root"; 
$senha = "1234"; 
$conexao = mysqli_connect($servidor, $usuario, $senha) or die ("ERRO NA CONEXÃO");
$db = mysqli_select_db($conexao,$bd) or die ("Erro na seleção do banco");

?>