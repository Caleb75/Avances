<?php include("header.php")?>
<div class="container">
  <div class="row content">
    <div class="col-md-6 mb-3">
        <img src="almacen.png" class="img-fluid" alt="image">
        </div>
        <div class="col-md-6">
      <h3 class="signin-text mb-3">Iniciar sesión</h3>
      <form>
        <div class="form-group">
          <label for="email">Correo Electronico</label>
          <input type="email" name="email" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" class="form-control">
        </div>
        <br>
        <div class="form-group form-check">
          <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
          <label class="form-check-label" for="checkbox">Recordar</label>
        </div>
        <br>
        <button class="btn btn-class">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include("footer.php")?>