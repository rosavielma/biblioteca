function muestra(){
var editorial = document.getElementById('editorial');
	switch(editorial.style.display){
		case 'none':
		case '':
		editorial.style.display = 'block';
		break;
	}	

var auto = document.getElementById('autorModal');
	switch(auto.style.display){
		case 'block':
		case '':
		auto.style.display = 'none';
		break;
	}
}

function borra(){
	document.forms[1].reset();	
}

window.onload = function()
{
	document.forms[0].reset();
	document.forms[0].elements[0].focus();
	document.getElementById("si").onclick      = muestra;
	document.getElementById("x").onclick      = borra;
}
