<?php

$rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$rutaProyecto = explode("/", $rutaCarpeta);
require_once $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/model/descanso.php';

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
        include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/view/descanso/desList.php';
    }

    public function createDescanso()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $temp = new Descanso();
            $temp->setInicio($_POST['inicio']);
            $temp->setFinal($_POST['final']);
            $success = $this->model->createDescanso($temp);
            if ($success) {
                echo '<script>alert("Descanso creado exitosamente.");</script>';
            } else {
                echo '<script>alert("Error al crear el descanso.");</script>';
            }
            echo '<script>setTimeout(function() { window.location.href = "desIndex.php"; }, 13);</script>';
        } else {
            global $rutaProyecto;
            include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/view/descanso/desCreate.php';
        }
    }

    public function updateDescanso($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $temp = new Descanso();
            $temp->setId($id);
            $temp->setInicio($_POST['inicio']);
            $temp->setFinal($_POST['final']);
            $success = $this->model->updateDescanso($temp);
            if ($success) {
                echo '<script>alert("Descanso actualizado exitosamente.");</script>';
            } else {
                echo '<script>alert("Error al actualizar el descanso.");</script>';
            }
            echo '<script>setTimeout(function() { window.location.href = "desIndex.php"; }, 13);</script>';
        } else {
            $des = $this->model->getDescanso($id);
            global $rutaProyecto;
            include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/view/descanso/desUpdate.php';
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
