<?php
  session_start();
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM room");
 ?>
<div class="table-responsive">
  <table class="table table-hover table-sm" id="tableProduc" width="100%" cellspacing="0">
    <thead>
        <tr>
          <th>ESTADO</th>
          <th>NOMBRE</th>
          <th>CATEGORIA</th>
          <th>PRECIO</th>
          <th>DETALLES</th>
          <th class="text-center">ACCION</th>
        </tr>
    </thead>
    <tbody>
        <?php while($mostrarprod = $sql->fetch_row()){ ?>
          <tr>
            <td>
              <?php
              if ($mostrarprod[4]=="Disponible") {
              ?>
              <a href="#" class="badge badge-outline-success"><i class="fas fa-door-open mr-2"></i>Disponible</a>
              <?php
              }elseif ($mostrarprod[4]=="Limpieza") {
              ?>
              <a href="#" class="badge badge-outline-info"><i class="fas fa-broom mr-2"></i>Limpieza</a>
              <?php
              }else {
              ?>
              <a href="#" class="badge badge-outline-danger"><i class="fas fa-door-closed mr-2"></i>Ocupado</a>
              <?php
              }
              ?>
            </td>
            <td><?php echo $mostrarprod[1] ?></td>
            <td><?php echo $obj->nameCategory( $mostrarprod[5]) ?></td>
            <td><?php echo $mostrarprod[3] ?></td>
            <td><?php echo $mostrarprod[2] ?></td>
            <td class="text-center">
              <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#ModalUpdateProd" onclick="ReadProduct('<?php echo $mostrarprod[0] ?>')"><i class="fas fa-pencil-alt"></i></a>
                <?php
                  if ($_SESSION['loginUser']['user_emp'] == "Administrador"):
                ?>
              <a href="#" class="btn-link-delete" title="Eliminar" onclick="deleteProduct('<?php echo $mostrarprod[0] ?>')"><i class="fas fa-trash-alt"></i></a>
                <?php endif; ?>
              </td>
           </tr>
         <?php } ?>
      </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableProduc').DataTable({
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
