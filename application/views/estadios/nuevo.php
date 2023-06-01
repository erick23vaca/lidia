<div class="text-center">
<h1>NUEVO ESTADIO</h1>
</div>
<form class=""
action="<?php echo site_url(); ?>/estadios/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">NOMBRE:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre del estadio"
          class="form-control"
          name="nombre_est" value="" id="nombre_est">
      </div>
      <div class="col-md-4">
          <label for="">CAPACIDAD:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la capacidad del estadio"
          class="form-control"
          name="capacidad_est" value="" id="capacidad_est">
      </div>
      <div class="col-md-4">
        <label for="">ESTABLOS:</label>
        <br>
        <input type="number"
        placeholder="Ingrese cuantos establos cuenta el estadio"
        class="form-control"
        name="establos_est" value="" id="establos_est">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">CAMERINOS:</label>
          <br>
          <input type="number"
          placeholder="Ingrese el numero de camerinos"
          class="form-control"
          name="camerinos_est" value="" id="camerinos_est">
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
            <a href="<?php echo site_url(); ?>/estadios/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
