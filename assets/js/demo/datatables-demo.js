// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
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
