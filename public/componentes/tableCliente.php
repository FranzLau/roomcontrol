<?php
  require '../../config/conexion.php';
  $sql = $con->query("SELECT * FROM client");
 ?>
<div class="table-responsive">
  <table class="table table-hover table-sm datatable-wide" id="tablecli" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>TIPO DOC</th>
        <th>N° DOC</th>
        <th>TELÉFONO</th>
        <th>E-MAIL</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($mostrarcli = $sql->fetch_row()){
      ?>
      <tr>
        <td><?php echo $mostrarcli[0] ?></td>
        <td><?php echo $mostrarcli[1]." ".$mostrarcli[2] ?></td>
        <td><?php echo $mostrarcli[3] ?></td>
        <td><?php echo $mostrarcli[4] ?></td>
        <td><?php echo $mostrarcli[5] ?></td>
        <td><?php echo $mostrarcli[6] ?></td>
        <td class="text-center">
          <a href="#" class="mr-3 btn-link-edit" title="Editar" data-toggle="modal" data-target="#modalClientEdit" onclick="readCliente('<?php echo $mostrarcli[0] ?>')"><i class="fas fa-pen"></i></a>
          <a href="#" class="btn-link-delete" title="Eliminar" onclick="deleteCliente('<?php echo $mostrarcli[0] ?>')"><i class="fas fa-trash-alt"></i></a>

        </td>
      </tr>
      <?php
         }
      ?>
    </tbody>
  </table>
</div>
 <script>
      $(document).ready(function() {
        $('#tablecli').DataTable({
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
