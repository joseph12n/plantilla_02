<!DOCTYPE html>
<html>
<head>
    <title>Buscar Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div id="content">
        <h1>Buscar Usuario</h1>

        <form>
            <div class="form-group">
                <label for="nombre_usuario">Nombre de Usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario">
            </div>

            <button type="submit">Buscar</button>
        </form> 

        <h2>Resultados de la búsqueda:</h2>
        <ul id="resultados_busqueda">
            </ul>
    </div>

</body>
</html>
