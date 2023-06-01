<div class="text-center">
  <h1>LISTADO DE TOROS</h1>
</div>
<br>
<?php if ($toros): ?>
  <!-- table-hoverpara que el pulsor se marque -->
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOMBRE DEL TORO</th>
      <th>RAZA DEL TORO</th>
      <th>PESO DEL TORO</th>
      <th>ACIENDA</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($toros as $filaTemporal):?>
      <tr>
        <td>
          <?php echo $filaTemporal->id_toro;?>
        </td>
        <td>
          <?php echo $filaTemporal->nombre_toro; ?>
        </td>
        <td>
          <?php echo $filaTemporal->raza_toro; ?>
        </td>
        <td>
          <?php echo $filaTemporal->peso_toro; ?>
        </td>
        <td>
          <?php echo $filaTemporal->acienda_toro; ?>
        </td>

        <td class="text-center">
          <a href="#" title="Editar Toros">
            <i class="glyphicon glyphicon-pencil"></i>
          </a>
          &nbsp;&nbsp; &nbsp;
          <a href="<?php echo site_url(); ?>/toros/eliminar/<?php echo $filaTemporal->id_toro ?>"
          title="Eliminar Toros" style="color:red;">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else: ?>
  <center>
  <h1>NO EXISTEN TOROS</h1>
  </center>
<?php endif; ?>
