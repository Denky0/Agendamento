<?php 

    include 'conexao.php';

    $crm = $_GET['crm'];

    $conexao->query("DELETE FROM medico WHERE crm = $crm");

    header('location:index.php');

?>