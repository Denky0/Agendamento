<h1>Agendar Consulta</h1>
<form action="inserirConsulta.php">
    <div class="row">
        <div class="col-2">
            <input type="number" class="form-control mb-2" name="numero" placeholder="Número da Consulta" required>
        </div>
        <div class="col-2">
            <input type="date" class="form-control mb-2" name="data" placeholder="Data da Consulta">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="medico" placeholder="Médico da Consulta">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="paciente" placeholder="Paciente da Consulta">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-2" name="exame" placeholder="Exames para Consulta">
        </div>
        <div class="col-2">
            <input type="text" class="form-control mb-3" name="descricao" placeholder="Descrição da Consulta">
        </div>
    </div>
    <input type="submit" class="btn btn-primary col-12" value="Cadastrar">
</form>