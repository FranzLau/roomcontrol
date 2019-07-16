jQuery(document).ready(function() {
  $('#btn-saveOpenBox').click(function() {
		vacios = validarFrmVacio('formOpenBox');
		if(vacios > 0){
			alertify.error("Debe llenar todos los campos!");
			return false;
		}
		var datos=$('#formOpenBox').serialize();
		$.ajax({
			url: '../../public/procesos/box/createOpenbox.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (r==0) {
				alertify.error("Primero cierre Caja");
			}else if(!r.error){
				$('#tableBoxs').load('../componentes/tablebox.php');
				$('#formOpenBox')[0].reset();
				alertify.success("Agregado con ÉXITO");
			}else{
				alertify.error("ERROR al Registrar");
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		return false;
	});
  //---------------------------UPDATE BOX ---------------
  $('#btn-closeBox').click(function() {
		var datos=$('#formEditOpenbox').serialize();
		$.ajax({
			url: '../../public/procesos/box/updateOpenbox.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
        alertify.success("Cerrada con ÉXITO");
        location.reload();
			}else{
				alertify.error("Error al cerrar caja");
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
  });
});
