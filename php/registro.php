<?php
include("conexion.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1){
        $name = trim($_POST['nombres']);
        $ape = trim($_POST['apellidos']);
        $email = trim($_POST['correo']);
        $pass = trim($_POST['contrasena']);
        //$consulta = "INSERT INTO `prueba`(`nombre`, `mail`) VALUES ('$name','$email')";
        $consulta = "INSERT INTO `login_prueba`(`nombre`, `apellido`, `email`, `pass`) VALUES ('$name','$ape','$email','$pass')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            echo "felicidades";
        } else {
            echo "a ocurrido un error";
        }

    } else {
        echo "complete los campos";
    }
}

?>