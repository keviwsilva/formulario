<?php
$dbnome = "form";
$conexao = mysqli_connect('localhost', 'root','1234') or die ("Erro de conexão");
$criadb =mysqli_query($conexao,"CREATE DATABASE if not exists $dbnome");
$abre=mysqli_query($conexao, "USE $dbnome");
$tbnome1 = "users";
$elimina = "DROP TABLE $tbnome1";
$criacao1 = "CREATE TABLE if not exists $tbnome1("
	."codigo smallint NOT NULL AUTO_INCREMENT,"
	."nome varchar(80) NOT NULL,"
	."email varchar(20) NOT NULL,"
	."senha varchar(30) NOT NULL,"
	."telefone varchar(20) NOT NULL,"
	."genero varchar(30) NOT NULL,"
	."data_nasc date NOT NULL,"
	."cidade varchar(30) NOT NULL,"
	."estado varchar(30) NOT NULL,"
	."endereço varchar(30) NOT NULL,"
	."PRIMARY KEY (codigo))";
$resDrop = mysqli_query($conexao,$elimina);
if ($resDrop > 0)
	{
		echo "Table $tbnome1 eliminada.<br>";
	}
	else
	 {
	 	echo "Tabela $tbnome1 não existe.<br>";
	 } 	
$resCria1 = mysqli_query($conexao,$criacao1);
if ($resCria1 > 0)
 {
	echo "Tabela $tbnome1 criada.<br>";
}
	else
	 {
  		echo "Tabela $tbnome1 não pode ser criada.<br>";
	 }
mysqli_close($conexao);
?>