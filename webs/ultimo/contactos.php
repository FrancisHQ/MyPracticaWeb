<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="turismo";

    $con=mysqli_connect($host, $user, $password, $db) or die ("No es posible conectar con la base de datos");
        mysqli_select_db($con, $db);

    //Trabajando las variables

    $usuario=$_POST["usuario"];
    $correo=$_POST["correo"];
    $mensaje=$_POST["mensaje"];
    $sql="INSERT INTO turismo VALUES ('$usuario','$correo','$mensaje')";
    $ejecutar=mysqli_query($con,$sql);

    //Usamos las condiciones

    if(!$ejecutar){
        echo "<script> alert('¡Ups! Ocurrió un error, intenta enviar tu mensaje nuevamente')</script>";
        echo "<script> window.location.href=('index.html') </script>";
    }
    else{
        echo "<script> alert('Tu mensaje se envió correctamente.')</script>";
        echo "<script> window.location.href=('index.html') </script>";
    }
?>