<?php
    $dia = $_POST['dia'];
    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_dias (dias) VALUES ('$dia')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar nada !";
    }
?>