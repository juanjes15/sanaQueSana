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

    public function createDescanso($inicio, $final)
    {
        $query = "INSERT INTO descanso (des_inicio, des_final) VALUES (?, ?)";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $inicio);
        $stmt->bindParam(2, $final);
        return $stmt->execute();
    }

    public function updateDescanso($id, $inicio, $final)
    {
        $query = "UPDATE descanso SET des_inicio = ?, des_final = ? WHERE des_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $inicio);
        $stmt->bindParam(2, $final);
        $stmt->bindParam(3, $id);
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
        $query = "SELECT * FROM descanso";
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
}
