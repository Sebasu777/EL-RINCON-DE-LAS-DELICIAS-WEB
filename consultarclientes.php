<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Rincón De Las Delicias - Consultar</title>
    <link rel="shorcut icon" href="./images/EL-RINCON-DE-LAS-DELICIAS.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estiloconsultarcliente.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="imagen-consultarusuario">
<header>
    <nav>
        <div class="header-container">
            <h2 class="nav__title">El Rincón De las Delicias</h2>
            <div class="contenedor-boton">
                <a href="paginaadministrador.php" id="btn-regresar" class="botons">REGRESAR</a>
            </div>
        </div>
    </nav>
</header>

    
    <div class="contenedor1">
        <center><h4>CLIENTES</h4></center>

        <table border="1" cellpadding="10" cellspacing="0" id="tablaUsuarios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se mostrarán los usuarios a través de AJAX -->
            </tbody>
        </table>

        <h3>Agregar o Actualizar Usuario</h3>
        <form id="formUsuario" action="javascript:void(0);">
            <input type="hidden" name="id_usuario" id="id_usuario">
            <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Nombre" required>
            <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Apellido" required>
            <input class="controls" type="email" name="Email" id="Email" placeholder="Email" required>
            <input class="controls" type="text" name="Telefono" id="Telefono" placeholder="Teléfono" required>
            <button class="botons" type="submit">Guardar</button>
        </form>
    </div> 

    <script>
        $(document).ready(function() {
            function cargarUsuarios() {
                $.post('controlador/consultarusuario.php', function(data) {
                    const usuarios = JSON.parse(data);
                    let filas = '';
                    usuarios.forEach(usuario => {
                        filas += `
                        <tr>
                            <td>${usuario.id_usuario}</td>
                            <td>${usuario.Nombre}</td>
                            <td>${usuario.Apellido}</td>
                            <td>${usuario.Email}</td>
                            <td>${usuario.Telefono}</td>
                            <td>
                                <button class="botons" onclick="editarUsuario('${usuario.id_usuario}', '${usuario.Nombre}', '${usuario.Apellido}', '${usuario.Email}', '${usuario.Telefono}')">Editar</button>
                                <button class="botons btn-eliminar" onclick="eliminarUsuario('${usuario.id_usuario}')">Eliminar</button>
                            </td>
                        </tr>`;
                    });
                    $('#tablaUsuarios tbody').html(filas);
                });
            }

            cargarUsuarios();

            $('#formUsuario').on('submit', function() {
                const action = $('#id_usuario').val() === '' ? 'create' : 'update';
                const datos = $(this).serialize() + '&action=' + action;

                $.post('controlador/consultarusuario.php', datos, function(response) {
                    alert(response);
                    cargarUsuarios();
                    $('#formUsuario')[0].reset();
                });
            });

            window.eliminarUsuario = function(id_usuario) {
                if (confirm('¿Seguro que deseas eliminar este usuario?')) {
                    $.post('controlador/consultarusuario.php', { id_usuario: id_usuario, action: 'delete' }, function(response) {
                        alert(response);
                        cargarUsuarios();
                    });
                }
            };

            window.editarUsuario = function(id_usuario, Nombre, Apellido, Email, Telefono) {
                $('#id_usuario').val(id_usuario);
                $('#Nombre').val(Nombre);
                $('#Apellido').val(Apellido);
                $('#Email').val(Email);
                $('#Telefono').val(Telefono);
            };
        });
    </script>
</body>
</html>
