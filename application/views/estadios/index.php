<div class="row">
  <div class="col-md-8">
      <h1>LISTADO DE ESTADIOS</h1>
  </div>
  <br>
<div class="col-md-4">
    <a href="<?php echo site_url('estadios/nuevo'); ?>" class="btn btn-primary">
    <i class="glyphicon glyphicon-plus"></i> Agregar Estadios</a>
</div>
</div>
<?php if ($estadios): ?>
  <!-- table-hoverpara que el pulsor se marque -->
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>CAPACIDAD</th>
      <th>ESTABLOS</th>
      <th>CAMERINOS</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estadios as $filaTemporal):?>
      <tr>
        <td>
          <?php echo $filaTemporal->id_est;?>
        </td>
        <td>
          <?php echo $filaTemporal->nombre_est; ?>
        </td>
        <td>
          <?php echo $filaTemporal->capacidad_est; ?>
        </td>
        <td>
          <?php echo $filaTemporal->establos_est; ?>
        </td>
        <td>
          <?php echo $filaTemporal->camerinos_est; ?>
        </td>

        <td class="text-center">
          <a href="#" title="Editar Estadios">
            <i class="glyphicon glyphicon-pencil"></i>
          </a>
          &nbsp;&nbsp; &nbsp;
          <a href="<?php echo site_url(); ?>/estadios/eliminar/<?php echo $filaTemporal->id_est;?>" title="Eliminar Estadios" style="color:red;" onclick="return confirm('¿Estas seguro de eliminar este registro?')">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else: ?>
  <center>
  <h1>NO EXISTEN ESTADIOS</h1>
  </center>
<?php endif; ?>
