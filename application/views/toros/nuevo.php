<div class="text-center">
<h1>NUEVO TORO</h1>
</div>
<form class=""
action="<?php echo site_url(); ?>/toros/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">NOMBRE:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre del toro"
          class="form-control"
          name="nombre_toro" value="" id="nombre_toro">
      </div>
      <div class="col-md-4">
          <label for="">RAZA:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el tipo de raza del toro"
          class="form-control"
          name="raza_toro" value="" id="raza_toro">
      </div>
      <div class="col-md-4">
        <label for="">PESO:</label>
        <br>
        <input type="number"
        placeholder="Ingrese el peso del toro"
        class="form-control"
        name="peso_toro" value="" id="peso_toro">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">ACIENDA:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre de la hacienda del toro"
          class="form-control"
          name="acienda_toro" value="" id="acienda_toro">
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
            <a href="<?php echo site_url(); ?>/toros/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
