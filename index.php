<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Agendamento Médico</title>
</head>
<body>
    <body class="bg-primary">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Início</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?tela=paciente">👤Cadastrar Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?tela=medico">⚕️Cadastrar Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?tela=consulta">🕮 Cadastrar Agendamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?tela=cadastroM">🧑‍⚕️ Cadastro de Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?tela=cadastroP">😷 Cadastro de Pacientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <?php 
            $tela = isset($_GET['tela']) ? $_GET['tela']: '';
            switch ($tela) {
                case 'paciente':
                    include('cadastrarPaciente.php');
                    break;

                case 'medico':
                    include('cadastrarMedico.php');
                    break;

                case 'consulta':
                    include('cadastrarConsulta.php');
                    break;

                case 'cadastroM';
                    include('listarCadastroM.php');
                    break;

                case 'cadastroP';
                    include('listarCadastroP.php');
                    break;

                default:
                    include('listarConsulta.php');
                    break;
            }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>