<?php 

if(!empty($_POST["btnregistrar"])){// si el usuario aprieta el btn registrar que quiero validar?? a continuacion pondremos los items a validar en otro if
    //aca se pone como llamamos al "name de cada input"
    if(!empty($_POST["id"]) && !empty($_POST["nombre"])  && !empty($_POST["dni"]) && !empty($_POST["fecha_nac"]) && !empty($_POST["email"])){
       //si el usuario ingresa voy a almacenar todos los datos en la db
       $id=$_POST["id"];
       $nombre=$_POST["nombre"];
       $dni=$_POST["dni"];
       $fechaNac=$_POST["fecha_nac"];
       $email=$_POST["email"];

       // vamos a crear una nueva var sql para hacer al query que es el llamado a insertar los datos en la db
       $sql=$conexion->query("insert into usuarios(id_usu,nombre,dni,fecha_nac,email) values('$id','$nombre','$dni','$fechaNac','$email')");
       //vamos a validar si se ha registrado o no
       if($sql==1){
        echo "<div class='alert alert-success'>Persona registrada correctamente </div>";

       }else{
        echo "<div class='alert alert-danger'>Error al registrar persona </div>";

       }
       
    }else{
        echo "<div class='alert alert-warning'>Alguno de los campos esta vacío </div>";
    }
}

?>