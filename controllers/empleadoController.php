<?php

$rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$rutaProyecto = explode("/", $rutaCarpeta);
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/models/empleado.php';

class empleadoController
{
    private $model;

    public function __construct()
    {
        $this->model = new Empleado();
    }

    public function index()
    {
        $empleados = $this->model->getEmpleados();
        global $rutaProyecto;
        include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/views/empleado/empList.php';
    }

    public function createEmpleado()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $per_nombre = $_POST['per_nombre'];
            $per_direccion = $_POST['per_direccion'];
            $per_telefono = $_POST['per_telefono'];
            $per_postal = $_POST['per_postal'];
            $per_cedula = $_POST['per_cedula'];
            $per_seguridad = $_POST['per_seguridad'];
            $emp_ciudad = $_POST['emp_ciudad'];
            $emp_depto = $_POST['emp_depto'];
            $success = $this->model->createEmpleado($per_nombre, $per_direccion, $per_telefono, $per_postal, $per_cedula, $per_seguridad, $emp_ciudad, $emp_depto);
            if ($success) {
                echo '<script>alert("Empleado creado exitosamente.");</script>';
            } else {
                echo '<script>alert("Error al crear el empleado.");</script>';
            }
            echo '<script>setTimeout(function() { window.location.href = "empIndex.php"; }, 13);</script>';
        } else {
            global $rutaProyecto;
            include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/views/empleado/empCreate.php';
        }
    }

    public function updateEmpleado($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $per_nombre = $_POST['per_nombre'];
            $per_direccion = $_POST['per_direccion'];
            $per_telefono = $_POST['per_telefono'];
            $per_postal = $_POST['per_postal'];
            $per_cedula = $_POST['per_cedula'];
            $per_seguridad = $_POST['per_seguridad'];
            $emp_ciudad = $_POST['emp_ciudad'];
            $emp_depto = $_POST['emp_depto'];
            $success = $this->model->updateEmpleado($id, $per_nombre, $per_direccion, $per_telefono, $per_postal, $per_cedula, $per_seguridad, $emp_ciudad, $emp_depto);
            if ($success) {
                echo '<script>alert("Empleado actualizado exitosamente.");</script>';
            } else {
                echo '<script>alert("Error al actualizar el empleado.");</script>';
            }
            echo '<script>setTimeout(function() { window.location.href = "empIndex.php"; }, 13);</script>';
        } else {
            $emp = $this->model->getEmpleado($id);
            global $rutaProyecto;
            include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/views/empleado/empUpdate.php';
        }
    }

    public function deleteEmpleado($id)
    {
        $success = $this->model->deleteEmpleado($id);
        if ($success) {
            echo '<script>alert("Empleado eliminado exitosamente.");</script>';
        } else {
            echo '<script>alert("Error al eliminar el empleado.");</script>';
        }
        echo '<script>setTimeout(function() { window.location.href = "empIndex.php"; }, 13);</script>';
    }
}
