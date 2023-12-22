<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC</title>
    <link rel="stylesheet" href="CSS/index.css">
    <script src="JavaScript/funcionNumeross.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/34aafd435e.js" crossorigin="anonymous"></script>
  </head>
<body class="hola">
    <br>
    <h1 class="p-3">CrediFamilia CF</h1>
    <br>
    <div >
    <form class="col-4 p-5" method="POST" id="miFormulario">
        <h3 class="text-center text-secondary">Registro de personas</h3><br>
        <?php 
        include "modelo/conexion.php"; 
        include "controlador/registro.php";
        ?>
  <div class="mb-3">
    <label class="form-label text-secondary">Numero de documento</label>
    <input type="number" class="form-control" name="documento" id="campoNumerico" onkeypress="validarCampo()" placeholder="Digita tu numero de documento ">
    <span id="errorCampoNumerico" class="error"></span> 
  </div>
  <div class="mb-3">
    <label class="form-label text-secondary">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Digita tu nombre">
  </div>
  <div class="mb-3">
    <label class="form-label text-secondary">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" placeholder="Digita tu Apellido">
  </div>
  <div class="mb-3">
    <label class="form-label text-secondary">Fecha De Nacimiento</label>
    <input type="date" class="form-control" name="fechaNac" placeholder="Digita tu fecha de naimiento">
  </div>
  <div class="mb-3">
  <label class="form-lavel text-secondary">Selecciona una Ciudad</label>
<select class="form-control" name="ciudad" >
    <option value="Bogota">Bogota</option>
    <option value="Medellín">Medellín</option>
    <option value="Cali">Cali</option>
    <option value="Barranquilla">Barranquilla</option>
    <option value="Cartagena">Cartagena</option>
    <option value="Soacha">Soacha</option>
    <option value="Cúcuta">Cúcuta</option>
    <option value="Soledad">Soledad</option>
    <option value="Bucaramanga">Bucaramanga</option>
    <option value="Bello">Bello</option>
    <option value="Valledupar">Valledupar</option>
    <option value="Villavicencio">Villavicencio</option>
    <option value="Santa Marta">Santa Marta</option>
    <option value="Ibagué">Ibagué</option>
    <option value="Montería">Montería</option>
    <option value="Pereira">Pereira</option>
    <option value="Manizales">Manizales</option>
    <option value="Pasto">Pasto</option>
    <option value="Neiva">Neiva</option>
    <option value="Palmira">Palmira</option>
    <option value="Popayán">Popayán</option>
    <option value="Buenaventura">Buenaventura</option>
    <option value="Armenia">Armenia</option>
    <option value="Floridablanca">Floridablanca</option>
    <option value="Sincelejo">Sincelejo</option>
    <option value="Itagüí">Itagüí</option>
    <option value="Tumaco">Tumaco</option>
    <option value="Envigado">Envigado</option>
    <option value="Dosquebradas">Dosquebradas</option>
    <option value="Tuluá">Tuluá</option>
    <option value="Barrancabermeja">Barrancabermeja</option>
    <option value="Riohacha">Riohacha</option>
</select>
</div>
  <div class="mb-3">
    <label class="form-label text-secondary">Correo</label>
    <input type="email" class="form-control" name="correo" placeholder="Digita tu correo">
  </div>
  <div class="mb-3">
    <label class="form-label text-secondary">Telefono</label>
    <input type="number" class="form-control" name="telefono" placeholder="Digita tu telefono">
  </div>
  <div class="mb-3">
  <label class="form-lavel text-secondary">Selecciona una Ciudad</label>
<select class="form-control" name="ocupacion" >
    <option value="Empleado">Empleado</option>
    <option value="Independiente">Independiente</option>
    <option value="Pensionado">Pensionado</option>
</select>
</div>
  <button type="submit" class="btn btn-primary" name="registrar" value="ok">Registrar</button>
</form>
</div>
<br>
<div class="tabla">
<?php
include "controlador/eliminar_cliente.php"
?>

<table class="table">
  <thead class="bg-info">
    <tr><h3 class="text-center text-secondary">Clientes Registrados</h3></tr><br>
    <tr>
      <th scope="col" class="text-center">Documento</th>
      <th scope="col" class="text-center">Nombre</th>
      <th scope="col" class="text-center">Apellidos</th>
      <th scope="col" class="text-center">fecha de nacimiento </th>
      <th scope="col" class="text-center">Ciudad</th>
      <th scope="col" class="text-center">Correo</th>
      <th scope="col" class="text-center">Telefono</th>
      <th scope="col" class="text-center">Ocupación</th>
      <th scope="col" class="text-center"></th>
    </tr>
  </thead>
  <tbody >
    <?php
    include "modelo/conexion.php";
    $sql=$conexion->query(" select * from usuarios ");
    while ($datos=$sql->fetch_object()) { ?>
    <tr>
      <td class="text-center"><?= $datos->documento?></td>
      <td class="text-center"><?= $datos->nombre?></td>
      <td class="text-center"><?= $datos->apellidos?></td>
      <td class="text-center"><?= $datos->fechaNac?></td>
      <td class="text-center"><?= $datos->ciudad?></td>
      <td class="text-center"><?= $datos->correo?></td>
      <td class="text-center"><?= $datos->telefono?></td>
      <td class="text-center"><?= $datos->ocupacion?></td>
      <td class="text-center">
        <a href="modificar_cliente.php?documento=<?= $datos->documento ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
        <a href="index.php?documento=<?= $datos->documento ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-user-xmark"></i> Eliminar</a>
      </td>
    </tr>      
    <?php }
    ?>

  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>