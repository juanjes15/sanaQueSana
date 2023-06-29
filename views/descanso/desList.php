<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sana Que Sana</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                <h1 class="h1">Descansos</h1>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-4">
                <a href="desIndex.php?action=createDescanso" class="btn btn-success">Nuevo descanso</a>
            </div>
        </div>

        <div class="row justify-content-center py-3">
            <div class="col-10">
                <table class="table table-warning">
                    <thead class="table-danger">
                        <tr class="text-start">
                            <th scope="col">Empleado</th>
                            <th scope="col">Inicio</th>
                            <th scope="col">Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($descansos as $des) { ?>
                            <tr>
                                <td class="text-start"><?php echo $des['per_nombre']; ?></td>
                                <td class="text-start"><?php echo $des['des_inicio']; ?></td>
                                <td class="text-start"><?php echo $des['des_final']; ?></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end">
                                        <a title="Editar" href="desIndex.php?id=<?php echo $des['des_id']; ?>&action=updateDescanso" class="btn btn-warning me-2"><i class="bi bi-pencil-square"></i></a>
                                        <a title="Eliminar" href="desIndex.php?id=<?php echo $des['des_id']; ?>&action=deleteDescanso" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar <?php echo $des['des_inicio'] . ' - ' . $des['des_final']; ?>?')"><i class="bi bi-trash3"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>

</html>