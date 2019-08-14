function mostrar(){
	document.getElementById('mostrarOcultar').style.display="block";
}
function ocultar(){
	document.getElementById('mostrarOcultar').style.display="none";
}
function mostrar_ocultar(){
	var cont = document.getElementById('mostrarOcultar');
	if (cont.style.display == "none") {
		mostrar();
		document.getElementById("btnSH").value = "Ocultar detalles";
	}
	else {
		ocultar();
		document.getElementById("btnSH").value = "Mostrar detalles";
	}
}