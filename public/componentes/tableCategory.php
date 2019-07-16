<?php
  require '../../config/conexion.php';
  $sql = $con->query("SELECT * FROM categoria ");
 ?>
 <div class="table-responsive" style="height: 300px; width: 100%;border: 1px solid #e0e0ef;overflow-y: scroll;" >
   <table class="table table-sm table-hover" width="100%" cellspacing="0" id="tableCateg">
     <thead>
       <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Descripción</th>
         <th class="text-center">Opciones</th>
       </tr>
     </thead>
     <tbody>
       <?php while($vercateg = $sql->fetch_row()){ ?>
         <tr>
           <td><?php echo $vercateg[0] ?></td>
           <td><?php echo $vercateg[1] ?></td>
           <td><?php echo $vercateg[2] ?></td>
           <td class="text-center">
             <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#modalEditCategory" onclick="ReadCategory('<?php echo $vercateg[0] ?>')"><i class="fas fa-pencil-alt"></i></a>
             <a href="#" class="btn-link-delete" title="Eliminar" onclick="deleteCategory('<?php echo $vercateg[0] ?>')"><i class="fas fa-trash-alt"></i></a>
             
           </td>
         </tr>
        <?php } ?>
     </tbody>
   </table>
 </div>
