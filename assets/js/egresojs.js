jQuery(document).ready(function() {
	$('#btnCreateEgreso').click(function() {
		vacios = validarFrmVacio('formNewEgreso');
		if(vacios > 0){
			alertify.error("Debe llenar todos los campos!");
			return false;
		}

		var datos=$('#formNewEgreso').serialize();

		$.ajax({
			url: '../../public/procesos/gastos/createGasto.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
				$('#tableRetiro').load('../componentes/tablegasto.php');
				$('#formNewEgreso')[0].reset();
				alertify.success("Agregado con ÉXITO");
			}else{
				alertify.error("Error al Registrar");
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
	$('#btnEditEgreso').click(function() {
		var datos = $('#formEditerEgreso').serialize();

		$.ajax({
			url: '../../public/procesos/gastos/updateGasto.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
		})
		.done(function(r) {
			if (!r.error) {
				$('#tableRetiro').load('../componentes/tablegasto.php');
				alertify.success("Agregado con ÉXITO");
			}else{
				alertify.error("Error al Registrar");
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
