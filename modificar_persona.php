<?php

include "model/conexion.php";
//recoger el id que se envio al seleccionar el producto a modificar y lo almaceno dentro de una variable
$id=$_GET["id"];
//aca hacemos la consulta con la var conexion que ahi se almacena todo y la trtaigo a $sql para que se almacene ahi
$sql=$conexion->query("SELECT * FROM usuarios where id_usu=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/57c95199c2.js" crossorigin="anonymous"></script>
</head>
<body>
    



<div class="container-fluid row">
<form class="col-4 p-3 m-auto" method="post" >
    <h3 class="text-center alert alert-secondary" >Modificar persona</h3>
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>" >
    <?php 
    include "controlador/controller_modificarPersona.php";
    //mientras en datos se almacena la consulta de los datos de sql
    while($datos=$sql->fetch_object()) {?>
<div class="mb-3">
    <label for="" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" name="nombre" id="" value="<?= $datos->nombre ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">DNI</label>
    <input type="text" class="form-control" name="dni" id="" value="<?= $datos->dni ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de Nacimiento</label>
    <input type="text" class="form-control" name="fecha_nac" id="" value="<?= $datos->fecha_nac ?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="" value="<?= $datos->email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <?php } ?>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Modificar persona</button>
</form>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>