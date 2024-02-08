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
    <script>
        function eliminar() {
            let respuesta=confirm("estas seguro que quieres eliminar ese registro?");
            return respuesta
        }
    </script>
<h1 class="text-center p-3" >ACCESO AL SISTEMA</h1>
    <?php 
        include "model/conexion.php";
        include "controlador/controller_eliminar_persona.php";
        include "controlador/controller_registro_persona.php";
    ?>

    <div class="container-fluid row">
    <form class="col-4" method="POST" >
        <h3 class="text-center alert alert-secondary" >Registro de personas</h3>
        <div class="mb-3">
        <label for="" class="form-label">ID</label>
        <input type="text" class="form-control" name="id" id="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" name="nombre" id="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">DNI</label>
        <input type="text" class="form-control" name="dni" id="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="fecha_nac" id="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
 
    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" >Registrar</button>
    </form>

    <div class="col-8 p-4" >
    <table class="table">
        <thead class="bg-info" >
            <tr>
                <th scope="col">ID</th>
               
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Email</th>
                <th scope="col">Imagen</th> 
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "model/conexion.php";
            $sql=$conexion->query("SELECT * FROM usuarios ");//recorrer todos los registros de la db
            while($datos = $sql->fetch_object()){ ?>
            <tr>
                <td><?= $datos->id_usu ?></td>
                <td><?= $datos->nombre ?></td>
                <td><?= $datos->dni ?></td>
                <td><?= $datos->fecha_nac?></td>
                <td><?= $datos->email ?></td>
                <td>
                    <img style="width:60px;" src="data:image/jpg;base64,<?= base64_encode($datos->img) ?>" alt="" />
                </td>
       
                <td> <!--aca el boton va a enviar a la vista de modificar usuario o producto y el ? seguido de una var php,  significa que debe enviar un valor dentro de una variable. que valor quiero enviar?? el id de usuarios o productos -->
                    <a href="modificar_persona.php?id=<?= $datos->id_usu ?>" class="btn btn-small btn-warning" ><i class="fa-solid fa-pen"></i></i></a>

                    <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_usu ?>" class="btn btn-small btn-danger" ><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>

            <?php } ?>

   

        </tbody>
    </table>
    </div>
    </div> 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>