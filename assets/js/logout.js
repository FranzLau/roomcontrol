function salir() {
    alertify.confirm("Desea salir del Sistema.",
	  function(){
	  	window.location = "../../logout.php";
	  },
	  function(){
	    alertify.success('Gracias por quedarte');
	  });
}
