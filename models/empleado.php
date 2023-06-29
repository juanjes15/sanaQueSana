<?php
class Empleado
{
    private $db_connection;

    public function __construct()
    {
        $rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $rutaProyecto = explode("/", $rutaCarpeta);
        include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/core/database.php';
        $database = new Database();
        $this->db_connection = $database->getConnection();
    }

    public function createEmpleado($per_nombre, $per_direccion, $per_telefono, $per_postal, $per_cedula, $per_seguridad, $emp_ciudad, $emp_depto)
    {
        $query = "INSERT INTO persona (per_nombre, per_direccion, per_telefono, per_postal, per_cedula, per_seguridad)
         VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $per_nombre);
        $stmt->bindParam(2, $per_direccion);
        $stmt->bindParam(3, $per_telefono);
        $stmt->bindParam(4, $per_postal);
        $stmt->bindParam(5, $per_cedula);
        $stmt->bindParam(6, $per_seguridad);
        $stmt->execute();

        $query = "INSERT INTO empleado (emp_id, emp_ciudad, emp_depto)
         VALUES (LAST_INSERT_ID(), ?, ?)";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $emp_ciudad);
        $stmt->bindParam(2, $emp_depto);

        return $stmt->execute();
    }

    public function updateEmpleado($id, $per_nombre, $per_direccion, $per_telefono, $per_postal, $per_cedula, $per_seguridad, $emp_ciudad, $emp_depto)
    {
        $query = "UPDATE persona
        JOIN empleado ON persona.per_id = empleado.emp_id
        SET per_nombre = ?, per_direccion = ?, per_telefono = ?, per_postal = ?, per_cedula = ?, per_seguridad = ?, 
        emp_ciudad = ?, emp_depto = ?
        WHERE emp_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $per_nombre);
        $stmt->bindParam(2, $per_direccion);
        $stmt->bindParam(3, $per_telefono);
        $stmt->bindParam(4, $per_postal);
        $stmt->bindParam(5, $per_cedula);
        $stmt->bindParam(6, $per_seguridad);
        $stmt->bindParam(7, $emp_ciudad);
        $stmt->bindParam(8, $emp_depto);
        $stmt->bindParam(9, $id);
        return $stmt->execute();
    }

    public function deleteEmpleado($id)
    {
        $query = "DELETE FROM empleado WHERE emp_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        $query = "DELETE FROM persona WHERE per_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $id);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getEmpleados()
    {
        $query = "SELECT per_id, per_nombre, per_direccion, per_telefono, per_postal, per_cedula, per_seguridad, 
        emp_ciudad, emp_depto
        FROM persona
        INNER JOIN empleado ON persona.per_id = empleado.emp_id";
        $stmt = $this->db_connection->prepare($query);
        $stmt->execute();
        $empleados = $stmt->fetchAll();

        return $empleados;
    }

    public function getEmpleado($id)
    {
        $query = "SELECT per_id, per_nombre, per_direccion, per_telefono, per_postal, per_cedula, per_seguridad, 
        emp_ciudad, emp_depto
        FROM persona
        INNER JOIN empleado ON persona.per_id = empleado.emp_id
        WHERE emp_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $empleado;
    }
}
