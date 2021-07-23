<?php
    require_once 'servidor/conexion.php';
    $conexion = conexion();
    $sql = "SELECT id_dias, dias FROM t_dias";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table" id="tablaDeDias">
    <thead>
        <th>Fecha</th>
        <th>Selecionar</th>
    </thead>
    <tbody>
        <?php 
        while($ver = mysqli_fetch_array($respuesta)){ 
            $idDias = $ver['id_dias'];
            $dia = $ver['dias'];
            $link = "agenda.php?idDias=". $idDias;
        ?>
        <tr>
            <td><?php echo $ver['dias']; ?></td>
            <td>
                <a href="<?php echo $link; ?>" 
                    class="btn btn-info">
                    Seleccionar
                </a>
            </td>
        </tr>
        <?php
        } 
        ?>
    </tbody>
</table>


