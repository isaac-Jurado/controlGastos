<?php
    require_once 'header.php';
?>

<div class="container ">
    <h1 class="mt-4 text-center">MANEJADOR DE GASTOS PERSONALES</h1>
        <div class="row">
            <div class="col-sm-8">
                <form action="servidor/agregarDias.php"  method="POST" class="form-group mt-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="dia">Escoger dia</label>
                            <input type="date" name="dia" required class="form-control rounded-pill">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-8">
                            <button class="btn btn-info">AGREGAR</button>
                        </div>
                  </div>
                    <div class="row">
                        <div class="col-sm">
                            <div id="tablaDias"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>


<?php
    require_once 'footer.php';
?>
<script>
    $(document).ready(function(){
        $('#tablaDias').load('tablaDias.php');
    });
</script>