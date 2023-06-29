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
                            <li><a class="dropdown-item" href="empIndex.php">Empleado</a></li>
                            <li><a class="dropdown-item" href="../descanso/desIndex.php">Descanso</a></li>
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
                <h1 class="h2">Crear Empleado</h1>
            </div>
        </div>
        <div class="row py-2">
            <form method="POST" action="empIndex.php?action=createEmpleado">
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="per_cedula" class="col-form-label">Cédula:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="per_cedula" name="per_cedula" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="per_nombre" class="col-form-label">Nombre:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="per_nombre" name="per_nombre" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="per_direccion" class="col-form-label">Dirección:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="per_direccion" name="per_direccion" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="per_telefono" class="col-form-label">Teléfono:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="per_telefono" name="per_telefono" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="per_postal" class="col-form-label">Código Postal:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="per_postal" name="per_postal" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="per_seguridad" class="col-form-label">Número de la Seguridad Social:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="per_seguridad" name="per_seguridad" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="emp_ciudad" class="col-form-label">Ciudad:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="emp_ciudad" name="emp_ciudad" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-1">
                        <label for="emp_depto" class="col-form-label">Departamento:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="emp_depto" name="emp_depto" class="form-control">
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-2">
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>

</html>