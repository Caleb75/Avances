<?php include("header.php")?>

<div class="container">
<form class="was-validated">
  <div class="mb-3">
  <center><div class="col-sm-8"><h2>Subir imagenes</h2></div></center>
        <hr>
    <label for="validationTextarea" class="form-label">Descripción</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="" required></textarea>
    <div class="invalid-feedback">
      Introduzca información acerca de las imagenes
    </div>
  </div>


  <div class="mb-3">
    <select class="form-select" required aria-label="select example">
      <option value="">Seleccionar numero de folio</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <div class="invalid-feedback">Folio no seleccionado</div>
  </div>

  <div class="mb-3">
    <input type="file" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Seleccione alguna imagen</div>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" disabled>Guardar datos</button>
  </div>
</form>
</div>

<?php include("footer.php")?>