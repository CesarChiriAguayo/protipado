with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && member.value==""){
			ok=false;
			alert("Debe escribir un nombre");
			member.focus();
		}
		if(ok &&ci.value==""){
			ok=false;
			alert("Debe escribir su ci");
			ci.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su email");
			email.focus();
		}
		if(ok){ submit(); }
	}
}
