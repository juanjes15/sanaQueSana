<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sana Que Sana</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #DBDFEA;">
    <nav class="navbar navbar-expand-lg" style="background-color: #8294C4;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Sana Que Sana</a>
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
                            <li><a class="dropdown-item" href="views/empleado/empIndex.php">Empleado</a></li>
                            <li><a class="dropdown-item" href="views/descanso/desIndex.php">Descanso</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Medico...
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="views/medico/medIndex.php">Médico</a></li>
                            <li><a class="dropdown-item" href="views/sustitucion/susIndex.php">Sustitución</a></li>
                            <li><a class="dropdown-item" href="views/horario/horIndex.php">Horario</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="views/paciente/pacIndex.php">Paciente</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center p-4" style="background-color: #FFEAD2;">
        <h1 class="h1">Centro de Salud<br>Sana Que Sana</h1>
        <img src="#" class="img-fluid p-4 rounded-5" alt="...">
        <h5 class="h5">bla bla bla bla</h5>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>