<?php 

    include 'conexao.php';

    $cpf = $_GET['cpf'];

    $conexao->query("DELETE FROM paciente WHERE cpf = $cpf");

    header('location:index.php');

?>