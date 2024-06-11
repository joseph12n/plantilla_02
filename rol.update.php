<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Rol</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div id="content">
        <h1>Actualizar Rol</h1>
        <form>
            <label for="nombre_rol">Nombre del Rol:</label><br>
            <input type="text" id="nombre_rol" name="nombre_rol" value="Nombre del rol a actualizar"><br><br>
            <label for="descripcion_rol">Descripción:</label><br>
            <textarea id="descripcion_rol" name="descripcion_rol">Descripción del rol a actualizar</textarea><br><br>
            <input type="submit" value="Actualizar Rol">
        </form> 
    </div>

</body>
</html>
