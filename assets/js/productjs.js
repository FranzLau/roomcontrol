jQuery(document).ready(function() {
  $('#btnCreateProd').click(function() {
		vacios = validarFrmVacio('formCreateNewProd');
		if(vacios > 0){
			alertify.error("Debe llenar todos los campos!");
			return false;
		}
		var datos=$('#formCreateNewProd').serialize();
		$.ajax({
			url: '../../public/procesos/producto/createProducto.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (r==0) {
				alertify.error("El nombre de la habitación ya existe!");
			}else if(!r.error){
				$('#tableProducto').load('../componentes/tableProducto.php');
				$('#formCreateNewProd')[0].reset();
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
  //---------------------------UPDATE PRODUCTO---------------
  $('#btnUpdateProd').click(function() {
		var datos=$('#formUpdateProd').serialize();
		$.ajax({
			url: '../../public/procesos/producto/updateProducto.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
			  $('#tableProducto').load('../componentes/tableProducto.php');
				alertify.success("Actualizado con ÉXITO");
			}else{
				alertify.error("Error al Editar");
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
