<h1>Cadastrar Médico</h1>
<form action="inserirMedico.php">
    <div class="row">
        <div class="col-2">
            <input type="number" class="form-control mb-2" name="crm" placeholder="CRM do Médico">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="nome" placeholder="Nome do Médico">
        </div>
        <div class="col-3">
            <input type="text" class="form-control mb-2" name="especialidade" placeholder="Especialidade do Médico">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-3" name="email" placeholder="E-mail do Médico">
        </div>
    </div>
    <input type="submit" class="btn btn-primary col-9" value="Cadastrar">
</form>