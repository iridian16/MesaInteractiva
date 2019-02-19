function cambia(boton){
 
     var color=boton.name;
        document.getElementById("prueba").style.background=color;
}

function cambia_info(boton){
	var menu = document.getElementById('contenido');
	var menu2 = document.getElementById('contenido2');
	var menu3 = document.getElementById('contenido3');
	var menu4 = document.getElementById('contenido4');
	if(boton.name=='camera'){
		menu.className='borde-on';
	}
	if(boton.name=='connection'){
		menu.className='borde-off';
	}
	if(boton.name=='purchase'){
		menu.className='borde-on1';
	}
	if(boton.name=='system'){
		menu.className='borde-off2';
	}

		
		if(boton.name=='camera2'){
		menu2.className='borde-onk';
	}
	if(boton.name=='connection2'){
		menu2.className='borde-offk';
	}
	if(boton.name=='purchase2'){
		menu2.className='borde-on1k';
	}
	if(boton.name=='system2'){
		menu2.className='borde-off2k';
	}

			if(boton.name=='camera3'){
		menu3.className='borde-onk1';
	}
	if(boton.name=='connection3'){
		menu3.className='borde-offk1';
	}
	if(boton.name=='purchase3'){
		menu3.className='borde-on1k1';
	}
	if(boton.name=='system3'){
		menu3.className='borde-off2k1';
	}

				if(boton.name=='camera4'){
		menu4.className='borde-onk12';
	}
	if(boton.name=='connection4'){
		menu4.className='borde-offk12';
	}
	if(boton.name=='purchase4'){
		menu4.className='borde-on1k12';
	}
	if(boton.name=='system4'){
		menu4.className='borde-off2k12';
	}
}