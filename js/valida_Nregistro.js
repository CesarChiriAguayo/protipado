with(document.agregarRegistro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && fecha.value==""){
			ok=false;
			alert("Debe seleccionar una fecha");
			fecha.focus();
		}
		if(ok &&member.value==""){
			ok=false;
			alert("Debe seleccionar un miembro");
			member.focus();
		}
		if(ok && monto.value==""){
			ok=false;
			alert("Debe escribir un monto numeral");
			monto.focus();
		}
		if(ok){ submit(); }
	}
}