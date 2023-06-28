<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sana Que Sana</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #DBDFEA;">
    <nav class="navbar navbar-expand-lg" style="background-color: #8294C4;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">Sana Que Sana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Empleado...
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../empleado/empIndex.php">Empleado</a></li>
                            <li><a class="dropdown-item" href="desIndex.php">Descanso</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Medico...
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../medico/medIndex.php">Médico</a></li>
                            <li><a class="dropdown-item" href="../sustitucion/susIndex.php">Sustitución</a></li>
                            <li><a class="dropdown-item" href="../horario/horIndex.php">Horario</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../paciente/pacIndex.php">Paciente</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center p-4" style="background-color: #FFEAD2;">
        <div class="row py-3">
            <div class="col">
                <h1 class="h2">Actualizar Descanso</h1>
            </div>
        </div>
        <div class="row py-3">
            <form method="POST" action="desIndex.php?id=<?php echo $des['des_id'] ?>&action=updateDescanso">
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="inicio" class="col-form-label">Inicio:</label>
                    </div>
                    <div class="col-4">
                        <input type="date" id="inicio" name="inicio" class="form-control" value="<?php echo $des['des_inicio']; ?>">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="final" class="col-form-label">Final:</label>
                    </div>
                    <div class="col-4">
                        <input type="date" id="final" name="final" class="form-control" value="<?php echo $des['des_final']; ?>">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-2">
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>

</html>