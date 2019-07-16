<?php
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM caja ");
 ?>
<div class="table-responsive">
  <table class="table table-sm table-hover datatable-wide" id="tableBox" width="100%" cellspacing="0">
    <thead class="bg-white">
      <tr>
        <th>ID</th>
        <th>Fecha Apertura</th>
        <th>Monto Apertura</th>
        <th>Fecha Cierre</th>
        <th>Monto Cierre</th>
        <th>Responsable</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Fecha Apertura</th>
        <th>Monto Apertura</th>
        <th>Fecha Cierre</th>
        <th>Monto Cierre</th>
        <th>Responsable</th>
        <th>Estado</th>
      </tr>
    </tfoot>
    <tbody>
      <?php while($vergasto = $sql->fetch_row()){ ?>
        <tr>
          <td><?php echo $vergasto[0] ?></td>
          <td><?php echo $vergasto[2] ?></td>
          <td><?php echo $vergasto[3] ?></td>
          <td><?php echo $vergasto[4] ?></td>
          <td><?php echo $vergasto[5] ?></td>
          <td><?php echo $obj->nombEmpleado($vergasto[1]) ?></td>
          <td>
            <?php
            if ($vergasto[6]=="Abierta") {
            ?>
            <a href="#" class="badge badge-outline-danger" data-toggle="modal" data-target="#modalCloseBox" onclick="obtenDataOpenbox('<?php echo $vergasto[0] ?>')"><i class="fas fa-exclamation-circle mr-2"></i>Abierta</a>
            <?php
            }else {
            ?>
            <span class="badge badge-outline-success"><i class="fas fa-check-circle mr-2"></i>Cerrada</span>
            
            <?php
            }
            ?>
          </td>
        </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableBox').DataTable({
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
