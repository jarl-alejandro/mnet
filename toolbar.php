<?php 
    $rol = $_SESSION["96e3f164788cb3c54bbf71647b7f54457ec3c3fb"];

    if ($rol == "Administrador") {
        include "toolbar-admin.php";
    }
    if ($rol == "Tecnico") {
        include "toolbar-tecnico.php";
    }
?>
