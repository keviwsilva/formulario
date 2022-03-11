<html><head></head>
<body>
    

<?php
 
include_once ("conecta.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereço = $_POST['endereço'];
$sql= "INSERT INTO usuario(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereço) VALUES ('$nome','$email','$senha','$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereço')";
$res=mysqli_query($conexao, $sql);

if($res){

    echo"<p align='center'>Cliente incluido com sucesso!</p>";

}
else{

    
    echo"<p align='center'>Erro</p>";

}



mysqli_close($conexao);



?>


</body>
</html>