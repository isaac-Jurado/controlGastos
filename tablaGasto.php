<?php
    require_once 'servidor/conexion.php';
    $conexion = conexion();
    $sql = "SELECT id_gastos, monto, hora, descripcion FROM t_gastos";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table" id="tablaDeGastos">
    <thead>
        <th>ID Gastos</th>
        <th>Monto</th>
        <th>Hora</th>
        <th>Descripcion</th>
        <th>Eliminar Gasto</th>
    </thead>
    <tbody>
        <?php
            while($ver = mysqli_fetch_array($respuesta)){
               // $idDias = $ver['id_dias'];
                $idGasto = $ver['id_gastos'];
                $montos= $ver['monto'];
                $horas= $ver['hora'];
                $descripciones= $ver['descripcion'];
                //$link = "agenda.php?idDias=". $idDias;// . "&&dias" . $dia;
        ?>
        <tr>
            <td><?php echo $ver['id_gastos'];?></td>
            <td><?php echo $ver['monto'];?></td>
            <td><?php echo $ver['hora'];?></td>
            <td><?php echo $ver['descripcion'];?></td>
            <td>
                <form action="servidor/eliminarGasto.php?idDias=<?php echo $idDias ?>" method="POST">
                    <input type="text"  value="<?php echo $mostrar['id_tarea']; ?> " hidden required name="idEliminarGasto">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
            
        <?php
            }
        ?>
    </tbody>
</table>   