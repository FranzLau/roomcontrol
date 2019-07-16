jQuery(document).ready(function() {
  //CREAR EMPLEADO
  $('#btnCreateEmp').click(function() {
		var datos=$('#formCreateEmp').serialize();

		$.ajax({
			url: '../../public/procesos/empleado/createmp.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
				$('#tableEmp').load('../componentes/tableemp.php');
				$('#formCreateEmp')[0].reset();
				alertify.success("Agregado con ÉXITO");
			}else{
				alertify.error("Datos Incorrectos");
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
  //UPDATE EMPLEADO
  $('#btnUpdateEmp').click(function() {
		var datos = $('#formUpdateEmp').serialize();

		$.ajax({
			url: '../../public/procesos/empleado/updateEmp.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
		})
		.done(function(r) {
			if (!r.error) {
				$('#tableEmp').load('../componentes/tableemp.php');
				alertify.success("Editado con ÉXITO");
			}else{
				alertify.error("Datos Incorrectos");
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
