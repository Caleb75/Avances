<?php
include("header.php")
?>
        <div class="container">
        <form method="POST">
        <br>
        <center><div class="col-sm-8"><h2>Mercancia</h2></div></center>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tipo mercancia</label>
                <input type="text" class="form-control" name="" id="nombres"  placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                <label>Numero de bultos</label>
                <input type="text" class="form-control" name="" id="apellidos" placeholder="" required>
            </div>
        </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                <label for="">Peso bruto</label>
                <input type="text" class="form-control" name="" id="direccion" placeholder="" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Peso Neto</label>
                <input type="text" class="form-control" name="" id="correo_electronico"  placeholder="" required>
            </div>
                <div class="form-group col-md-4">
                <label for="">Lote o Referecia</label>
                <input type="text" class="form-control" name="" id="correo_electronico"  placeholder="" required>
                </div>
                <div class="col text-center">
                <button type="submit" class="btn btn-danger center-block">Guardar Registro</button>
            </div>
        </div>     
</form>
<?php
include ("footer.php");
?>