<h1>Lista de Médicos</h1>
<div class="row">

<?php

    include 'conexao.php';

    $medicos = $conexao->query('select * from medico');

    while($medico = $medicos->fetch_object())
    echo "<div class='card m-2' style='width: 18rem;'>
        <img src='https://cdn-icons-png.flaticon.com/512/12187/12187259.png' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-text'>$medico->nome</h5>
        <p class='card-text'>$medico->especialidade</p>
        <a href='deleteM.php?crm=$medico->crm' class='btn btn-danger'>Deletar</a>
        </div>
    </div>"

?>
