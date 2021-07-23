<?php
    $idTarea=$_POST['idEliminarGasto'];
    $idDias= $_GET['idDias'];
    require_once 'conexion.php';
    $conexion=conexion();

    $sql="DELETE FROM t_gastos WHERE id_gasto='$idGasto'";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        $link = "../checkList.php?idDias=" . $idDias;
        header("location:" . $link);
    }else{
        echo "no se pudo eliminar, sigue practicando";
    }
?>