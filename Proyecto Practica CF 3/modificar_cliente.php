<?php
require_once("./modelo/conexion.php");

$documento=$_GET["documento"];

$sql=$conexion->query(" select * from usuarios where documento=$documento ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><br>
    <link rel="stylesheet" href="CSS/modificar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h1 class="p-3">CrediFamilia CF</h1>
<img src="IMG/agregar2.png" alt="hola" class="img-thumbnail">
<br>
<form class="col-4 p-3 " method="POST">
        <h3 class="text-center text-secondary">Modificacón de personas</h3><br>
    <input type="hidden" name="documento" value="<?= $_GET["documento"] ?>">
        <?php
        include ("controlador/modificar_cliente.php");
        while ($datos = $sql->fetch_object()){ ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellidos?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha De Nacimiento</label>
    <input type="date" class="form-control" name="fechaNac" value="<?= $datos->fechaNac?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cuidad</label>
    <input type="text" class="form-control" name="ciudad" value="<?= $datos->ciudad?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">correo</label>
    <input type="email" class="form-control" name="correo" value="<?= $datos->correo?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="number" class="form-control" name="telefono" value="<?= $datos->telefono?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ocupación</label>
    <input type="text" class="form-control" name="ocupacion" value="<?= $datos->ocupacion?>">
  </div>
        <?php
        }
        ?>
  <button type="submit" class="btn btn-primary " name="registrar" value="ok">Actualizar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>