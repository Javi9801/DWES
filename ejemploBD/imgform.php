<?php
require_once("Includes/sesion.php");
require_once("Clases/Usuario.php");

sesion::iniciar();

?>

<form name="MiForm" id="MiForm" method="post" action="cargarImagen.php"
enctype="multipart/form-data">
        <h4 class="text-center">Seleccione imagen a cargar</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="image" name="image" multiple>
          </div>
          <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
</form>
