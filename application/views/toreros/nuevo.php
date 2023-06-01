<div class="text-center">
<h1 class="glyphicon glyphicon-user"> NUEVO TORERO</h1>
</div>
<form class=""
action="<?php echo site_url(); ?>/toreros/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">NOMBRE:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre del torero"
          class="form-control"
          name="nombre_tor" value="" id="nombre_tor">
      </div>
      <div class="col-md-4">
          <label for="">APELLIDO:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el apellido del torero"
          class="form-control"
          name="apellido_tor" value="" id="apellido_tor">
      </div>
      <div class="col-md-4">
        <label for="">CIUDAD:</label>
        <br>
        <input type="text"
        placeholder="Ingrese la ciudad"
        class="form-control"
        name="ciudad_tor" value="" id="ciudad_tor">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">AÑOS:</label>
          <br>
          <input type="number"
          placeholder="Ingrese los años del torero"
          class="form-control"
          name="anos_tor" value="" id="anos_tor">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/toreros/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
