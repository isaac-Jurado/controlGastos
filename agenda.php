<?php
    if(isset($_GET['idDias'])){
        $link="servidor/agregarGasto.php?idDias=". $_GET['idDias'];
?>

<?php
    require_once 'header.php';
?>
<div class="container">
    <div class="row ">
        <div class="col-sm-8 text-center" >
            <form action="<?php echo $link ?>" method="POST" class="form-group mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="cantidad">MONTO</label>
                            <input type="number" required name="cantidad" class="form-control rounded-pill">
                        </div>
                        <div class="col">
                            <label for="hora">hora</label>
                            <input type="time" required name="hora" class="form-control rounded-pill">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-3">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" required name="descripcion" class="form-control rounded-pill">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-5">
                            <button class="btn btn-warning">AGREGAR</button>
                        </div>
                    </div>

                </div>

            </form>
                <div class="row">
                    <div class="col">
                        <div id="tablaGasto"></div>
                    </div>
                </div>


            
        </div>
    </div>
</div>


<?php
    require_once 'footer.php'
?>

<script>
    $(document).ready(function(){
        $('#tablaGasto').load('tablaGasto.php?idDias='+'<?php echo $_GET['idDias'] ?>');
    });
</script>

<?php
    }else{
        header("location:index.php");
    }
?>