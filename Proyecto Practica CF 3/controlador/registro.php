<?php

if (!empty($_POST["registrar"])) {
    if (!empty($_POST["documento"]) and !empty($_POST["nombre"]) and
    !empty($_POST["apellidos"]) and !empty($_POST["fechaNac"]) and
    !empty($_POST["ciudad"]) and !empty($_POST["correo"]) and
    !empty($_POST["telefono"]) and !empty($_POST["ocupacion"]) ) {

        $documento=$_POST["documento"];
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $fechaNac=$_POST["fechaNac"];
        $ciudad=$_POST["ciudad"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $ocupacion=$_POST["ocupacion"];

        $consulta= "select * from usuarios where documento = '$documento'";
        $result=$conexion->query($consulta);

        if ($result->num_rows > 0) {
            echo '<div class="alert alert-warning">Este cliente ya esta registrado</div>';
        }else{
        $sql=$conexion->query(" insert into usuarios (documento, nombre, apellidos, fechaNac, ciudad, correo, telefono, ocupacion) values
        ($documento,'$nombre','$apellidos','$fechaNac','$ciudad','$correo','$telefono','$ocupacion') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Cliente registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar Cliente</div>';
        }
    }

    }else {
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}

