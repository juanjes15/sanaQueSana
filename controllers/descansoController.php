<?php

$rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$rutaProyecto = explode("/", $rutaCarpeta);
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/models/descanso.php';

class descansoController
{
    private $model;

    public function __construct()
    {
        $this->model = new Descanso();
    }

    public function index()
    {
        $descansos = $this->model->getDescansos();
        global $rutaProyecto;
        include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/views/descanso/desList.php';
    }

    public function createDescanso()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inicio = $_POST['inicio'];
            $final = $_POST['final'];
            $empleado = $_POST['empleado'];
            $success = $this->model->createDescanso($inicio, $final, $empleado);
            if ($success) {
                echo '<script>alert("Descanso creado exitosamente.");</script>';
            } else {
                echo '<script>alert("Error al crear el descanso.");</script>';
            }
            echo '<script>setTimeout(function() { window.location.href = "desIndex.php"; }, 13);</script>';
        } else {
            $empleados = $this->model->getEmpleados();
            global $rutaProyecto;
            include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/views/descanso/desCreate.php';
        }
    }

    public function updateDescanso($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inicio = $_POST['inicio'];
            $final = $_POST['final'];
            $empleado = $_POST['empleado'];
            $success = $this->model->updateDescanso($id, $inicio, $final, $empleado);
            if ($success) {
                echo '<script>alert("Descanso actualizado exitosamente.");</script>';
            } else {
                echo '<script>alert("Error al actualizar el descanso.");</script>';
            }
            echo '<script>setTimeout(function() { window.location.href = "desIndex.php"; }, 13);</script>';
        } else {
            $des = $this->model->getDescanso($id);
            $empleados = $this->model->getEmpleados();
            global $rutaProyecto;
            include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/views/descanso/desUpdate.php';
        }
    }

    public function deleteDescanso($id)
    {
        $success = $this->model->deleteDescanso($id);
        if ($success) {
            echo '<script>alert("Descanso eliminado exitosamente.");</script>';
        } else {
            echo '<script>alert("Error al eliminar el descanso.");</script>';
        }
        echo '<script>setTimeout(function() { window.location.href = "desIndex.php"; }, 13);</script>';
    }
}
