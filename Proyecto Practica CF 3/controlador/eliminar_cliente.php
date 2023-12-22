<?php
include "modelo/conexion.php";

if (!empty($_GET["documento"])) {
    $documento=$_GET["documento"];
    $sql=$conexion->query(" delete from usuarios where documento=$documento ");
    if ($sql==1) {
        echo ('<div class="alert alert-succes">Cliente eliminado correctamente</div>');
    }else {
        echo '<div class="alert alert-Danger">Error al eliminar el registro</div>';
    }
}

?>