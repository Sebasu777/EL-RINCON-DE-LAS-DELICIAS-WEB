Create database ELRINCONDELASDELICIAS;

Use ELRINCONDELASDELICIAS;

-- Crear tabla Usuario
CREATE TABLE Usuario (
    id_usuario CHAR(6) NOT NULL PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Apellido VARCHAR(30) NOT NULL,
    Email VARCHAR(60),
    Telefono VARCHAR(15),
    Contraseña VARCHAR(40)
);
-- Insertar datos en la tabla Usuario
INSERT INTO Usuario (id_usuario, Nombre, Apellido, Email, Telefono, Contraseña) VALUES 
('USR001', 'Juan', 'Pérez', 'juan.perez@Gmail.com', '312568497', 'password1'),
('USR002', 'Ana', 'García', 'ana.garcia@Gmail.com', '310458721', 'password2'),
('USR003', 'Luis', 'Martínez', 'luis.martinez@Gmail.com', '314652078', 'password3'),
('USR004', 'María', 'López', 'maria.lopez@Gmail.com', '321456872', 'password4'),
('USR005', 'Carlos', 'González', 'carlos.gonzalez@Gmail.com', '316258963', 'password5'),
('USR006', 'Elena', 'Sánchez', 'elena.sanchez@Gmail.com', '320147852', 'password6'),
('USR007', 'José', 'Ramírez', 'jose.ramirez@Gmail.com', '322059874', 'password7'),
('USR008', 'Carmen', 'Torres', 'carmen.torres@Gmail.com', '318547265', 'password8'),
('USR009', 'Miguel', 'Flores', 'miguel.flores@Gmail.com', '311025064', 'password9'),
('USR010', 'Laura', 'Rivera', 'laura.rivera@Gmail.com', '310587456', 'password10'),
('USR011', 'Lorena', 'Ruiz', 'lorena.ruiz@Gmail.com', '310587456', 'password11');

-- Crear tabla Administrador
CREATE TABLE Administrador (
    id_admin CHAR(6) NOT NULL PRIMARY KEY,
    Nombre VARCHAR(30) NOT NULL,
    Apellido VARCHAR(30) NOT NULL,
    Email VARCHAR(60),
    Telefono VARCHAR(15),
    Contraseña VARCHAR(40)
);
-- Insertar datos en la tabla Administrador
INSERT INTO Administrador (id_admin, Nombre, Apellido, Email, Telefono, Contraseña) VALUES 
('ADM001', 'Maritza', 'Garcia', 'Mary.Garcia@Gmail.com', '3157407250', 'adminpass1'),
('ADM002', 'Sebastian', 'Jiménez', 'sebastian.jimenez@Gmail.com', '3209406350', 'adminpass2');


DELIMITER //

CREATE PROCEDURE Login(IN email VARCHAR(60), IN password VARCHAR(40), OUT result VARCHAR(50))
BEGIN
    DECLARE user_count INT;
    DECLARE admin_count INT;

    -- Verificar en la tabla Usuario
    SELECT COUNT(*) INTO user_count
    FROM Usuario
    WHERE Email = email AND Contraseña = password;

    -- Verificar en la tabla Administrador
    SELECT COUNT(*) INTO admin_count
    FROM Administrador
    WHERE Email = email AND Contraseña = password;

    -- Determinar el resultado
    IF user_count > 0 THEN
        SET result = 'Usuario';
    ELSEIF admin_count > 0 THEN
        SET result = 'Administrador';
    ELSE
        SET result = 'Credenciales incorrectas';
    END IF;
END //
DELIMITER ;

CALL Login('email@Gmail.com', 'password', @resultado);
SELECT @resultado;
-- Seleccionar todos los registros de la tabla Usuario
SELECT * FROM Usuario;
-- Seleccionar todos los registros de la tabla Administrador
SELECT * FROM Administrador;
-- Combinar listas de usuarios y administradores
SELECT id_usuario AS ID, Nombre, Apellido, Email, Telefono, 'Usuario' AS Tipo
FROM Usuario
UNION
SELECT id_admin AS ID, Nombre, Apellido, Email, Telefono, 'Administrador' AS Tipo
FROM Administrador;

SELECT * FROM Administrador;
SELECT * FROM Usuario;



