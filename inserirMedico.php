<?php 

    include 'conexao.php';

    $crm = $_GET['crm'];
    $nome = $_GET['nome'];
    $especialidade = $_GET['especialidade'];
    $email = $_GET['email'];

    echo "<h1>Médico</h1>";
    echo $crm;
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $especialidade;
    echo "<br>";
    echo $email;

    $insert = "INSERT INTO medico VALUES('$crm', '$nome', '$especialidade', '$email')";

    $conexao->query($insert);

?>