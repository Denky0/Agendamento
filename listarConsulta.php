<h1>Lista de Consultas</h1>
<div class="row">

<?php

    include 'conexao.php';
    $consultas = $conexao->query('select * from consulta');

    while($consulta = $consultas->fetch_object())
    echo "<div class='card m-2' style='width: 18rem;'>
        <img src='https://cdn-icons-png.flaticon.com/512/6020/6020213.png' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-title'>$consulta->exame</h5>
        <p class='card-text'>$consulta->data</p>
        <p class='card-text'>$consulta->medico</p>
        <p class='card-text'>$consulta->paciente</p>
        <p class='card-text'>$consulta->descricao</p>
        <a href='delete.php?numero=$consulta->numero' class='btn btn-danger'>Deletar</a>
        </div>
    </div>"
    
?>

</div>