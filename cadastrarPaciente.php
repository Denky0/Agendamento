<h1>Cadastrar Paciente</h1>
<form action="inserirPaciente.php">
    <div class="row">
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="cpf" placeholder="CPF do Paciente">
        </div>
        <div class="col-3">
            <input type="text" class="form-control mb-2" name="nome" placeholder="Nome do Paciente">
        </div>
        <div class="col-2">
            <input type="number" class="form-control mb-2" name="telefone" placeholder="Telefone do Paciente">
        </div>
        <div class="col-2">
            <input type="date" class="form-control mb-3" name="aniversario">
        </div>
    </div>
    <input type="submit" class="btn btn-success col-9" value="Cadastrar">
</form>