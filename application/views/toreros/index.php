<div class="row">
  <div class="col-md-8">
      <h1>LISTADO DE TOREROS</h1>
  </div>
  <br>
<div class="col-md-4">
    <a href="<?php echo site_url('toreros/nuevo'); ?>" class="btn btn-primary">
    <i class="glyphicon glyphicon-plus"></i> Agregar Estadios</a>
</div>
</div>
<?php if ($toreros): ?>
  <!-- table-hoverpara que el pulsor se marque -->
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>APELLIDO</th>
      <th>CIUDAD</th>
      <th>AÑOS</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($toreros as $filaTemporal):?>
      <tr>
        <td>
          <?php echo $filaTemporal->id_tor;?>
        </td>
        <td>
          <?php echo $filaTemporal->nombre_tor; ?>
        </td>
        <td>
          <?php echo $filaTemporal->apellido_tor; ?>
        </td>
        <td>
          <?php echo $filaTemporal->ciudad_tor; ?>
        </td>
        <td>
          <?php echo $filaTemporal->anos_tor; ?>
        </td>

        <td class="text-center">
          <a href="#" title="Editar Toreros">
            <i class="glyphicon glyphicon-pencil"></i>
          </a>
          &nbsp;&nbsp; &nbsp;
          <a href="<?php echo site_url(); ?>/toreros/eliminar/<?php echo $filaTemporal->id_tor;?>" title="Eliminar Toreros" style="color:red;" onclick="return confirm('¿Estas seguro de eliminar este registro?')">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else: ?>
  <center>
  <h1>NO EXISTEN TOREROS</h1>
  </center>
<?php endif; ?>
