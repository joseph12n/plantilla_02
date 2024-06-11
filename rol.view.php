<!DOCTYPE html>
<html>
<head>
    <title>Crear Rol</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div id="content">
        <h1>Crear Nuevo Rol</h1>
        <form>
            <label for="nombre_rol">Nombre del Rol:</label><br>
            <input type="text" id="nombre_rol" name="nombre_rol"><br><br>
            <label for="descripcion_rol">Descripción:</label><br>
            <textarea id="descripcion_rol" name="descripcion_rol"></textarea><br><br>
            <input type="submit" value="Crear Rol">
        </form> 
    </div>

</body>
</html>
