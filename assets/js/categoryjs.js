jQuery(document).ready(function() {
  $('#btnCreateCategory').click(function() {
		vacios = validarFrmVacio('formNewCategory');
		if(vacios > 0){
			alertify.error("Debe llenar todos los campos!");
			return false;
		}
		var datos=$('#formNewCategory').serialize();
		$.ajax({
			url: '../../public/procesos/category/createCategory.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (r==0) {
				alertify.error("La Categoria ya existe!");
			}else if(!r.error){
				$('#tabCategory').load('../componentes/tableCategory.php');
				$('#formNewCategory')[0].reset();
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
  //---------------------------UPDATE CATEGORIA---------------
  $('#btnEditCategory').click(function() {
		var datos=$('#formUpdateCategory').serialize();
		$.ajax({
			url: '../../public/procesos/category/updateCategory.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
			  $('#tabCategory').load('../componentes/tableCategory.php');
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
