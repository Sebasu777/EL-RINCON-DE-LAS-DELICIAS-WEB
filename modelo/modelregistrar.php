<?php
include_once 'conexion.php'; // Asegúrate de que este archivo existe y contiene la clase Database

class Usuario
{
    private $pdo;

    // Propiedades correspondientes a la tabla Usuario
    public $id_usuario;
    public $NombreUsuario;
    public $ApellidoUsuario;
    public $EmailUsuario;
    public $TelefonoUsuario;
    public $ContraseñaUsuario;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo =  Database::StartUp(); // Establece la conexión a la base de datos
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    // Función para verificar si un correo electrónico ya está registrado
    public function VerificarEmail($email)
    {
        try 
        {
            $stm = $this->pdo->prepare("SELECT COUNT(*) FROM Usuario WHERE Email = ?");
            $stm->execute(array($email));
            return $stm->fetchColumn() > 0;
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM Usuario");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id_usuario)
    {
        try 
        {
            $stm = $this->pdo->prepare("SELECT * FROM Usuario WHERE id_usuario = ?");
            $stm->execute(array($id_usuario));
            return $stm->fetch(PDO::FETCH_OBJ);
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_usuario)
    {
        try 
        {
            $stm = $this->pdo->prepare("DELETE FROM Usuario WHERE id_usuario = ?");
            $stm->execute(array($id_usuario));
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try 
        {
            $sql = "UPDATE Usuario SET 
                        Nombre = ?, 
                        Apellido = ?, 
                        Email = ?, 
                        Telefono = ?, 
                        Contraseña = ? 
                    WHERE id_usuario = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->NombreUsuario,
                        $data->ApellidoUsuario,
                        $data->EmailUsuario,
                        $data->TelefonoUsuario,
                        $data->ContraseñaUsuario,
                        $data->id_usuario
                    )
                );
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar($data)
    {
        try 
        {
            // Verificar si el correo electrónico ya existe
            if ($this->VerificarEmail($data->EmailUsuario)) {
                echo "<script>alert('El usuario ya está registrado.'); window.location.href='../registrar.php';</script>";
                return; // Salir de la función para evitar el registro
            }

            // Si el email no existe, procedemos a registrar el usuario
            $sql = "INSERT INTO Usuario (id_usuario, Nombre, Apellido, Email, Telefono, Contraseña) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            
            $stmt = $this->pdo->prepare($sql);
            
            // Ejecutar la consulta para insertar el nuevo usuario
            if ($stmt->execute(
                array(
                    $data->id_usuario,
                    $data->NombreUsuario,
                    $data->ApellidoUsuario,
                    $data->EmailUsuario,
                    $data->TelefonoUsuario,
                    $data->ContraseñaUsuario
                )
            )) {
                // Redirigir directamente al index sin mensaje de éxito
                header("Location: ../index.php");
                exit();
            } else {
                echo "<script>alert('Error al insertar datos.'); window.location.href='../registrar.php';</script>";
            }
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}
?>
