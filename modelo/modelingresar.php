<?php
include_once 'conexion.php'; // Asegúrate de que este archivo contiene la clase Database

class Usuario
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp(); // Establece la conexión a la base de datos
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    // Método para autenticar al usuario
    public function Autenticar($email, $password)
    {
        try
        {
            // Llamar al procedimiento almacenado para verificar credenciales
            $stmt = $this->pdo->prepare("CALL Login(:email, :password, @result)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // Obtener el resultado del procedimiento almacenado
            $result = $this->pdo->query("SELECT @result AS result")->fetch(PDO::FETCH_ASSOC)['result'];

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}
?>
