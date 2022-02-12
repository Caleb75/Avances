<?php
include("header.php")
?>
        <div class="container">
        <form method="POST">
        <br>
        <center><div class="col-sm-8"><h2>Agregar Usuarios</h2></div></center>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombres" id="nombres"  placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                <label>Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cargo</label>
            <select class="form-select" id="inputGroupSelect01">
                <option selected>...</option>
                <option value="1">Administrativo</option>
                <option value="2">Operativo</option>
                <option value="3">Mantenimiento</option>
            </select>
                </div>
                <div class="form-group col-md-6">
                <label>Telefono</label>
                <input type="number" class="form-control" name="telefono" id="telefono" placeholder="" required>
            </div>
        </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="">Direccion</label>
                <textarea class="form-control" name="direccion" id="direccion" placeholder="" required>
                </textarea>
                </div>
                <div class="form-group col-md-6">
                <label for="">Correo Electronico</label>
                <input type="email" class="form-control" name="correo_electronico" id="correo_electronico"  placeholder="" required>
            </div>
        </div>
                <div class="form-group">
                <label for="">Contraseña</label>
                <input type="email" class="form-control" name="correo_electronico" id="correo_electronico"  placeholder="" required>
                </div>
                <div class="col text-center">
                <button type="submit" class="btn btn-danger center-block">Guardar Registro</button>
            </div>
        </div>     
</form>
<?php
include ("footer.php");
?>