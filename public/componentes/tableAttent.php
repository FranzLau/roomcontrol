<div class="table-responsive">
  <table class="table table-hover table-sm datatable-wide" id="dataTableAttent" width="100%" cellspacing="0">
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
  </table>
</div>
<script>
     $(document).ready(function() {
       $('#dataTableAttent').DataTable({
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
