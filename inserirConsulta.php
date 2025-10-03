<?php 

    include 'conexao.php';

    $numero = $_GET['numero'];
    $data = $_GET['data'];
    $medico = $_GET['medico'];
    $paciente = $_GET['paciente'];
    $exame = $_GET['exame'];
    $descricao = $_GET['descricao'];

    echo "<h1>Consulta</h1>";
    echo $numero;
    echo "<br>";
    echo $data;
    echo "<br>";
    echo $medico;
    echo "<br>";
    echo $paciente;
    echo "<br>";
    echo $exame;
    echo "<br>";
    echo $descricao;

    $insert = "INSERT INTO consulta VALUES('$numero', '$data', '$medico', '$paciente', '$exame', '$descricao')";

    $conexao->query($insert);

?>