<h1>Lista de Pacientes</h1>
<div class="row">

<?php

    include 'conexao.php';
    $pacientes = $conexao->query('select * from paciente');

    while($paciente = $pacientes->fetch_object())
    echo "<div class='card m-2' style='width: 18rem;'>
        <img src='https://cdn-icons-png.flaticon.com/512/12187/12187259.png' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-text'>$paciente->nome</h5>
        <p class='card-text'>$paciente->cpf</p>
        <a href='deleteP.php?cpf=$paciente->cpf' class='btn btn-danger'>Deletar</a>
        </div>
    </div>"

?>
