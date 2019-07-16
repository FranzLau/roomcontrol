<?php
    require '../../config/conexion.php';
    $sql = $con->query("SELECT * FROM empleado ");
?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user mr-2"></i>Lista de Empleados</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-sm datatable-wide" id="dataTableEmp" width="100%" cellspacing="0">
          <thead>
              <tr>
               <th>ID</th>
               <th>NOMBRE</th>
               <th>DOC</th>
               <th>N° Doc</th>
               <th>TELÉFONO</th>
               <th>CORREO</th>
               <th class="text-center">ESTADO</th>
               <th class="text-center">ACCIONES</th>
              </tr>
          </thead>
          <tfoot>
            <tr>
             <th>ID</th>
             <th>NOMBRE</th>
             <th>DOC</th>
             <th>N° Doc</th>
             <th>TELÉFONO</th>
             <th>CORREO</th>
             <th class="text-center">ESTADO</th>
             <th class="text-center">ACCIONES</th>
            </tr>
          </tfoot>
          <tbody>
             <?php
              while($mostrar = $sql->fetch_row()){
              ?>
              <tr>
                 <td><?php echo $mostrar[0] ?></td>
                 <td><?php echo $mostrar[1]." ".$mostrar[2] ?></td>
                 <td><?php echo $mostrar[3] ?></td>
                 <td><?php echo $mostrar[4] ?></td>
                 <td><?php echo $mostrar[5] ?></td>
                 <td><?php echo $mostrar[6] ?></td>
                 <td class="text-center">
                   <?php
                   if ($mostrar[9]=="1") {
                   ?>
                     <div class="badge badge-pill badge-outline-success">
                       <i class="fas fa-user mr-2"></i> Activo
                     </div>
                   <?php
                   }else {
                   ?>
                   <div class="badge badge-pill badge-outline-danger">
                     <i class="fas fa-user-slash mr-2"></i>Inactivo
                   </div>
                   <?php
                   }
                   ?>
                 </td>

                 <td class="text-center">
                   <!-- <button type="button" class="btn btn-warning btn-sm" title="Editar" data-toggle="modal" data-target="#ModalEditarEmp" onclick="obtenDatosEmp('<?php echo $mostrar[0] ?>')"><i class="fas fa-edit"></i></button> -->
                   <a href="#" class="mr-3 btn-link-edit" title="Editar" data-toggle="modal" data-target="#ModalEditarEmp" onclick="obtenDatosEmp('<?php echo $mostrar[0] ?>')"><i class="fas fa-pen"></i></a>
                   <a href="#" class="btn-link-delete" title="Eliminar" onclick="deleteEmp('<?php echo $mostrar[0] ?>')"><i class="fas fa-trash-alt"></i></a>
                   <!-- <button type="button" class="btn btn-danger btn-sm" title="Eliminar" onclick="deleteEmp('<?php echo $mostrar[0] ?>')"><i class="fas fa-trash-alt"></i></button> -->
                 </td>
              </tr>
              <?php
                }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script>
       $(document).ready(function() {
         $('#dataTableEmp').DataTable({
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
