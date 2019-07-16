<?php
  require '../../config/conexion.php';
  $sql = $con->query("SELECT * FROM egresos ");
 ?>

<div class="table-responsive">
  <table class="table table-hover table-sm datatable-wide" width="100%" cellspacing="0" id="tableGasto">
    <thead>
      <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th class="text-center">Opciones</th>
      </tr>
    </thead>

    <tbody>
      <?php while($vergasto = $sql->fetch_row()){ ?>
        <tr>
          <td><?php echo $vergasto[0] ?></td>
          <td><?php echo $vergasto[2] ?></td>
          <td><?php echo $vergasto[3] ?></td>
          <td><?php echo $vergasto[4] ?></td>
          <td class="text-center">
            <a href="#" class="mr-3 btn-link-edit" title="Editar" data-toggle="modal" data-target="#modalRetiroEditer" onclick="obtenDataEgreso('<?php echo $vergasto[0] ?>')"><i class="fas fa-pen"></i></a>
            <a href="#" class="btn-link-delete" title="Eliminar" onclick="deleteEgreso('<?php echo $vergasto[0] ?>')"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableGasto').DataTable({
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado, lo siento!",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtered from _MAX_ total records)",
        "search": "Buscar",
        "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
        }
      }
    });
  });
</script>
