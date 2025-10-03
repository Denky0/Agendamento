<?php 

    include 'conexao.php';

    $cpf = $_GET['cpf'];
    $nome = $_GET['nome'];
    $telefone = $_GET['telefone'];
    $aniversario = $_GET['aniversario'];

    echo "<h1>Paciente</h1>";
    echo $nome;
    echo "<br>";
    echo $cpf;
    echo "<br>";
    echo $telefone;
    echo "<br>";
    echo $aniversario;

    $insert = "INSERT INTO paciente VALUES('$cpf', '$nome', '$telefone', '$aniversario')";

    $conexao->query($insert);

?>