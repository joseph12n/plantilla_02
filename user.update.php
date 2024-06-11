<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div id="content">
        <h1>Actualizar Usuario</h1>

        <form>
            <div class="form-group">
                <label for="nombre_usuario">Nombre de Usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" value="Nombre del usuario a actualizar" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" value="Correo electrónico del usuario a actualizar" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena">
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select id="rol" name="rol">
                    </select>
            </div>

            <button type="submit">Actualizar Usuario</button>
        </form> 
    </div>

</body>
</html>
