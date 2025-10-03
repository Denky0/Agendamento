<?php 

    include 'conexao.php';

    $numero = $_GET['numero'];

    $conexao->query("DELETE FROM consulta WHERE numero = $numero");

    header('location:index.php');

?>