<?php
class Descanso
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

    public function createDescanso($inicio, $final, $empleado)
    {
        $query = "INSERT INTO descanso (des_inicio, des_final, emp_id) VALUES (?, ?, ?)";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $inicio);
        $stmt->bindParam(2, $final);
        $stmt->bindParam(3, $empleado);
        return $stmt->execute();
    }

    public function updateDescanso($id, $inicio, $final, $empleado)
    {
        $query = "UPDATE descanso SET des_inicio = ?, des_final = ?, emp_id = ? WHERE des_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $inicio);
        $stmt->bindParam(2, $final);
        $stmt->bindParam(3, $empleado);
        $stmt->bindParam(4, $id);
        return $stmt->execute();
    }

    public function deleteDescanso($id)
    {
        $query = "DELETE FROM descanso WHERE des_id = ?";
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

    public function getDescansos()
    {
        $query = "SELECT * FROM descanso 
        INNER JOIN empleado ON descanso.emp_id = empleado.emp_id
        INNER JOIN persona ON descanso.emp_id = persona.per_id";
        $stmt = $this->db_connection->prepare($query);
        $stmt->execute();
        $descansos = $stmt->fetchAll();

        return $descansos;
    }

    public function getDescanso($id)
    {
        $query = "SELECT * FROM descanso WHERE des_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public function getEmpleados()
    {
        $query = "SELECT per_id, per_nombre, per_cedula
        FROM persona
        INNER JOIN empleado ON persona.per_id = empleado.emp_id";
        $stmt = $this->db_connection->prepare($query);
        $stmt->execute();
        $empleados = $stmt->fetchAll();

        return $empleados;
    }
}
