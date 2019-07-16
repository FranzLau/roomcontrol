jQuery(document).ready(function() {
  // Create Cliente ---------------------------
  $('#btn-CreateNewClient').click(function() {
		// vacios = validarFrmVacio('formCreateClient');
		// if(vacios > 0){
		// 	alertify.error("Debe llenar todos los campos!");
		//   return false;
		// }
		var datos=$('#Form-NewClient').serialize();
		$.ajax({
			url: '../../public/procesos/cliente/createCustomer.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (r==0) {
				alertify.error("El cliente ya existe!");
			}else if(!r.error){
				$('#tableClient').load('../componentes/tableCliente.php');
				$('#Form-NewClient')[0].reset();
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
  //------------- update Cliente ------------------
  $('#btnClientUpdate').click(function() {
		var datos=$('#formUpdateClient').serialize();
		$.ajax({
			url: '../../public/procesos/cliente/updateCliente.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
				$('#tableClient').load('../componentes/tableCliente.php');
				alertify.success("Actualizado con ÉXITO");
			}else{
				alertify.error("Error al editar el Campo");
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
