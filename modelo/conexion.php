<?php
class Database
{
    private static $pdo = null;

    public static function StartUp()
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=ELRINCONDELASDELICIAS;charset=utf8', 'root', '');
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>
