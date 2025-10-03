<h1>Lista de Médicos</h1>
<div class="row">

<?php

    include 'conexao.php';
    $consultas = $conexao->query('select * from consulta');

    while($consulta = $consultas->fetch_object())
    echo "<div class='card m-2' style='width: 18rem;'>
        <img src='https://cdn-icons-png.flaticon.com/512/12187/12187259.png' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-text'>$consulta->medico</h5>
        <a href='delete.php?numero=$consulta->medico' class='btn btn-danger'>Deletar</a>
        </div>
    </div>"

?>
