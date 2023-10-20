<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="academia";

    $con=mysqli_connect($host, $user, $password, $db) or die ("No es posible conectar con la base de datos");
    mysqli_select_db($con, $db);

    //Trabajando las variables

    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $sql=mysqli_query($con, "SELECT * FROM academia WHERE usuario ='".$usuario."' and password = '".$password."' ");
    $nr=mysqli_num_rows($sql);

    //Uso mi condicional

    if($nr==1){
        header("Location:pagina.html");
    }
    else{
        echo "<script> alert('Los datos ingresados son incorrectos. Revisa si el usuario o contraseña son correctos') </script>";
        echo "<script> window.location.href=('index.html') </script>";

    }
?>