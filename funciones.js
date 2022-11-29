function seleccionar(){
	$("#chk_op1").on('change', function (ev){
		ev.preventDefault();//cancela el evento si es que es cancelable, pero no se detiene el funcionamiento
	$("#chk_op1").prop("checked", true);
	$("#chk_op2").prop("checked", false);

	$("#chk_op2").on('change', function (ev){
		ev.preventDefault();//cancela el evento si es que es cancelable, pero no se detiene el funcionamiento
	$("#chk_op2").prop("checked", false);
	$("#chk_op1").prop("checked", true);
	})
}