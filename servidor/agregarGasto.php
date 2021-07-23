<?php
    $idDias= $_GET['idDias'];
    $dias = $_GET['dias'];
    $monto = $_POST['cantidad'];
    $hora =$_POST['hora'];
    $descripcion = $_POST['descripcion'];
    include_once 'conexion.php';
    $conexion = conexion();

    $sql = "INSERT INTO t_gastos (monto, hora, descripcion) 
            VALUES ('$monto','$hora','$descripcion')";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
       $link = "../agenda.php?idDias=".$idDias."&&dias=" . $dias;
       
        header("location:". $link);
    }else{
        echo "aprende ha hacerlo bien";
        echo "<br>";
        echo $sql;
    }


?>