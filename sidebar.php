<!DOCTYPE html>
<nav id="sidebar">
    <ul>
        <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Inicio</a></li>

        <li class="dropdown">
            <a href="#" onclick="toggleSubMenu(this)">Rol</a>
            <ul class="submenu">
                <li><a href="rol.view.php">Crear Rol</a></li>
                <li><a href="rol.search.php">Buscar Rol</a></li>
                <li><a href="rol.update.php">Actualizar Rol</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" onclick="toggleSubMenu(this)">Usuarios</a>
            <ul class="submenu">
                <li><a href="user.view.php">Crear Usuario</a></li>
                <li><a href="user.search.php">Buscar Usuario</a></li>
                <li><a href="user.update.php">Actualizar Usuario</a></li>
            </ul>
        </li>
    </ul>
</nav>

<script>
    function toggleSubMenu(element) {
        const submenu = element.nextElementSibling;
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    }
</script>
