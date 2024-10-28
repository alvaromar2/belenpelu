<?php
//conexion
    $direccion= "localhost";
    $user="root";
    $password = "";
    $bd = "peluqueria";
     

    $nombre= $_POST["nombre"];
    $email= $_POST["email"];
    $telefono= $_POST["telefono"];
    $servicios= $_POST["servicios"];

    $conn = mysqli_connect($direccion,$user,$password,$bd);
    
?>