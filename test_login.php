<?php

    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])){

        include_once('conecta.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql = "SELECT *FROM usuario WHERE nome='$nome' and senha='$senha'";
        $result = $conexao -> query($sql);

        echo "$result";
    }
    else{

        header('location: login.html');

    }

?>