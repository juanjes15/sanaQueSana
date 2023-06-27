<?php
class Descanso
{
    private $db_connection;
    private $id;
    private $inicio;
    private $final;

    public function __construct($id = null, $inicio = null, $final = null)
    {
        $rutaCarpeta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $rutaProyecto = explode("/", $rutaCarpeta);
        include $_SERVER['DOCUMENT_ROOT'] . "/" . $rutaProyecto[1] . '/core/database.php';
        $database = new Database();
        $this->db_connection = $database->getConnection();

        $this->id = $id;
        $this->inicio = $inicio;
        $this->final = $final;
    }

    public function setId($value)
    {
        $this->id = $value;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setInicio($value)
    {
        $this->inicio = $value;
    }
    public function getInicio()
    {
        return $this->inicio;
    }
    public function setFinal($value)
    {
        $this->final = $value;
    }
    public function getFinal()
    {
        return $this->final;
    }

    public function createDescanso(Descanso $descanso)
    {
        $inicio = $descanso->getInicio();
        $final = $descanso->getFinal();

        $query = "INSERT INTO descanso (des_inicio, des_final) VALUES (?, ?)";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $inicio);
        $stmt->bindParam(2, $final);
        $insertado = $stmt->execute();
        return $insertado;
    }

    public function updateDescanso(Descanso $descanso)
    {
        $id = $descanso->getId();
        $inicio = $descanso->getInicio();
        $final = $descanso->getFinal();

        $query = "UPDATE descanso SET des_inicio = ?, des_final = ? WHERE des_id = ?";
        $stmt = $this->db_connection->prepare($query);
        $stmt->bindParam(1, $inicio);
        $stmt->bindParam(2, $final);
        $stmt->bindParam(3, $id);
        $actualizado = $stmt->execute();
        return $actualizado;
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

        if ($resultado) {
            $descanso = new Descanso($resultado['des_id'], $resultado['des_inicio'], $resultado['des_final']);
            return $descanso;
        } else {
            return null;
        }
    }
}
