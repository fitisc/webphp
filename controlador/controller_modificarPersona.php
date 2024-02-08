<?php 
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["dni"]) && !empty($_POST["fecha_nac"]) && !empty($_POST["email"])){
        $id = $_POST["id"];
        $nombre=$_POST["nombre"];
        $dni=$_POST["dni"];
        $fechaNac=$_POST["fecha_nac"];
        $email=$_POST["email"];
        //quiero actualizar la tabla usuarios y voy a ponerle nuevo valor que estan en las var noombre, dni, fechanac y email.
        $sql=$conexion->query("UPDATE usuarios set nombre='$nombre', dni=$dni, fecha_nac=$fechaNac, email='$email' where id_usu=$id");
        if($sql==1){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Error al modificar usuario</div>"; 
        }
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
}
}


?>