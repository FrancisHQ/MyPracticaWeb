<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="academia";

    $con=mysqli_connect($host, $user, $password, $db) or die ("No es posible conectar con la base de datos");
        mysqli_select_db($con, $db);

    //Trabajando las variables

    $nombres=$_POST["nombres"];
    $direction=$_POST["direction"];
    $correo=$_POST["correo"];
    $comentarios=$_POST["comentarios"];
    $sql="INSERT INTO datos VALUES ('$nombres','$direction','$correo','$comentarios')";
    $ejecutar=mysqli_query($con,$sql);

    //Usamos las condiciones

    if(!$ejecutar){
        echo "<script> alert('Problemas al enviar')</script>";
        echo "<script> window.location.href=('index.html') </script>";
    }
    else{
        echo "<script> alert('Tu mensaje se envió correctamente.')</script>";
        echo "<script> window.location.href=('index.html') </script>";
    }
?>