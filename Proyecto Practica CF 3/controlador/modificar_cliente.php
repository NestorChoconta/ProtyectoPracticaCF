<?php

if (!empty($_POST["registrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["fechaNac"]) and 
    !empty($_POST["ciudad"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"]) and !empty($_POST["ocupacion"])) {
        $documento=$_POST["documento"];
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $fechaNac=$_POST["fechaNac"];
        $ciudad=$_POST["ciudad"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $ocupacion=$_POST["ocupacion"];

    $sql=$conexion->query(" update usuarios set nombre='$nombre', apellidos='$apellidos', fechaNac='$fechaNac',
    ciudad='$ciudad', correo='$correo', telefono='$telefono', ocupacion='$ocupacion' where documento=$documento ");
    if ($sql==1) {
        header("location:index.php");
    } else {
        echo ('<div class="alert alert-danger">error al actualizar</div>');
    }
    


    }else{
        echo ('<div class="alert alert-warning">Alguno de los campos esta vacio</div>');
    }
}

?>