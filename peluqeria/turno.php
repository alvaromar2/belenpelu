<?php
//conexion
    $direccion= "localhost";
    $user="root";
    $password = "";
    $bd = "peluqueria";
    
    $conn = mysqli_connect($direccion,$user,$password,$bd);

    $cliente= $_POST["cliente"];
    $fecha= $_POST["fecha"];
    $hora= $_POST["hora"];
    
?>